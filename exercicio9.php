<?php
/*9. (DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
preços em 3 situações:
a. comprar apenas latas de 18 litros;
b. comprar apenas galões de 3,6 litros;
c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
arredonde os valores para cima, isto é, considere latas cheias.*/


    print "Tamanho da área a ser pintada(m²): ";
    $area_a_ser_pintada = fgets(STDIN);

         $folga = $area_a_ser_pintada+(($area_a_ser_pintada*10)/100);


    //------------------------------------------------------------------------------------
    //latas de 18L
        print "-------Latas------";
       
        print "\n";
        print "\n";

        $rendimento_da_lata = 108;    
        $quantidade_lata = ceil($area_a_ser_pintada/$rendimento_da_lata);
        $preco_lata = $quantidade_lata*80;


        print "Latas de 18L: $quantidade_lata \n";
        print "R$ $preco_lata \n";
        print "\n";
        print "\n";
       

    //------------------------------------------------------------------------------------
    //galões de 3,6L
        print "-------Galões-------";
        print "\n";
        print "\n";

        $rendimento_do_galao = 21.6;
        $quantidade_galao = ceil($area_a_ser_pintada/$rendimento_do_galao);
        $preco_galao = $quantidade_galao*25;

        print "Galões de 3,6L: $quantidade_galao \n";
        print "R$ $preco_galao \n";
        print "\n";
        print "\n";
        

    //------------------------------------------------------------------------------------
    //Latas de 18L e galões de 3,6L misturados
        print "---Galões e latas---";
        print "\n";
        print "\n";

        $quantidade_galao2 = $quantidade_galao;
        $quantidade_lata2 = 0;

    if ($quantidade_galao2 >= 5) {
        $quantidade_lata2 = ceil($quantidade_galao2/5);
        $quantidade_galao2 = ceil($quantidade_galao2%5);
    }
        $total_a_pagar = ($quantidade_galao2*25)+($quantidade_lata2*80);
        print "Você precisará de: \n";
        print "Galões - $quantidade_galao2 \n";
        print "Latas  - $quantidade_lata2 \n\n";
        print "Total a Pagar: R$ $total_a_pagar \n";

