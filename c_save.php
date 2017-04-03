<?php

file_put_contents( "ingresar.txt" , $_POST[ "data" ] , LOCK_EX ) ;

echo true ; 

?>
