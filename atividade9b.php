<?php

print "Quantos metros quadrados você deseja pintar? ";
$metros_p_pintar = fgets (STDIN);
$quant_latas = ceil ($metros_p_pintar/21.6);

print "Você precisara de $quant_latas latas";
$preco_pagar = $quant_latas*25;

print " o valor a pagar é de $preco_pagar reais";