<?php

	session_start();
	session_unset(); 
    //destruye las variables
	session_destroy();


	header("Location: loginform.html");
?>