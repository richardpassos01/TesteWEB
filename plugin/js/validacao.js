function confirma(){
alert("Produto Cadastrado com sucesso!");
}

function nao_encontrado(){
alert("Produto não encontrado");	
}

function validar() {

if(document.FormularioLogin.tipo_mercadoria.value==""){
	alert('Por favor informar o tipo de mercadoria');
	FormularioLogin.tipo_mercadoria.focus();
	return false;
}

if(document.FormularioLogin.nome_mercadoria.value==""){
	alert('Por favor informar o nome da mercadoria');
	FormularioLogin.nome_mercadoria.focus();
	return false;
}

if(document.FormularioLogin.quantidade.value.length < 1){
	alert('A quantidade não pode ser menor do que 1');
	FormularioLogin.quantidade.focus();
	return false;
}

if(document.FormularioLogin.preco.value.length < 1){
	alert('O preço não pode ser 0');
	FormularioLogin.preco.focus();
	return false;
}
}
