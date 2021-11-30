<?
unset($_GET['error']);
if(isset($_COOKIE["email"])&&isset($_COOKIE["psw"])){
  header("Location:/khadynova/LR2/LR22/welcome.php");
}elseif(isset($_POST["email"]) && isset($_POST["psw"]) && $_POST["psw"]!="" && $_POST["psw"]=="123456"){
    $user_email=$_POST["email"];
    $user_pass=$_POST["psw"];
    setcookie("email",$user_email,time()+3600);
    setcookie("psw",$user_pass,time()+3600);
    header("Location:/khadynova/LR2/LR22/cookies/welcome.php");
  }elseif($_POST["psw"]!="" && $_POST["psw"]!="123456"){
    $_GET['error']=1;
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign-in</title>
    
  <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
      <form action="/khadynova/LR2/LR22/cookies/index.php" method="POST">
        <div class="container">
          <label for="email"><b>Логин</b></label>
          <input type="text" placeholder="email..." name="email" required>
          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Пароль..." name="psw" required>
          <?php if(isset($_GET['error']) && $_GET['error'] == 1){ ?>
        <p style="color:red;">Неверный пароль</p> 
      <?php } ?>
          <button type="submit">Отправить</button>
        </div>
      </form>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>