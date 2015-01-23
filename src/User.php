<?php

/**
 * @Entity @Table(name="users")
 */
class User
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;
    /**
     * @Column(type="string")
     */
    protected $name;
    /**
     * @Column(type="string")
     */
    protected $password;
    /**
     * @Column(type="string")
     */
    protected $status;

    public function getUserId()
    {
        return $this->id;
    }

    public function getUserName()
    {
        return $this->name;
    }

    public function setUserName($name)
    {
        $this->name = $name;
    }

    public function getUserPassword()
    {
        return $this->password;
    }

    public function setUserPassword($password)
    {
        $this->password = $password;
    }

    public function getUserStatus()
    {
        return $this->status;
    }
}