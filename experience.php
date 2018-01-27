<?php include('connection.php');
  $msg="";
  if (isset($_POST['btnValider'])){
    $sql= "INSERT INTO experience(organisation,poste_occupe,description,date_debut,date_fin,id_codeuse) VALUES ('".$_POST['organisation']."','".$_POST['poste_occupe']."','".$_POST['description']."','".$_POST['date_debut']."','".$_POST['date_fin']."')";
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
      <h5><a href="modifier.php" style="color: red;">Ajouter diplome </a><br><br><br>
      <a href="creercv.php" style="color: red;">Creer cv</a><br><br><br>
      <a href="consultercv.php" style="color: red;">Afficher votre cv</a><br><br><br>
      <a href="" style="color: red;">Ajouter experience</a><br><br><br>
      <a href="ajouter.php" style="color: red;">Ajouter diplome</a><br><br><br>
      <a href="cinteret.php" style="color: red;">Ajouter centres d' interets</a></h5>
    </ol>
  </div>
  <div class="col-lg-2 col-offset-2"></div>
  <div class="col-lg-8">
    <div class="col-lg-8">
      <form method="POST">
        <fieldset><legend>Ajouter experience</legend></fieldset>
       <label>organisation</label>
       <input type="text" name="organisation" class="form-control">
       <label>poste occuper</label>
       <input type="text" name="occuper" class="form-control">
       <label>Description</label>
       <input type="text" name="description" class="form-control">
       <label>date debut</label>
       <input type="date" name="debut" class="form-control"><br>
        <label>date fin</label>
       <input type="date" name="fin" class="form-control"><br>
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
              <th>organisation</th>
              <th>poste occuper </th>
              <th>desription </th>
              <th>Date debut</th>
              <th>Date de fin</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $n=1;
              $list=" SELECT * FROM experience";
              $res= mysqli_query($link,$list);
  while ($data = mysqli_fetch_array($res)){
                
              
             ?>
            <tr>
              <td> <?php echo $n; ?> </td>
              <td><?php echo $data['organisation']; ?></td>
              <td><?php echo $data['poste occuper']; ?></td>
              <td><?php echo $data['description']; ?></td>
              <td><?php echo $data['date debut']; ?></td>
              <td><?php echo $data['date fin']; ?></td>
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