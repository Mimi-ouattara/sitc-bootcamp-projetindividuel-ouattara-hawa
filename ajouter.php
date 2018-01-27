<?php include('connection.php');
  $msg="";
  if (isset($_POST['btnValider'])){
    $sql= "INSERT INTO ajouter_diplo (etablissement,diplome,date_obtention) VALUES ('".$_POST['etablissement']."','".$_POST['diplome']."','".$_POST['data_obtention']."')";
    $result=mysqli_query($link  ,$sql);
    if ($result) {
      $msg='Insertion reussie';
    }else{
      $msg=mysqli_error($link);
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

<div class="container">

  <div class="col-lg-2">
    <ol>
      <h5><a href="modifier.php"  style="color:red;">Ajouter diplome </a><br><br><br>
      <a href="creercv.php"  style="color:red;">Creer cv</a><br><br><br>
      <a href="consulter.php"  style="color:red;">Afficher votre cv</a><br><br><br>
      <a href="experience.php"  style="color:red;">Ajouter experience</a><br><br><br>
      <a href="ajouter.php"  style="color:red;">Ajouter diplome</a><br><br><br>
      <a href="interet.php"  style="color:red;">Ajouter centres d' interets</a></h5>
    </ol>
  </div>
  <div class="col-lg-2 col-offset-2"></div>
  <div class="col-lg-8">
    <div class="col-lg-8">
      <form method="POST">
        <fieldset><legend>Ajouter Diplome</legend></fieldset>
       <label>Etablissement</label>
       <input type="text" name="etablissement" class="form-control">
       <label>Diplome</label>
       <input type="text" name="" class="form-control">
       <label>Date d'obtention</label>
       <input type="text" name="date d'obtention" class="form-control">
       <label>id_codeuse</label>
       <input type="text" name="id_codeuse" class="form-control"><br>
         <button type="submit" name="Val" class="btn btn-success">Ajouter</button>
        </fieldset>
    </form>
  </div>
</div>
</div>
  

  



<div class="col-md-2"></div>
      </div>
<br>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>Numero</th>
              <th>Etablissement </th>
              <th>Diplome</th>
              <th>Date d'obtention</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $n=1;
              $list=" SELECT * FROM ajouter_diplo";
              $res= mysqli_query($link,$list);
  while ($data = mysqli_fetch_array($res)){
                
              
             ?>
            <tr>
              <td> <?php echo $n; ?> </td>
              <td><?php echo $data['etablissement']; ?></td>
              <td><?php echo $data['diplome']; ?></td>
              <td><?php echo $data['date_obtention']; ?></td>
              <td></td>
            </tr>

<tr>
  <td> <a href="modifier_ajouter.php?cle=<?php echo $data['id_diplo']?>">Modifier</a></td>
    <td> <a href="supprimer_ajouter.php?cle=<?php echo $data['id_diplo']?>">Supprimer</a> </td>
  </tr>
            <?php $n++;
             } ?>
          </tbody>
        </table>

      </div>
      

    </div>
    <a href="articles.php">Voir article</a>

  

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