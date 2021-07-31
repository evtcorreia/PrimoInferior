<?php

    /* 
        crie uma função que receba como parâmetro um número inteiro e retorne o 
        maior número primo inferior ao número recebido como parâmetro. 
        Se o argumento for negativo, a função deverá retornar o valor zero.

            Exemplo para teste:

                Numero 10 = 7
                Número 30 = 29 
    */


    function PrimoInferior($valor)
    {
        
        for($i=$valor; $i > 0; $i--)
        {
            $primo = 0;
            for($j = 2; $j <= $i/2; $j++)
            {             
                
                if( $i % $j == 0)
                {
                    $primo++;
                
                }
                
            }
            if($primo == 0)
                {
                    return($i);
                }
            
        }
            
        
    }


    echo PrimoInferior(30);