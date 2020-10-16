<?php

namespace Alura\DesignPattern\Venda;

class Venda
{
    private $dataRealizacao;

    public function __construct(\DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}