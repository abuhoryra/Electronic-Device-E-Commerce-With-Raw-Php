<!DOCTYPE html>
<html lang="en">
<head>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  h1{
    font-family: 'Vollkorn', serif;
    color: #0099ff;
  }
</style>
</head>
<body>
   <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="text-white sidebar-heading"> BuyTech </div>
      <div class="list-group list-group-flush">

        <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Laptop
  </button>
  <div class="dropdown-menu bg-info">
        <a href="apple.php" class="list-group-item list-group-item-action bg-info" >Apple</a>
        <a href="asus.php" class="list-group-item list-group-item-action bg-info">Asus</a>
        <a href="accer.php" class="list-group-item list-group-item-action bg-info">Accer</a>
        <a href="hp.php" class="list-group-item list-group-item-action bg-info">Hp</a>
        <a href="dell.php" class="list-group-item list-group-item-action bg-info">Dell</a>
        <a href="lenevo.php" class="list-group-item list-group-item-action bg-info">Lenevo</a>
  </div>
</div>


           <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mobile
  </button>
  <div class="dropdown-menu bg-info">
        <a href="iphone.php" class="list-group-item list-group-item-action bg-info" >iPhone</a>
        <a href="samsung.php" class="list-group-item list-group-item-action bg-info">Samsung</a>
        <a href="huawei.php" class="list-group-item list-group-item-action bg-info">Huawei</a>
        <a href="xiomi.php" class="list-group-item list-group-item-action bg-info">Xiomi</a>
        <a href="oneplus.php" class="list-group-item list-group-item-action bg-info">OnePlus</a>
  </div>
</div>


    <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tablet
  </button>
  <div class="dropdown-menu bg-info">
        <a href="ipad.php" class="list-group-item list-group-item-action bg-info" >iPad</a>
        <a href="samsung_tab.php" class="list-group-item list-group-item-action bg-info">Samsung</a>
  </div>
</div>

    <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    TV
  </button>
  <div class="dropdown-menu bg-info">
        <a href="sony.php" class="list-group-item list-group-item-action bg-info" >Sony</a>
        <a href="samsung_tv.php" class="list-group-item list-group-item-action bg-info">Samsung</a>
        <a href="lg.php" class="list-group-item list-group-item-action bg-info">Lg</a>
  </div>
</div>


    <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Gaming
  </button>
  <div class="dropdown-menu bg-info">
        <a href="xbox.php" class="list-group-item list-group-item-action bg-info" >Xbox</a>
        <a href="ps4.php" class="list-group-item list-group-item-action bg-info">PS4</a>
  </div>
</div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-info border-bottom">
        <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Signup</a>
            </li>
          </ul>
        </div>
      </nav>

     



<div class="container-fluid" style="margin-top: 1%;">
  <h1 style="text-align: center;">Apple</h1>
  <hr>
  <div class="card-deck">

    <?php
    include_once("connection.php");
      $rom="SELECT * FROM laptop WHERE brand = 'Apple'";
      $rim = mysqli_query($conn,$rom);
      
      while ($res = mysqli_fetch_array($rim)) {
    
       ?>
         <div class="col-lg-3 col-md-6 col-12">
          <br>
       <div class="card" style="">
      <img class="card-img-top" style="height: 250px;" src="item/<?php echo $res['img_name'] ?>">
      <div class="card-body">

        <p><?php echo $res['name']; ?><span style="float: right; color: salmon;"><?php echo $res['price'].' Tk.'; ?></span></p> 
        <p>Stock: <span style="color: red;"><?php echo $res['stock']; ?> </span><span style="float: right;"><a style="float: right;" href="" class="" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $res['id'];?>">
  View More
</a></span></p> 



        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $res['name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include_once("connection.php");
       $id = $res['id'];
      $rkm="SELECT * FROM laptop WHERE id = '$id'";
      $rtm = mysqli_query($conn,$rkm);
      
      while ($result = mysqli_fetch_array($rtm)) { 
        ?>
        <div style="text-align: center;">
        <img class="img-responsive" style="height: 150px;" src="item/<?php echo $res['img_name'] ?>">
        </div>
        <br>
        <p><span style="color: #00cc99;">Brand: </span> <?php echo $result['brand'];?></p>
        <p><span style="color: #00cc99;">Name: </span> <?php echo $result['name'];?></p>
        <p><span style="color: #00cc99;">Description: </span> <?php echo $result['des'];?></p>
        <?php
      }

       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      

</div>
   



  </div>
  </div>

       <?php
     
}
  ?>

</div>



  </div>
    <!-- /#page-content-wrapper -->

      <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

  </div>
</body>
</html>