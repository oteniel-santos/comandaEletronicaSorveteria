
<?php

define("RAIZ","/sorveteria_unifama");


function link_para($caminho){
    if($caminho[0] != '/'){
        $caminho = "/".$caminho;
    }

    return RAIZ.$caminho;
}
