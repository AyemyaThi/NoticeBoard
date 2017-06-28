<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$note_m = new noteModel();

$notes  = $note_m->getRows();

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
      <a class="navbar-brand" href="#">PHP PDO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="note.php">Note List</a></li>
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

<a href="create_note.php" class="btn btn-primary pull-right">Add New</a>

	<table class="table table-striped">
		<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Attachment</th>
			<th>Actions</th>
		</tr>
		</thead>

		<tbody>

<?php if(is_array($notes) && count($notes)>0): ?>

  <?php foreach($notes as $note): ?>
		<tr>
			<td><?php echo $note['id']; ?></td>
			<td><?php echo $note['title']; ?></td>
			<td><?php echo $note['description']; ?></td>
			<td>
          <?php if(!empty($note['attachment'])): ?>
           <img src="uploads/<?php echo $note['attachment']; ?>"  style="height:150px;" class="thumbnail" />
          <?php endif; ?>
      </td>
			<td>
        <a href="edit_note.php?id=<?php echo $note['id']; ?>" class="btn btn-info btn-xs">Edit</a>   
        <a href="delete_note.php?id=<?php echo $note['id']; ?>" class="btn btn-danger btn-xs">Delete</a>   
      </td>
		</tr>

  <?php endforeach; ?>

<?php else: ?>
      <tr>
        <td colspan="7">
          <p class="alert alert-info">
            No record found!
          </p>
        </td>
      </tr>
<?php endif; ?>

		</tbody>
		

	</table>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>