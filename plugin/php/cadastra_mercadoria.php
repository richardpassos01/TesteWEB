	<!--Conecta ao BD -->
	<?php include("conecta.php") ?>


	<!--Inclui a Herança layout (Tolbar bootstrap com efeitos navbar+carrosel)-->
	<?php include("layout.php") ?>



				<div class="container theme-showcase" role="main">
		
				<div class="page-header">
					<center><h1>Produto cadastrado com sucesso</h1></center>
				</div>	
				
				<div class="page-header">
					<center><h4>Segue dados do produto cadastrado em nosso sistema</h4></center>
					<center><h6><u>Atenção: Anote o numero de protocolo, caso queira acompanhar seu pedido,
					basta busca-lo pelo numero de ID na barra de pesquisa customizada</u></h4></center>
				</div>
				
				<div class="row">
					<div class="col-md-12">
					</div>
				</div>
				<br/>

	<?php

		//Criação das variaveis
		$cod_Mercadoria= "(cod_Mercadoria_seq.nextval)";
		$tipo_mercadoria=$_POST['tipo_mercadoria'];
		$nome=$_POST['nome_mercadoria'];
		$qtd=$_POST['quantidade'];
		$preco=$_POST['preco'];
		$tipo_negocio=$_POST['inputOptions'];;


		//Inserindo valores no banco de dados
			if($tipo_negocio==1){

				$stid = oci_parse($conn, " insert into plataforma_mercadoria
				(cod_mercadoria, tipo_mercadoria, nome_mercadoria, quantidade, preco, tipo_negocio)
				values(cod_Mercadoria_seq.nextval, '$tipo_mercadoria', '$nome',$qtd, '$preco', 'Compra')");
				oci_execute($stid);	
				}

			else {
			
			$stid = oci_parse($conn, " insert into plataforma_mercadoria
			(cod_mercadoria, tipo_mercadoria, nome_mercadoria, quantidade, preco, tipo_negocio)
			values(cod_Mercadoria_seq.nextval, '$tipo_mercadoria', '$nome',$qtd, '$preco', 'Venda')");
			oci_execute($stid);
				}
	?>


			
	<?php
							
					
		//Query faz consulta do ultimo commit do Banco de Dados.	
			
		$consulta='
			select cod_mercadoria as "id",
			tipo_mercadoria as "tipo",
			nome_mercadoria as "nome",
			quantidade as "qtd", 
			preco as "preco", 
			tipo_negocio as "negocio" 
			from plataforma_mercadoria
			where cod_mercadoria=(SELECT MAX(cod_mercadoria) FROM plataforma_mercadoria)'
			;
						
		$resultado = OCIParse($conn, $consulta);		//oci_parse equivale ao mysqli_query()
		
			
			 oci_execute($resultado);
						
				while($row = oci_fetch_assoc($resultado)):			//oci_fetch_assoc() equivale ao mysqli_fetch_assoc()
						
					echo		//O Echo imprimi os dados do produto que foi cadastrado//os Rows são as linhas da consulta, query.
						
					"<h4><ul><strong>ID de Protocolo gerado: </strong>" 							. $row['id'] . 
					"<br/><br/><strong>Tipo de Mercadoria: </strong>"   							. $row['tipo'] . 
					"<br/><br/><strong>Nome do produto: </strong>" 									. $row['nome'] . 
					"<br/><br/><strong>Quantidade de produtos: </strong>" 							. $row['qtd'] . 
					"<br/><br/><strong>O valor do produto anunciado em reis é: </strong>" 			. $row['preco'] . 
					"<br/><br/><strong>Você optou por fazer uma: </strong>" 						. $row['negocio'] . 
					"</br>";
					 
					 endwhile;
						
		?>

	</body>	

</html>