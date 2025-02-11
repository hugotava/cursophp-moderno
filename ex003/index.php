<?php
    // 0x = hexadecimal; 0b = binário; 0 = Octal;
        // $hexa = 0x1A;
        // echo "O valor da variável hexima é $hexa";
        // $oct = 010;
        // echo "O valor da variável octal é $oct";

        // $v = 300;
        // var_dump($v); //Funçao interna do php que mostra a variável o seu respectivo tipo.

        //$num = 3e2; // 3 x 10²
        //echo "o valor é $num";
        
        //$n = 5e3;
        // echo "o valor é $n";
        //var_dump($n);
        
      // $num = (float) "950";
        // var_dump($num);

		// Tipos primitivos compostos
		// que não são escalares
		// ARRAY e OBJECT

        // $vet = [6, 2.5, "Maria", 3, 5];
        // var_dump($vet);
        
        class Pessoa {
        	private string $nome;
        }
        
        $p = new Pessoa;
        var_dump($p);
    ?>