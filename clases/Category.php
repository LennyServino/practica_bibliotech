<?php
class Category{
    private $id_category;
    private $name;

    public function __construct($id_category, $name){
        $this->id_category = $id_category;
        $this->name = $name;
    }

    public function getId(){
        return $this->id_category;
    }

    public function getName(){
        return $this->name;
    }
}