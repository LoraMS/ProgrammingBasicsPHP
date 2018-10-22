<?php

class Family
{
    public $members;

    public function __construct()
    {
        $this->members = [];
    }

    public function addMember(Person $member) : void{
        $this->members[] = $member;
    }

    public function getOldestMember(){
        usort($this->members, function ($member1, $member2){
            return $member1->getAge() < $member2->getAge();
        });

        return $this->members[0];
    }
}