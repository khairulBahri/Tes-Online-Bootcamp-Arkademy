<?php 

function validasi($password){
    $validPassword = preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8}$/", $password);
    
    return $validPassword;

}

$password =  validasi('123Qwer_');



if($password == true) {
	echo "anda benar";
}else {
	echo "salah";
}
