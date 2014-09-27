<?php

class myClass
{
    // public property
    private $username;

    // public methods
    public function set_data($username)
    {
        $this->username = $username;
    }

    public function get_data()
    {
        return $this->username;
    }
}

$my_object = new myClass();
$my_object->set_data("Are you ready to learn OOP?");
echo $my_object->get_data();