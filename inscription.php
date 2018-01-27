<?php
session_start();
$conn=new PDO("mysql:host=localhost;dbname=db_cvs","root","");
 

if(isset($_POST['val'])){
  
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

$requet_insert="INSERT INTO inscription (id_ins,nom,prenom,date_naissance,resume,email,telephone,mot_passe,photo) VALUES(?,?,?,?,?,?,?,?,?)";

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
  <title>Inscription</title>
</head>
<body>
<div class="container">

      <div class="row"><!-- Menu -->

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">SheIsTheCode CV</a>
             <div class="navbar navbar-right">
            <ul class="nav navbar-nav"> 
              <li role="navigation" style="float: right;"><a href="login.php">User</a></li>
              <li role="navigation" style="float: right;"><a href="accueil.php">A propos</a></li>
              
            </ul>
          </div>
        </nav>

      </div>


<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <legend><strong>Inscription</strong></legend>
    <form method="post">

  <div class="form-group">
         <!--div class="form-group">
    <label>Numero de reservation</label>
    <input type="text" name="num" placeholder="Entrer votre ville ici" class="form-control">
  </div-->

    <label>Noms</label>
    <input type="text" name="noms" class="form-control" placeholder="Entrer votre nom ici">
  </div>

  <div class="form-group">
    <label>Prénoms</label>
    <input type="text" name="prenoms" placeholder="Entrer votre prenoms ici" class="form-control">
  </div>

<div class="form-group">
    <label>Date de naissance</label>
    <input type="date" name="date" min="01/01/2018" max="31/12/2020" class="form-control">
  </div>
  <div class="form-group">
    <label>Resume</label>
    <input type="text" name="resume" class="form-control">
  </div>


<div class="form-group">
  <label>Email</label>
    <input type="text" name="email" placeholder="email" class="form-control" >
  </div>
<div class="form-group">
  <label>Telephone</label>
    <input type="text" name="telephone" placeholder="Entrer vos contacts ici" class="form-control" >
  </div>
<div class="form-group">
  <label>Mot de passe</label>
    <input type="password" name="mdp" placeholder="Entrer votre mot de passe" class="form-control" >
  </div>

  <div class="form-group">
    <label>Photo</label>
    <input type="file" name="photo" placeholder="Entrer vos contacts ici" class="form-control" >
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