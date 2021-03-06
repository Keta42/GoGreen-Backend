<?php
/**
 * Created by PhpStorm.
 * User: Yamei
 * Date: 14/01/2018
 * Time: 20:01
 */

namespace Models;


class UserModel
{
    private $id;
    private $name;
    private $surname;
    private $login;
    private $password;
    private $salt;
    private $address;
    private $company;
    private $phoneNumber;
    private $rate;

    /**
     * UserModel constructor.
     * @param $id
     * @param $name
     * @param $surname
     * @param $login
     * @param $password
     * @param $salt
     * @param $address
     * @param $company
     * @param $phoneNumber
     * @param $rate
     */
    public function __construct($id, $name, $surname, $login, $password, $salt, $address, $company, $phoneNumber, $rate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        $this->password = $password;
        $this->salt = $salt;
        $this->address = $address;
        $this->company = $company;
        $this->phoneNumber = $phoneNumber;
        $this->rate = $rate;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function toArray() {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "surname" => $this->surname,
            "login" => $this->login,
            "password" => $this->password,
            "salt" => $this->salt,
            "address" => $this->address,
            "company" => $this->company,
            "phoneNumber" => $this->phoneNumber,
            "rate" => $this->rate
        );
    }
}