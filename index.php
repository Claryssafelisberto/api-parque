<?php 
$metodo = $_SERVER['REQUEST_METHOD'];
echo $metodo;

$uri = strtolower( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


echo $uri;

if($metodo =="GET" && $uri == "/parque/"){
    echo "ESTOU NO PARQUE!!";
}
elseif ($metodo == "GET" && $uri == "/parque/montanha-russa/"){
    echo "ESTOU NA MONTANHA-RUSSA!";
}
elseif ($metodo == "GET" && $uri == "/parque/carrossel/"){
    echo "ESTOU NO CARROSEL !";
}
elseif ($metodo == "GET" && $uri == "/parque/torrequeda/"){
    echo "ESTOU NA TORREQUEDA !";
}
elseif ($metodo == "GET" && $uri == "/parque/carrinho-batebate/"){
    echo "ESTOU NO CARRINHO-BATEBATE !";
}
elseif ($metodo == "GET" && $uri == "/parque/balanço/"){
    echo "ESTOU NO BALANÇO!";
}
elseif ($metodo == "GET" && $uri == "/parque/escorregador/"){
    echo "ESTOU NO ESCORREGDOR !";
}
elseif ($metodo == "GET" && $uri == "/parque/pescaria/"){
    echo "ESTOU NA PESCARIA!";
}
?>