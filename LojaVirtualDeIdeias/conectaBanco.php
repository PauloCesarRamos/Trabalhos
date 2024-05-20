<?php
    $LojaVirtualDeIdeias = new mysqli("localhost", "root", "1234","upcash",3306);
    if($LojaVirtualDeIdeias->connect_errno){
        echo "Erro ao conectar no banco de dados";
    }else{
        echo "Conectado com sucesso!";
    }
    //$LojaVirtualDeIdeias->close();
?>