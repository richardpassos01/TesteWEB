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
		$consulta='
		select cod_mercadoria as "id",
		tipo_mercadoria as "tipo",
		nome_mercadoria as "nome",
		quantidade as "qtd", 
		preco as "preco", 
		tipo_negocio as "negocio" 
		from plataforma_mercadoria
		where cod_mercadoria='. $_POST['busca'].'
		';	

		$resultado = OCIParse($conn, $consulta);	//oci_parse equivale ao mysql_query()	
		 oci_execute($resultado);	//Executa Query
			while($row = oci_fetch_assoc($resultado)):	//oci_fetch_assoc() equivale ao mysql_fetch_assoc()
				echo	//Imprimi os dados do produto que foi cadastrado
				"<h4><ul><strong>ID de Protocolo gerado: </strong>" 			. $row['id'] . 
				"<br/><br/><strong>Tipo de Mercadoria: </strong>"   			. $row['tipo'] . 
				"<br/><br/><strong>Nome do produto: </strong>" 				. $row['nome'] . 
				"<br/><br/><strong>Quantidade de produtos: </strong>" 			. $row['qtd'] . 
				"<br/><br/><strong>O valor do produto anunciado em reis é: </strong>" 	. $row['preco'] . 
				"<br/><br/><strong>Você optou por fazer uma: </strong>" 		. $row['negocio'] . 
				"</br>";
			endwhile;
													
		?>	
			
	</body>	

</html>
