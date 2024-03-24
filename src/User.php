<?php
namespace Samit\Phpcomposer;

class User
{
    // Properties
    public $firstName;
    public $lastName;
    public $email;

    // Methods
    public function loginProcess()
    {
        echo $this->firstName . ' ' . $this->lastName . ' '. $this->email. ' is logging in.';
    }
}