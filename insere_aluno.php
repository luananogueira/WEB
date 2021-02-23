<?php
    //atribuição variaveis
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "estudo";

	var_dump($_POST);
	
	$nome = $_POST['nome'];
	$ra = $_POST['ra'];
	$email = $_POST['email'];
	$turma = $_POST['turma'];
	

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sqlAlunos = "INSERT INTO alunos (nome, ra, email, turma) VALUES ('$nome', '$ra', '$email', '$turma')";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	

    if ($conn->query($sqlAlunos) === TRUE) {
        echo "Cadastro Realizado com Sucesso";
    } else {
        echo "Error: Could not execute" . $sqlAlunos . $conn->error;
    }
?>
