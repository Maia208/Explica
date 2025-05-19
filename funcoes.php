<?php
    
    $mensagem="";
    if(isset($_POST['login'])){
        if(isset($_POST['email']) && isset($_POST['pass'])){
            if(empty($_POST['email']) || empty($_POST['pass'])){
                $message = "Todos os campos devem ser preenchidos!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else{
                $query = "SELECT email,password FROM alunos WHERE email=?";
                $statement = $mysqli->prepare($query);
                $statement->bind_param('s',$_POST["email"]);
                $statement->execute();
                $statement->bind_result($email,$pass);
                if ($statement->fetch()){
                    if (password_verify($_POST['pass'], $pass)){
                        $message="Entrou na sua conta.";
					    echo "<script type='text/javascript'>alert('$message');</script>";
                        $_SESSION["id"]=session_id();
                        $_SESSION["email"]=$email;
                        
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
    if (isset($_POST["out"])){
		$_SESSION["email"] =$_SESSION["id"]="";
		session_unset();
		session_destroy();
	}
?>