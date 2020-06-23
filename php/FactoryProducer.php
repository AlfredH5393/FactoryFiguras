<?php
require './IFigura.php';
require './Cuadrado.php';
require './Rectangulo.php';
require './Triangulo.php';
require './Circulo.php';

class FactoryProducer{


    public static function crearfactory($figura){
        $facoryObeject;

        switch ($figura) {
            case 'Cuadrado':
                 $facoryObeject = new Cuadrado();
                break;
            case 'Rectangulo':
                 $facoryObeject = new Rectangulo();
                break;
            case 'Triangulo':
                 $facoryObeject = new Triangulo();
                break;
            case 'Circulo':
                 $facoryObeject = new Circulo();
                break;
        }

        return $facoryObeject;
    }
}
