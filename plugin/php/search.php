	<!--Conecta ao BD -->
	<?php include("conecta.php") ?>

	<!--Inclui a Herança layout (Tolbar bootstrap com efeitos navbar+carrosel)-->
	<?php include("layout.php") ?>

	<div class="container theme-showcase" role="main">	
		<div class="page-header">
		<center><h1>Pagina de busca</h1></center>						
		</div>								
		<div class="row">
		<div class="col-md-12">
		</div>
		</div>
		<br/>				
	<?php 	
	
		$consulta = 'select cod_mercadoria as "id", tipo_mercadoria as "tipo",nome_mercadoria as "nome",quantidade as "qtd", 
		preco as "preco", tipo_negocio as "negocio" from plataforma_mercadoria where cod_mercadoria='. $_POST['busca'].'';	

		$resultado = OCIParse($conn, $consulta);	//oci_parse equivale ao mysql_query()	
		oci_execute($resultado);	

		$row = oci_fetch_assoc($resultado);	//oci_fetch_assoc() equivale ao mysql_fetch_assoc()

			if($row>0){									
				echo		//Imprimi os dados do produto se o ID for valido
				"<h4><ul><strong>ID de Protocolo gerado: </strong>" 			. $row['id'] . 
				"<br/><br/><strong>Tipo de Mercadoria: </strong>"   			. $row['tipo'] . 
				"<br/><br/><strong>Nome do produto: </strong>" 				. $row['nome'] . 
				"<br/><br/><strong>Quantidade de produtos: </strong>" 			. $row['qtd'] . 
				"<br/><br/><strong>O valor do produto anunciado em reis é: </strong>"	. $row['preco'] . 
				"<br/><br/><strong>Você optou por fazer uma: </strong>" 		. $row['negocio'] . 
				"</br>";
			}

				else{ 		//Imprimi alert abaixo se o ID for invalido
				echo'<script type="text/javascript"> alert("Produto não encontrado")</script>';
					
				echo"<strong>Não encontramos em nosso banco o produto de ID: ". $_POST['busca']."</strong>
				<br/><h6>Por gentileza verificar se o numero de protocolo gerado está correto.<br/></br>
				Em casos de duvida, entre em contato com a equipe de suporte via 
				<a href='https://br.linkedin.com/in/richard-henrique-451a8979'>Linkedin</a></h6>";	
			}					
		?>				
	</body>	
</html>
