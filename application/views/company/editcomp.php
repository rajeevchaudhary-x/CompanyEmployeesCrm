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
        <form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label style="color:red;" for="exampleInputEmail1" class="form-label">Company name</label>
    <input type="text" class="form-control" value="<?=$compdata[0]->name;?>" placeholder="enter company of employee" name="name" id="name" aria-describedby="emailHelp">
   
    


  </div>
  <div class="mb-3">
    <label style="color:red;" for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" value="<?=$compdata[0]->email;?>" placeholder="enter company email"  name="email" id="email">
    

  </div>
  <div class="mb-3 mt-3">
    <label style="color:red;" for="exampleInputPassword1" class="form-label">*old logo of Company</label>
    <img src="<?=base_url("uploads/{$compdata[0]->logo}");?>" alt="" style="height:110px; display:block; width:200px;">
    </div>
  <div class="mb-3 mt-3">
    <label style="color:red;" for="exampleInputPassword1" class="form-label">upload new logo of Company</label>
    <input type="file" class="form-control"   name="logo" id="logo">
    </div>


  <button type="submit" name="up" class="btn btn-primary mt-2">update</button>
</form>
        </div>
</body>
</html>