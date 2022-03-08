<?php

/**
 * Author: Logan Orender
 * Date: 3/8/2022
 * File: person.class.php
 * Description:
 */
class Person
{
    private $first_name;
    private $last_name;

    public function __construct($first_name,$last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    public function toString()
    {
        return "Name: $this->first_name " . "$this->last_name";
    }
}