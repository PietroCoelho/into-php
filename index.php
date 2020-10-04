<?php
$categoria = [];
$categoria [] = "infantil";
$categoria [] = "adolescente";
$categoria [] = "adulto";
$categoria [] = "idoso";

$nome = "pietro";
$idade = "20";

//print_r($categoria);
//var_dump($categoria)


if ($idade >= 6 && $idade <= 12) {

for($i = 0; $i <= count($categoria); $i++){

    if ($categoria[$i] == "infantil")
        echo "o nadador ".$nome." está na categoria ".$categoria[$i];
    

}

}else if($idade >= 13 && $idade <= 18){

    for($i = 0; $i <= count($categoria); $i++){

        if ($categoria[$i] == "adolescente")
            echo "o nadador ".$nome." está na categoria ".$categoria[$i];
        
}
}else{
    
    for($i = 0; $i <= count($categoria); $i++){

        if ($categoria[$i] == "adulto")
            echo "o nadador ".$nome." está na categoria ".$categoria[$i];

}
}

?>