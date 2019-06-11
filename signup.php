<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="css/signup.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="c1 col-md-5" style="margin: 5% auto;">
         <div class="im1">
          <img class="img-responsive" src="image/user.png">
           <h4>Sign Up</h4>
            </div>

            <form method="post" action="">


            <div class="form-group">
        <input type="text" id="name" name="firstname" class="form-control"  required>
        <label class="form-control-placeholder" for="name">Firstname</label>
      </div>

      <div class="form-group">
        <input type="text" id="lname" name="lastname" class="form-control" required>
        <label class="form-control-placeholder"  for="lname">Lastname</label>
      </div>

            <div class="form-group">
        <input type="text" id="uname" name="username" class="form-control" required >
        <label class="form-control-placeholder" for="uname">Username</label>
      </div>
  
      <div class="form-group">
        <input type="text" id="email" name="email" class="form-control" required >
        <label class="form-control-placeholder" for="email">Email</label>
      </div>
  
            <div class="form-group">
        <input type="password" id="password" name="password" class="form-control" required >
        <label class="form-control-placeholder" for="password">Password</label>
      </div>

             <div class="bt">
                <button type="submit" class="btn btn-success">Signup</button>  
             </div>
             </form>
       <h5 style="float: right; margin-top:15px;">Already registered? <a href="login.php">Login</a></h5>
            
             
        </div>
    </div>
</div>



</body>
</html>