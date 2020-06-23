<?php

class Cuadrado implements IFiguras {
    private $lado;
    private $lados;

    public function setLado($lado){
        $this->lado = $lado;
    }

    public function __construct(){
        $this->lados = 4;
    }

    public function area(){
        return pow($this->lado, 2);
    }

    public function perimetro(){
        return $this->lados * $this->lado;
    }

    public function descripcion(){
        $respuesta = array();
        $respuesta []= array(
            'success' => 'OK',
            'nameFigura'=> 'Cuadrado',
            'resultado' => 'Esta figura es un  Cuadrado  su perimetro es: '.$this->perimetro(). ' Su area es: '.$this->area(),
            'perimetro' => $this->perimetro(). ' cm',
            'area' => $this->area(). ' cm2' 
        );
        $head = array('cuadrado' => $respuesta);
        $json_string = json_encode($head,JSON_UNESCAPED_UNICODE);
        return $json_string;
    }
}
