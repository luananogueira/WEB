<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercicio Webline</title>
    </head>
    <body>
        <div>
            <form action="insere_aluno.php" method="post">
                <label>Nome:</label><input type="text" name="nome"/><br>

                <label>RA:</label><input type="number" name="ra"/><br>

                <label>E-mail:</label><input type="email" name="email"/><br>

                <label>Turma:</label>
                <select id="turma" name="turma">
 
					<?php
						//atribuição variaveis
						$servername = "localhost";
						$username = "root";
						$password = "password";
						$dbname = "estudo";
					

						// Cria conexão
						$conn = new mysqli($servername, $username, $password, $dbname);
						
					

						// Checa Conexão
						if($conn === false) {
							die("Erro: Não foi possivel conectar." . mysqli_connect_error());
						}

						// select itens da lista
					
						$query = "SELECT * FROM turma";
						if($resultado = mysqli_query($conn, $query)){
							//Verifica se a tabela está vazia
							if(mysqli_num_rows($resultado)>0){
								//Devolve os resultados da busca
								while($turma = mysqli_fetch_array($resultado)){
									echo '<option value ="' . $turma['descricao'] . '">' . $turma['descricao'] . '</option>';
								}
							}
						}        
						else{
							echo "ERROR: Could not execute $query." . mysqli_error($conn);
						}

					?>
                    
                </select>
                <br>
                <input type="submit" value="Cadastrar" />
                <input type="reset">
            </form>
        </div>
    </body>

</html>
