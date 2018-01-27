<?php
session_start();
$conn=new PDO("mysql:host=localhost;dbname=db_cvs","root","");
 

if(isset($_POST['mod'])){
  
  if($_POST['noms']!=""){
  $nom=$_POST['noms'];
  $pre=$_POST['prenoms'];
  $date=$_POST['date'];
  $resume=$_POST['resume'];
  $email=$_POST['email'];
  $tel=$_POST['telephone'];
  $mp=$_POST['pass'] ;
  $photo=$_FILEs['photo'] ['name'];
  $file_tmp_name=$_FILEs['photo'] ['tmp_name']; 
  move_uploaded_file($file_tmp_name, "./image/$photo");
  $idd = rand();

$requet_insert="INSERT INTO inscription (id_mod,nom,prenom,date_naissance,resume,email,telephone,mot_passe,photo) VALUES(?,?,?,?,?,?,?,?,?)";

$prepar=$conn->prepare($requet_insert);
$repons=$prepar->execute(array($idd,$nom,$pre,$date,$resume,$email,$tel,$mp,$photo));
 

 
 
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
  <title>Modifier Profil</title>
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
              <li role="navigation" style="float: right;"><a href="consultercv.php">S'inscrire</a></li>
              <li role="navigation" style="float: right;"><a href="accueil.php">A Propos</a></li>
              
            </ul>
          </div>
        </nav>

      
 <nav class="navbar navbar1-default">
<div class="container">
    <div class="row">
        <div class="col-lg-3">
        <ol>
            <h5><a href="modifier.php">Modifierprofil</a><br><br><br>
            <a href="creercv.php">Creer cv</a><br><br><br>
            <a href="consultercv.php">Afficher votre cv</a><br><br><br>
            <a href="experience.php">Ajouter experience</a><br><br><br>
            <a href="ajouter.php">Ajouter diplome</a><br><br><br>
            <a href="interet.php">Ajouter centres interets</a></h5>
        </ol>
    </div>
    <div class="col-lg-3 col-offset-3"></div>
        <div class="col-lg-6">
    <form method="POST" class="form-group">
        <fieldset><legend style="color:blue ;"><h2>MODIFICATION DU PROFIL</h2></legend>
    <label class="control-label">Nom</label><br>
    <input type="text" name="nom" class="form-control">
    <label class="control-label">Prenoms</label><br>
    <input type="text" name="prenoms" class="form-control">
    <label class="control-label">Date_naissance</label><br>
    <input type="text" name="date_naissance" class="form-control">
    <label class="control-label">resumé</label><br>
    <input type="file" name="resume" class="form-control">
    <label class="control-label"> email</label><br>
    <input type="text" name="email" class="form-control">
    <label class="control-label" class="form-control">Telephone</label><br>
    <input type="email" name="telephone" class="form-control">
    <label class="control-label" class="form-control">Mot de passe</label><br>
    <input type="Password" name="pass" class="form-control">
    <label class="control-label" class="form-control">Photo</label><br>
    <input type="file" name="photo" class="form-control"><br>
    <button type="submit" name="mod" class="btn btn-success">modifier</button>
  
    <a href="dashboard.php"></a>
        </fieldset>
    </form></div></div>
</div>
</nav>



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