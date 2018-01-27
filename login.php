<?php
session_start();
$conn=new PDO("mysql:host=localhost;dbname=db_cvs","root","");
 

if(isset($_POST['val'])){
  
  if($_POST['email']!=""){
  
  $email=$_POST['email'];
   $motpass=$_POST['motpass'];
  
  $idd = rand();

$requet_insert="INSERT INTO connection (id_conn,email_conn,motpass_conn) VALUES(?,?,?)";

$prepar=$conn->prepare($requet_insert);
$repons=$prepar->execute(array($idd,$email,$motpass));
 

 
 
if($repons){
    
  header("location:accueil.php");
  
  }
  else{
    $message="erreur";
  }


}else{
  
$message="Remplir correctement les champs SVP!";
  
  }

}




?>  


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>cv codeuse</title>
</head>
<body>
<div class="container">s

      <div class="row"><!-- Menu -->

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">SheIsTheCode CV</a>
             <div class="navbar navbar-right">
            <ul class="nav navbar-nav"> 
              <li role="navigation" style="float: right;"><a href="login.php">Se Connecter</a></li>
              <li role="navigation" style="float: right;"><a href="inscription.php">S'inscrire</a></li>
              <li role="navigation" style="float: right;"><a href="accueil.php">A Propos</a></li>
              
            </ul>
          </div>
        </nav>

      </div>


<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <legend><strong>Login</strong></legend>
    <form method="post">

  <div class="form-group">
         <!--div class="form-group">
    <label>Numero de reservation</label>
    <input type="text" name="num" placeholder="Entrer votre ville ici" class="form-control">
  </div-->



<div class="form-group">
  <label>Email</label>
    <input type="text" name="email" placeholder="email" class="form-control" >
  </div>
<div class="form-group">
  <label>Mot de passe</label>
    <input type="password" name="motpass" placeholder="Entrer vos mot de passe" class="form-control" >
  </div>
  

<button type="submit" name="Val" class="btn btn-success">valider</button>
  

<?php
   if(isset($message)){
    echo "<h4 style='color: red; font-size:20px;'>".$message."</h4>";
   }
   ?>

  </form>

</div>

  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>





</body>
</html>