<?php
    
    $mensagem="";
    if(isset($_POST['login'])){
        if(isset($_POST['email']) && isset($_POST['pass'])){
            if(empty($_POST['email']) || empty($_POST['pass'])){
                $message = "Todos os campos devem ser preenchidos!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else{
                $query = "SELECT email,password,tipo FROM alunos WHERE email=?";
                $statement = $mysqli->prepare($query);
                $statement->bind_param('s',$_POST["email"]);
                $statement->execute();
                $statement->bind_result($email,$pass,$tipo);
                if ($statement->fetch()){
                    if (password_verify($_POST['pass'], $pass)){
                        $_SESSION["id"]=session_id();
                        $_SESSION["email"]=$email;
                        $_SESSION["tipo"]=$tipo;
                        
                    }
                    else{
                        $message="Dados inválidos.";
					    echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                else{
                    $message="Dados inválidos.";
					echo "<script type='text/javascript'>alert('$message');</script>";
                }
                $statement->close();
            }
        }
    }
    if (isset($_POST['registar'])) {
        if (isset($_POST['emailregistar']) && isset($_POST['passregistar'])) {
            if (empty($_POST['emailregistar']) || empty($_POST['passregistar'])) {
                $message = "Todos os campos devem ser preenchidos!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                $email = $_POST['emailregistar'];
                $senha = $_POST['passregistar'];

                // Verificar se o email já existe
                $check = $mysqli->prepare("SELECT id FROM alunos WHERE email = ?");
                $check->bind_param('s', $email);
                $check->execute();
                $check->store_result();

                if ($check->num_rows > 0) {
                    $message = "Este email já está registrado!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    $check->close();
                } else {
                    $check->close();

                    $qr = "INSERT INTO alunos(email, password) VALUES(?, ?)";
                    $ordem = $mysqli->prepare($qr);
                    $p = password_hash($senha, PASSWORD_DEFAULT);
                    $ordem->bind_param('ss', $email, $p);

                    if ($ordem->execute() && $ordem->affected_rows > 0) {
                        $message = "Sucesso ao registrar!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    } else {
                        $message = "Erro ao registrar!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    $ordem->close();
                }
            }
        }
    }
    if (isset($_POST["out"])){
		$_SESSION["email"] =$_SESSION["id"]="";
		session_unset();
		session_destroy();
	}
?> 