<?php

class Triangulo implements IFiguras {
    private $lado1;
    private $lado2;
    private $lado3;
    private $lados;

    //metodos de acceso
    public function setLado1($lado1){
        $this->lado1 = $lado1;
    }

    public function setLado2($lado2){
        $this->lado2 = $lado2;
    }
    public function setLado3($lado3){
        $this->lado3 = $lado3;
    }
    
    //constructor
    public function __construct(){
        $this->lados = 3;
    }

    public function area(){
        $s = ($this->lado1 + $this->lado2 +$this->lado3) / 2;
        $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
        return  $area;
    }

    public function perimetro(){
        return $this->lado1 + $this->lado2 +$this->lado3;
    }

    public function descripcion(){
        $respuesta = array();
        $respuesta []= array(
            'success' => 'OK',
            'nameFigura'=> 'Triangulo',
            'resultado' => 'Esta figura es un  Triangulo  su perimetro es: '.$this->perimetro(). ' Su area es: '.$this->area(),
            'perimetro' => $this->perimetro(). ' cm',
            'area' => $this->area(). ' cm2'  
        );
        $head = array('triangulo' => $respuesta);
        $json_string = json_encode($head,JSON_UNESCAPED_UNICODE);
        return $json_string;
    }
}
