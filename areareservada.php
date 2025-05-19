<?php

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<body>
    <fieldset>
        <legend>Bem-Vindo</legend>
        <h2 style="color: black;"><?php echo htmlspecialchars($_SESSION['email']); ?></h2>
        <h5>Sessão: <?php echo $_SESSION['id']; ?></h5>
        <div class="buttons">
            <form method="post" action="logout.php">
                <button type="submit" name="out" value="out">Sair</button>
            </form>
        </div>
    </fieldset>
</body>
</html>
