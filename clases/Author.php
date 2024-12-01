<?php
class Author{
    private $id_author;
    private $name;
    private $biblliography;

    public function __construct($id_author, $name, $biblliography){
        $this->id_author = $id_author;
        $this->name = $name;
        $this->biblliography = $biblliography;
    }

    public function getDetails(){
        return array(
            'id_author' => $this->id_author,
            'name' => $this->name,
            'biblliography' => $this->biblliography
        );
    }
}
?>