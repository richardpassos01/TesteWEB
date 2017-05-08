
	<!--Inclui pagina PHP atravez de Herança que contem layout com bootstrap e efeitos navbar+carrosel-->
	<?php include("layout.php") ?>
		
	<!--Div bootstrap com efeito estilizado, para informar ao usuário em que campo ele está----->

	<div class="container theme-showcase" role="main">	
		<div class="page-header">
		<center><h1>Cadastre sua mercadoria</h1></center>
		</div>	
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
	
	 <!--Cria Formulario para cadastro das mercadorias-->	
 
	<form class="form-horizontal" name="FormularioLogin" method="post" action="cadastra_mercadoria.php">			
		<div class="form-group">
			<center>	
			<label for="inputTyoe" class="col-sm-4 control-label">Tipo da Mercadoria</label>
			<div class="col-sm-5">
			<input type="text" class="form-control" required="" name="tipo_mercadoria"
				placeholder="EX: Camisa, Sapato, etc..." aria-describedby="basic-addon1">			
			</div>			
		</div>
			  
		<div class="form-group">
			<label for="inputName" class="col-sm-4 control-label">Nome da Mercadoria</label>
			<div class="col-sm-5">
			<input type="text" class="form-control" required="" name="nome_mercadoria" 
				placeholder="EX: Camisa Polo, Calça X marca, etc..." aria-describedby="basic-addon1">
			</div>			
		</div>
				  				  
		<div class="form-group">
			<label for="inputQtd" class="col-sm-4 control-label">Quantidade</label>
			<div class="col-sm-5">
			<input type="number" min="1" class="form-control" required="" name="quantidade" 
				placeholder="Quantas unidades do produto?" aria-describedby="basic-addon1">
			</div>			
		</div>				  				  
				  
		<div class="form-group">
			<label for="inputPrice" class="col-sm-4 control-label">Preço</label>
			<div class="col-sm-5">
			<input type="number" required="" class="form-control" min="1"  step=0.01 name="preco" 
			       placeholder="Qual o preço do produto?" aria-describedby="basic-addon1">
			</div>			
		</div>				  
								  
		<div class="form-group">
			<label for="inputOptions" class="col-sm-4 control-label">Tipo do Negocio:</label>
			<div class="col-sm-5">
			<select class="form-control" id="inputOptions" name="inputOptions">
				<option value="1">Compra</option>
				<option value="2">Venda</option>
			</select>
			 </div>
		</div>				  			  				 
				  
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-5">
			<button type="submit" class="btn btn-default" onClick="return validar()">Avançar</button>
			<input type="reset" class="btn btn-default">
			</div>  
		</div>
		</center>	
		
		</form>
				
	</body>

</html>
