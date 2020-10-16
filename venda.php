<?php

use Alura\DesignPattern\Venda\VendaProdutoFactory;
use Alura\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda1 = new VendaServicoFactory('Nicolas Tanski');
$venda1 = $fabricaVenda1->criarVenda();
$imposto1 = $fabricaVenda1->imposto();

var_dump($venda1, $imposto1);

$fabricaVenda2 = new VendaProdutoFactory(1000);
$venda2 = $fabricaVenda2->criarVenda();
$imposto2 = $fabricaVenda2->imposto();

var_dump($venda2, $imposto2);