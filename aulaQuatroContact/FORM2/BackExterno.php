<?php 
 $senha = $_POST['senha'];
 $email = $_POST['email'];

 echo "$senha - $email </br>";
 
/*if (isset($email)&&isset($senha)){
	echo "Existe";
}else{echo "Não Existe";}
*/

/*if (strcasecmp()) {
	// code...
}
*/

if ($email == 'matheus.com@gmail.com'&&$senha == 'matheus'){
	echo "Access Accepted";
}else{
	echo "Access Denied";
}
 ?>