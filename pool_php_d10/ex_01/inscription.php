<?php
    $name = $_POST["name"];
    $passwd = $_POST["password"];
    $email =$_POST["email"];
    $passHash=password_hash($_POST["password"],PASSWORD_DEFAULT);

if(isset($_POST["submit"]))
{
    if(empty($_POST["name"]) || (strlen($_POST["name"])<3 || strlen($_POST["name"])>10))
    {
        echo "Invalid name";
    }

    else if(empty($_POST["email"]) || filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false)
    {
        echo "Invalid email";
    }
    else if(empty($_POST["password"]) || (empty($_POST["password_confirmation"])) || $_POST["password"]!== $_POST["password_confirmation"])
    { 

        echo $_POST["password"];
        echo $_POST["password_confirmation"];
        echo "Invalid password or password confirmation";
    }
    else
    {
        try
        {
        $connexion = new PDO('mysql:host=localhost;port=3306;dbname=gecko',"chris","12357931");
        }
        catch(PDOException $e)
        {
        echo $e->getMessage();
        }
    }
}

    $sql = "INSERT INTO users (name, email, password, created_at, is_admin) VALUES ('$name', '$email', '$passHash', CURDATE(), 0)";
    $request=$connexion->exec($sql);
    if($request)
    {
        echo "User created";
    }
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
      <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <title>inscription (copie).php</title>
    </head>


    <body>
   <header>Subscription form</header>
<br>
<article>
    <form method="post" action="inscription (copie).php" type="text" name="UserInscription">
        <label for="name"></label>
        <input type="text" name="name" id="name"> Name<br>
        <label for="email" name="email"></label>
        <input type="text" name="email"required>  Email<br>
        <label type="password" value="password" name="password"></label>
        <input type="password" minlength=3 maxlength=10 name="password"required>  Password<br>
        <label for="password_confirmation" type="password" name="password_confirmation" value="password_confirmation"></label>
        <input type="password" name="password_confirmation"required>  Password confirmation<br>
        <input type="submit" name="submit" value="submit" onclick="formSubmit()" ><br>
    </form>
</article>
</body>
</html>