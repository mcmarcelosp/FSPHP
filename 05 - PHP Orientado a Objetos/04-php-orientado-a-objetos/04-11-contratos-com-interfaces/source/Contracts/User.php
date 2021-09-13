<?php


namespace Source\Contracts;


class User implements Userinterface
{
    private $firstName;
    private $LastName;
    private $email;

    /**
     * User constructor.
     * @param $firstName
     * @param $LastName
     * @param $email
     */
    public function __construct($firstName, $LastName, $email)
    {
        $this->firstName = $firstName;
        $this->LastName = $LastName;
        $this->email = $email;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $LastName
     */
    public function setLastName($LastName): void
    {
        $this->LastName = $LastName;
    }



    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }




}