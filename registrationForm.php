<?php
    require_once('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <?php
        if(isset($_POST['create']))
        {
            $firstName      = $_POST['FN'];
            $lastName       = $_POST['EF'];
            $email          = $_POST['email'];
            $brugerNavn     = $_POST['BN'];
            $password       = $_POST['pass'];
            
            $SQLInsert = "INSERT INTO USERACOUNTS (firstName, lastName, email, brugerNavn, Userpassword ) VALUES(?,?,?,?,?)";
            $stmtinsert =$db->prepare($SQLInsert);
            $data=array($firstName, $lastName, $email, $brugerNavn, $password);
            $RESULT = $stmtinsert->execute($data);
            if($RESULT)
            {
                echo 'added';
            }
            else{
                echo 'fail';
            }

            
        }
    
    ?>

    <form action="registrationForm.php" method="POST">
        
        <div class="container">

            <h1>Registrer dig nu - Find din næste kærlighed</h1> 
            
            <label for="fornavn">Fornavn</label>
            <input type="text" name="FN" required>

            <br>
            
            <label for="efternavn">Efternavn</label>
            <input type="text" name="EF" required>

            <br>
            
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <br>
            <label for="bruger">Brugernavn</label>
            <input type="text" name="BN" required>
            
            <br>
            
            <label for="kode">Kodeord</label>
            <input type="password" name="pass", required>
 
            <input type="submit" name="create" value="Registrer">

        </div>
    
    </form>
    
</body>
</html>