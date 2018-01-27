<?php
session_start();
$conn=new PDO("mysql:host=localhost;dbname=db_cvs","root","");
 

if(isset($_POST['val'])){
  
  if($_POST['noms']!=""){
  
  $face=$_POST['facebook'];
   $twit=$_POST['twitter'] ;
   $goog=$_POST['google'] ;
  
  $idd = rand();

$requet_insert="INSERT INTO cv (id_cv,facebook,twitter,google) VALUES(?,?,?,?)";

$prepar=$conn->prepare($requet_insert);
$repons=$prepar->execute(array($idd,$facebook,$twitter,$google));
 

 
 
if($repons){
    
  header("location:accueil.php");
  
  }
  else{
    $message="erreur";
  }


}else{
  
$message=" Remplir correctement les champs SVP !"   ;
  
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
<div class="container">

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

<div class="container" class="navbar1-default">
            <br><br><br><br><br><br>
                <div class="container">

  <div class="col-lg-2">
    <ol>
      <h5><a href="modifier.php" style="color: red;" >Modifie rprofil</a><br><br><br>
      <a href="creercv.php" style="color: red;">Creer cv</a><br><br><br>
      <a href="consultercv.php" style="color: red;">Afficher votre cv</a><br><br><br>
      <a href="experience.php" style="color: red;">Ajouter experience</a><br><br><br>
      <a href="ajouter.php" style="color: red;">Ajouter diplome</a><br><br><br>
      <a href="interet.php" style="color: red;">Ajouter centres d'interets</a></h5>
    </ol>
  </div>
  <div class="col-lg-2 col-offset-2"></div>
  <div class="col-lg-8">
    <div class="col-lg-8">
      <form method="POST">
        <fieldset><legend>CREER CV</legend></fieldset>
       <label>FACEBOOK</label>
       <input type="text" name="facebook" class="form-control">
       <label>TWITTER</label>
       <input type="text" name="twitter" class="form-control">
       <label>GITHUB</label>
       <input type="text" name="github" class="form-control">
         <button type="submit" name="Val" class="btn btn-success">valider</button>
        </fieldset>
    </form>
</div>
</div>



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