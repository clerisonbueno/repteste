<?php 

	session_start();

	$_SESSION['nome'] = "";
    $_SESSION['foto'] = "";
    $_SESSION['id'] = "";
    $_SESSION['email'] = "";

    session_destroy();

    echo "<script>window.location.href = 'login.php'</script>";


 ?>