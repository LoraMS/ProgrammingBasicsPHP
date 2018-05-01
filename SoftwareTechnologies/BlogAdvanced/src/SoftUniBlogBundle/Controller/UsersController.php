<?php

namespace SoftUniBlogBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Role;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserEditType;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if($user->getPassword() != $user->getConfirm()){
            $form->addError(new FormError('Passwords mismatch!'));
            return $this->render('user/register.html.twig', ['form' => $form->createView()]);
        }
        if($form->isSubmitted()){
            $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $roleRepository = $this->getDoctrine()->getRepository(Role::class);
            $userRole = $roleRepository->findOneBy(['name' => 'ROLE_USER']);
            $user->setRole($userRole);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('security_login');
        }
        return $this->render('user/register.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/logout", name="security_logout")
     * @throws \Exception
     */

    public function logout(){
    throw new \Exception("Logout failed!");
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/profile", name="user_profile")
     */
    public function profileAction()
    {
        $user = $this->getUser();
        $articles = $user->getArticles();
        return $this->render("user/profile.html.twig", ['user'=>$user, 'articles'=>$articles]);
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/user/list", name="user_list")
     */
    public function listUsers()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render("user/list.html.twig", ['users'=>$users]);

    }

    /**
     * @Route("/user/edit/{id}", name="user_edit")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editUser($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        if($user === null)
        {
            return $this->redirectToRoute("user_list");
        }
        $form = $this->createForm(UserEditType::class, $user);

        $oldPassword = $user->getPassword();

        $form->handleRequest($request);

        if($form->isValid()){
            if(empty ($user->getPassword())){
                $user->setPassword($oldPassword);
            } else{
                $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
            }

//            // not working -> my getRoles() is different and i have not setRoles()
//            $roles = [];
//            $roleRepo = $this->getDoctrine()->getRepository(Role::class);
//            foreach ($user->getRoles() as $roleName){
//                $roles[] = $roleRepo->findOneBy(['name' => $roleName ]);
//            }
//            $user->setRoles($roles);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("user_list");
        }

        return $this->render("user/edit.html.twig", ['form'=>$form->createView(), 'user'=>$user]);
    }

    /**
     * @Route("/user/delete/{id}", name="user_delete")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function deleteUser($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        if($user === null)
        {
            return $this->redirectToRoute("user_list");
        }
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
            return $this->redirectToRoute("user_list");
        }

        return $this->render("user/delete.html.twig", ['form'=>$form->createView(), 'user'=>$user]);
    }
}
