<?php

namespace Alura\DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNotafiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNotafiscal * 0.02;

        return $this->notaFiscal;
    }
}