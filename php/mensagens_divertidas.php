<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		
		<?php 
		#AS ASPAS('') SIMPLES ELE IMPRIME SO O CONTEUDO DA VARIAVEL
		#JA A DUPLA ("") O PHP VERIFICA SE HÁ ALGUMA VARIAVEL DENTRO DO QUE VAI SER EXIBIDO
			//int
			$valor_inteiro = 1;
			print 'Inteiro = ' .$valor_inteiro;
			print '<br />';
			print "Inteiro = $valor_inteiro <br/>";
			
			//float
			$valor_fracionado = 10.7;
			print 'Float = ' .$valor_fracionado;
			print '<br />';
			
			//boolean 
			$estado = true; //false
			print 'Boolean = ' .$estado;		
			print '<br />';
			
			//strings
			$texto = 'Curso de PHP';
			print 'String = ' .$texto;		
			print '<br />';

			//arrays (falaremos mais a diante no curso)
			print "------------------------------<br/><br/>";
			//PRIMEIRA FORMA DE FAZER UM ARREY
			$lista_compra1[1]= 'arroz';
			$lista_compra1[2]= 'feijão';


			print "------------------------------<br/><br/>";
			$lista_compra = array(1 => "arroz <br/>" , 2 => 'feijão' , 3 => 'batata', 4 => '7');

			print "COISAS A COMPRAR <br/>"; 
			var_dump($lista_compra);

			print "<br/><br/>COISAS A COMPRAR <br/>"; 
			print_r($lista_compra);

		?>

	</body>
</html>