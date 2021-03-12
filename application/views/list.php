<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#Datatable1').DataTable({
      "fnDrawCallback": function (oSettings) { 
                    if ($('#Datatable1 tr').length < 5) {
                        $('.dataTables_paginate').hide();
                    }
                },

                 "bLengthChange": false,
                 "bFilter": true,
                 "bInfo": false,
                 "bAutoWidth": false,
                 "iDisplayLength": 5,

            });
        });

</script>

    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <title>Document</title>
</head>



<body>
    <div class="navbar navbar-dark bg-dark">
      <div class="container">
      <a href="#">CRUD APPLIACTION</a>
     </div>
    </div>
 <div class="container">
<div class="row">
<div class="col-6"><h3>list User</h3></div>
<div class="col-6 p-3"><a href="http://localhost/crud/index.php/users/createfun" 
       class="btn btn-danger">Create</a> </div>
</div>
  <hr>
<div class="row">
  <div class="col-md-6">
  <table id="Datatable1" class="table table-striped">
  <thead>
     <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Username</th>
     <th>Edit</th>
     <th>Delete</th>
     </thead>
     </tr>
     <?php foreach($users as $user) {?>
     <tr>
     <td><?php echo $user['user_id']?></td>
     <td><?php echo $user['name']?></td>
     <td><?php echo $user['email']?></td>
     <td><?php echo $user['username']?></td>
     <td>
     <a href="edit/<?php echo $user['user_id'];?>"class="btn btn-primary">Edit</a>
     </td>
     <td>
     <a href="delete/<?php echo $user['user_id'];?>" class="btn btn-primary">Delete</a>
     </td>
     </tr>
    <?php }?>

  </table>

  <div>
 </div>

</body>
</html>
  
