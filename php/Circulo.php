<?php

class Circulo implements IFiguras {
    private $radio;
    private $nameCircle;

    public function setRadio($radio){
        $this->radio = $radio;
    }

    public function __construct(){
        $this->nameCircle = 'Circulo';
    }

    public function area(){
        $area = (pi() * pow($this->radio, 2));
        return $area;
    }

    public function perimetro(){
       return ( 2 * pi() * $this->radio);
    }

    public function descripcion(){
        $respuesta = array();
        $respuesta []= array(
            'success' => 'OK',
            'nameFigura'=> 'Circulo',
            'resultado' => 'Esta figura es un '.  $this->nameCircle ." / ".'  Su perimetro es: '.$this->perimetro().' cm '. "  /  ". ' Su area es: '.$this->area(). ' cm2',
            'perimetro' => $this->perimetro(). ' cm',
            'area' => $this->area(). ' cm2'
        );
        $head = array('circulo' => $respuesta);
        $json_string = json_encode($head,JSON_UNESCAPED_UNICODE);
        return $json_string;
    }
}
