<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Formulário | PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <h1 id="tittle">Starting with PHP</h1>
    <div class="divForm">
        <form action="inserir.php" method="get" id="formulario">
            <label for="username" id="name-p">Name</label> <br>
            <input type="text" name="username" id="username" required> <br> <br>
            
            <label for="userlast" id="name-p">Last name</label> <br>
            <input type="text" name="userlast" id="userlast" required> <br> <br>
            
            <label for="userphone" id="name-p">Phone number</label> <br>
            <input type="tel" name="userphone" id="userphone" required> <br> <br>
            
            <label for="useremail" id="name-p">Email</label> <br>
            <input type="email" name="useremail" id="useremail" required> <br> <br>
            
            <label for="userpassword" id="name-p">Password</label> <br>
            <input type="password" name="userpassword" id="userpassword" maxlength="8" required> <br> <br>
            
            <input type="submit" value="Send" id="bttn">
            <input type="reset" value="Clear" id="bttn">
        </form>
    </div>
</body>
</html>