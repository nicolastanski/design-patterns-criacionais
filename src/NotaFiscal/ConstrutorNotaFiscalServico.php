<?php

namespace Alura\DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNotafiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNotafiscal * 0.06;

        return $this->notaFiscal;
    }
}