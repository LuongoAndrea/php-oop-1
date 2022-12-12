<?php
class Movie
{
    public $name;
    public $dataUsita;
    public $regista;
    public $img;
    function __construct(string $_name, string $_dataUsita, string $_regista, string $_img)
    {
        $this->name = $_name;
        $this->dataUsita = $_dataUsita;
        $this->regista = $_regista;
        $this->img = $_img;
    }
}
?>