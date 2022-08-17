<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add new employee</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
<div class="container">
    <button class="btn btn-primary mb-4" style="float:right; margin-left:-10px;" type="submit" href="<?php echo base_url('admin/logout');?>" >Logout</button>
  </div>
    <h3 class="text-center mt-2 text-danger">Add new employee data </h3>
        <div class="container">
        <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Company name</label>
    <input type="text" class="form-control" placeholder="enter company of employee" name="compname" id="compname" aria-describedby="emailHelp">
    <?php echo form_error('compname'); ?>
    


  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">first_name</label>
    <input type="text" class="form-control" placeholder="enter your first name"  name="firstname" id="firstname">
    <?php echo form_error('firstname'); ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name</label>
    <input type="text" class="form-control" placeholder="enter your last name"  name="lastname" id="firstname">
    <?php echo form_error('lastname'); ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="enter email of employee"  name="email" id="firstname">
    <?php echo form_error('email'); ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="phone" class="form-control" placeholder="enter phone no of employee"  name="phone" id="firstname">
    <?php echo form_error('phone'); ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">date of joining</label>
    <input type="date" class="form-control"   name="dateofjoin" id="firstname">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
</body>
</html>