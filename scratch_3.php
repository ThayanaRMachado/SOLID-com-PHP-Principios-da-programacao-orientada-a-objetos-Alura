<?php

class Retangulo
{
    protected int $altura;
    protected int $largura;

    public function defineAltura(int $altura){
        $this->altura = $altura;
    }

    public function defineLargura(int $largura)
    {
        $this->largura = $largura;
    }

    public function calculaArea()
    {
        return $this->altura * $this->largura;
    }
}

class Quadrado extends Retangulo
{
    public function defineAltura(int $altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    public function defineLargura(int $largura)
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }
}

$forma = new Retangulo();
$forma->defineAltura(5);
$forma->defineLargura(10);

echo $forma->calculaArea();//50