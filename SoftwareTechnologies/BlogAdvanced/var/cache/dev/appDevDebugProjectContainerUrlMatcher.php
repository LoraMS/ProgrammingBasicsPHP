<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/article')) {
            // article_create
            if ('/article/create' === $pathinfo) {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::create',  '_route' => 'article_create',);
            }

            // article_view
            if (preg_match('#^/article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::viewArticle',));
            }

            // article_edit
            if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::editArticle',));
            }

            // article_delete
            if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::deleteArticle',));
            }

        }

        elseif (0 === strpos($pathinfo, '/category')) {
            // category_list
            if ('/category/list' === $pathinfo) {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::listCategories',  '_route' => 'category_list',);
            }

            // category_edit
            if (0 === strpos($pathinfo, '/category/edit') && preg_match('#^/category/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::editCategory',));
            }

            // category_delete
            if (0 === strpos($pathinfo, '/category/delete') && preg_match('#^/category/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::deleteCategory',));
            }

            // category_create
            if ('/category/create' === $pathinfo) {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::CreateCategory',  '_route' => 'category_create',);
            }

            // articles_in_category
            if (preg_match('#^/category/(?P<id>[^/]++)/articles$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_in_category')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::articlesInCategory',));
            }

        }

        // blog_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'SoftUniBlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_blog_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_index'));
            }

            return $ret;
        }
        not_blog_index:

        // security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::indexAction',  '_route' => 'security_login',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UsersController::logout',  '_route' => 'security_logout',);
        }

        // articles_in_tag
        if (0 === strpos($pathinfo, '/tags') && preg_match('#^/tags/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_in_tag')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\TagController::indexAction',));
        }

        // user_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UsersController::registerAction',  '_route' => 'user_register',);
        }

        // user_profile
        if ('/profile' === $pathinfo) {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UsersController::profileAction',  '_route' => 'user_profile',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_list
            if ('/user/list' === $pathinfo) {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UsersController::listUsers',  '_route' => 'user_list',);
            }

            // user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UsersController::editUser',));
            }

            // user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UsersController::deleteUser',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
