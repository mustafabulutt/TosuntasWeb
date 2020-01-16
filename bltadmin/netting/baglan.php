<?php


try{


$db=new PDO("mysql:host=localhost;dbname=pdofirma",'quespy','paraside16');

//echo "veritabanına bağlısınız .";



}

catch (PDOExpception $e ) {

	echo $e->getMessage();
}




?>