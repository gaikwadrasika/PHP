<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">


    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
      <div class="container">
      <a href="http://localhost/crud/index.php/users/">CRUD APPLIACTION</a>
     </div>
    </div>
 <div class="container">
<h3>Create User</h3>
  <hr>
<div class="row">
  <div class="col-md-6">
  <form  method="post"action="http://localhost/crud/index.php/Users/save";>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username">
  </div>
 
  <button type="submit"name="submit" class="btn btn-primary">Submit</button>
</form> 
<?php include 'footer.php'?>