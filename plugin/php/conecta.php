<?php

//Conexão do Banco de Dados com o Html atravez do PhP(utilizado Wamp Server)
//Sytem = Usuário do banco de dados
//riihr1ch4rd = Senha do usuário System
//localhost/XE = Connecta o serviço XE  na maquina local "localhost"

 $conn = oci_connect('system', 'riihr1ch4rd', 'localhost/XE');

    if (!$conn) {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
     }

?>
