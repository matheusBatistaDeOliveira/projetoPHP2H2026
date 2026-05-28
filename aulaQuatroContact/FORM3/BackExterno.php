<?php 
 $peso = $_POST['peso'];
 $altura = $_POST['altura'];

$IMC = (double)$peso / ((double)$altura*2);

echo "SUA CLASSIFICAÇÃO é ";

if($IMC<18.5){
echo "Baixo Peso";
}else if($IMC<24.99){
echo "Normal";
}else if($IMC<29.99){
echo "Sobrepeso";
}else{
echo "Obesidade";
};

echo "</br>";

 echo "ALTURA: $altura e PESO: $peso </br> IMC: $IMC";

 ?>