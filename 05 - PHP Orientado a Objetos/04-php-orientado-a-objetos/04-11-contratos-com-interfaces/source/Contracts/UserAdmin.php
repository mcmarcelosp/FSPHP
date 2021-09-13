<?php


namespace Source\Contracts;


class UserAdmin extends User implements Userinterface, UserErrorInterface
{

    private $level;
    private $error;

    public function __construct($firstName, $LastName, $email)
    {
        parent::__construct($firstName, $LastName, $email);
        $this->level = 10;
    }


    /**
     * @param mixed $error
     */
    public function setError($error): void
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
}