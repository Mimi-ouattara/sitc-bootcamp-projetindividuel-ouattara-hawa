<?php include('connection.php');
  $msg="";
  if (isset($_POST['btnValider'])){
    $sql= "INSERT INTO centre_interet (centre_interet,description) VALUES ('".$_POST['centre_interet']."','".$_POST['description']."')";
    $result=mysqli_query($link,$sql);
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
            <a class="navbar-brand" href="accueil.php">SheIsTheCode CV</a>
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
      <h5><a href="modifierpp.php" style="color:red;">Ajouter diplome </a><br><br><br>
      <a href="creercv.php" style="color:red;">Creer cv</a><br><br><br>
      <a href="consulter.php" style="color:red;">Afficher votre cv</a><br><br><br>
      <a href="experience.php" style="color:red;">Ajouter experience</a><br><br><br>
      <a href="ajouter.php" style="color:red;">Ajouter diplome</a><br><br><br>
      <a href="interet.php" style="color:red;">Ajouter centres d' interets</a></h5>
    </ol>
  </div>
  <div class="col-lg-2 col-offset-2"></div>
  <div class="col-lg-8">
    <div class="col-lg-8">
      <form method="POST">
        <fieldset><legend style="color:red;">Ajouter centre d'interet</legend></fieldset>
       <label>Centre d' interet</label>
       <input type="text" name="centre d'interets" class="form-control">
       <label>Description</label>
       <input type="text" name="centre d'interets" class="form-control">
         <button type="submit" name="Val" class="btn btn-success">valider</button>
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
            
              <th>centre d'interet</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $n=1;
              $list=" SELECT * FROM centre_inetret";
              $res= mysqli_query($link,$list);
  while ($data = mysqli_fetch_array($res)){
                
              
             ?>
            <tr>
              <td> <?php echo $n; ?> </td>
              <td><?php echo $data['centre_interet']; ?></td>
              <td><?php echo $data['description']; ?></td>
               <a href="interet.php?id=<?=$article->id?>" class="btn btn-primary btn-xs">Modifier</a>
                <a href="interet.php?delete=<?=$article->id?>" class="btn btn-danger btn-xs" onclick="return confirm('Voulez-vous vraiment Supprimer')">Supprimer</a>
              </td>
              <td></td>
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


  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>





</body>
</html>