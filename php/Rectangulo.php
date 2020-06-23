<?php

class Rectangulo implements IFiguras {
    private $base;
    private $altura;
    private $lados;

    //metodos de acceso
    public function setBase($base){
        $this->base = $base;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }
    
    //constructor
    public function __construct(){
        $this->lados = 4;
    }

    public function area(){
        return  $this->base * $this->altura;
    }

    public function perimetro(){
        return ($this->base * $this->altura) * 2;
    }

    public function descripcion(){
        $respuesta = array();
        $respuesta []= array(
            'success' => 'OK',
            'nameFigura'=> 'Rectangulo',
            'resultado' => 'Esta figura es un  Rectangulo  su perimetro es: '.$this->perimetro(). ' Su area es: '.$this->area(),
            'perimetro' => $this->perimetro(). ' cm',
            'area' => $this->area(). ' cm2'   
        );
        $head = array('rectangulo' => $respuesta);
        $json_string = json_encode($head,JSON_UNESCAPED_UNICODE);
        return $json_string;
    }
}
