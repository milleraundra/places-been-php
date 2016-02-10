<?php
class Place
{
    private $city;
    private $photo;

    function __construct($city_name, $image)
    {
        $this->city = $city_name;
        $this->photo = $image;
    }

    function setCity($city_name)
    {
        $this->city = $city_name;
    }

    function getCity()
    {
        return $this->city;
    }

    function setPhoto($image)
    {
        $this->photo = $image;
    }

    function getPhoto()
    {
        return $this->photo;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        return $_SESSION['list_of_places'] = array();
    }

}


 ?>
