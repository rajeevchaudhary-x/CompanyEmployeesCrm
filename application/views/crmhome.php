<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crmhomepage</title>
    <style>
        .container{
            display: flex;
        }
        .box{
            height: 400px;
            background-color: orange;
            width: 50%;
            margin-left: 30px;
            border-radius: 20px;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">CRM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">about us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">conatct us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">blogs</a>
              </li>
            </ul>
            <form class="d-flex">
              
            <p class="text-center"> <button type="button" class="btn btn-primary mt-3 text-center"><a style="color:black; text-decoration:none;" href="<?php echo base_url('admin/logout');?>">Logout</a></button></p>
            </form>
          </div>
        </div>
      </nav>
      
    <h2 class="text-center mt-2 bg-light text-danger" style="font-weight: bolder;">welcome to company employee home page </h2>
    <div class="container">
        <div class="box">
            <h1 class="text-center mt-3" style="color:rgb(13, 52, 153); font-weight:bolder;" >Company section </h1>
            <p class="text-center"> <button     type="button" class="btn btn-light---- mt-3 text-center"><a style="color:black; text-decoration:none;" href="<?php echo base_url('welcome/showallcomp');?>">click here for employee data</a></button></p>
          
        </div>
        <div class="box">
            <h1 class="text-center mt-3" style="color:rgb(13, 52, 153); font-weight:bolder;">Employee section </h1>
            <p class="text-center">   <button     type="button" class="btn btn-light mt-3 text-center"><a style="color:black; text-decoration:none;" href="<?php echo base_url('welcome/index');?>">click here for employee data</a></button></p>
          
        </div>
    </div>
</body>
</html>