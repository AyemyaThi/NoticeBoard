<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$contact_m = new ContactModel();

$errors = [];
$messages = [];



if(isset($_POST['submit'])){

  //get data from form
  $name = $_POST['name'];
  $phone= $_POST['phone'];
  $email= $_POST['email'];
  $address= $_POST['address'];

  //validate 
  if(empty($name)){
    $errors['name'] = 'Name cannot be empty!';
  }

  if(empty($phone)){
    $errors['phone'] = 'Phone cannot be empty!';
  }

  if(!empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Invalid email address!';
  }

  


//if no errors
  if(empty($errors)){

    $data = array(
        'name'=>$name,
        'phone'=>$phone,
        'email'=>$email,
        'address'=>$address
      );

    //file upload 

  if(!empty($_FILES['photo']['name'])){

    $file_name = time().'_'.rand(111111,999999).'.jpg';

    move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$file_name);

    $data['photo'] = $file_name;

  }

  $contact_m->insert($data);

  $messages['ok'] = 'Contact successfully added!';


  }
  




}


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP PDO CRUD Example</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">PHP PDO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
          </ul>
        </li>
      </ul>
      
     
    </div><!-- /.navbar-collapse -->


  </div><!-- /.container-fluid -->
</nav>


<div class="container">

  <form action="" method="POST" enctype="multipart/form-data">

      <?php if(!empty($errors)): ?>

        <?php foreach($errors as $name=>$value): ?>
          <p class="alert alert-warning"><?php echo $value; ?></p>
        <?php endforeach; ?>

      <?php endif; ?>

      <?php if(!empty($messages)): ?>

        <?php foreach($messages as $name=>$value): ?>
          <p class="alert alert-info"><?php echo $value; ?></p>
        <?php endforeach; ?>

      <?php endif; ?>


      <div class="form-group">
          <label for="" class="control-label">Name</label>
          <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
          <label for="" class="control-label">Phone</label>
          <input type="tel" name="phone" class="form-control">
      </div>

      <div class="form-group">
          <label for="" class="control-label">Email</label>
          <input type="email" name="email" class="form-control">
      </div>

      <div class="form-group">
          <label for="" class="control-label">Address</label>
          <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
      </div>

      <div class="form-group">
          <label for="" class="control-label">Photo</label>
          <input type="file" name="photo" class="form-control">
      </div>

    <div class="form-group">
          <button class="btn btn-success" name="submit">Submit</button>
          <a href="index.php" class="btn btn-warning">Cancel</a>
      </div>
    
  </form>


</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>


 