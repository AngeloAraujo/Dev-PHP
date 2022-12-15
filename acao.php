<?php

echo "Dados enviados:<br>";
echo"<pre>";
var_dump($_GET);
echo"</pre>";

$data = DateTime::createFromFormat('Y-m-d', $_GET['nascimento']);
$datastatus = FALSE;
if($data && $data->format('Y-m-d') === $_GET['nascimento']){
    $datastatus = TRUE;
}

if (empty($_GET["nome"])) {
    echo "Nome inválido";
}elseif (empty($_GET["email"])) {
    echo "Email inválido";
}elseif (empty($_GET["sobrenome"])) {
    echo "Sobrenome inválido";
}elseif ($_GET["idade"] < 0 or $_GET["idade"] > 120 or ! is_numeric($_GET["idade"])) {
    echo "Idade inválida";
}elseif ($datastatus == FALSE) {
    echo "Data inválida";
}elseif (empty($_GET["endereco"])) {
    echo "Endereço inválido";
}elseif (empty($_GET["enderecorua"])) {
    echo "Endereço Completo inválido";
}elseif (empty($_GET["parente"])) {
    echo "Parentesco inválido";
}elseif (empty($_GET["telefone"])) {
    echo "Telefone inválido";
}elseif (empty($_GET["origem"])) {
    echo "Origem inválido";
}else{

    $nome =$_GET["nome"];
    $sobrenome =$_GET["sobrenome"];
    $email =$_GET["email"];
    $idade =$_GET["idade"];
    $data =$_GET["nascimento"]; 
    $parente =$_GET["parente"];
    $endereco =$_GET["endereco"];
    $enderecorua =$_GET["enderecorua"];
    $telefone =$_GET["telefone"];
    $origem =$_GET["origem"];

    $ess ="{ Nome: ".$nome." ,Sobrenome: ".$sobrenome.", Email: ".$email." , Idade: ".$idade." , Data: ".$data." , Parente: ".$parente." , Origem: ".$origem.",
         Endereco: ".$endereco.", Endereço Completo: ".$enderecorua.", Telefone:".$telefone." }\n";

    //$abre =@fopen("banco.txt","a+");
    //$escreve =fwrite($abre, $ess);

}

?>
