<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type)
    {
        if ($type == "name") {
            return $this->name;
        } elseif ($type == "description") {
            return $this->description;
        } else {
            return "Type not found.";
        }
    }
}