<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_delete_company_data</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.dataTables.min.js"></script>
    <!-- <link rel="stylesheet" href="css/jquery.dataTables.min.css"> -->
    <link href="<?php echo base_url(); ?>css/jquery.dataTables.min.css" rel="stylesheet">
    
    <title>Company_data</title>
</head>

<body>
    <!-- heder -->
    <div class="container">
    <button class="btn btn-primary mb-4" style="float:right; margin-left:-10px;" type="submit" href="<?php echo base_url('admin/logout');?>" >Logout</button>
  </div>
    <h3 class="text-center text-danger mt-2">company data </h3>
<div class="container" style="border:2px solid black">
    <div class="col-lg-12">
        <div class="content-box">
            <button style="float:right; margin-bottom: 10px; margin-right: 10px;" type="update"  name="new" class="btn btn-primary"><a style="color:white; text-decoration:none; float:right;" href="<?php echo base_url('welcome/addcomp');?>">Add new company</a></button>

            <div class="contentdb" style="margin-left: 20px; height:100%px: width:100%;">


                <table class="table" id="myTable">
                    <thead>
                        
                        <tr>
                            <th scope="col">s.no</th>
                            <th scope="col">logo</th>
                            <th scope="col">Companyname</th>
                       
                            <th scope="col">email</th>
                            
                           
                            <th scope="col">Edit</th>
                            <th scope="col">delete</th>
                        
                        </tr>

                    </thead>
                    <tbody>
                       
                    <?php
                        $i=0;
                        foreach($compdat as $empe)
                        {?>
                        <tr>

                            <td><?=$i;?></td>
                            <td><img src="<?=base_url("uploads/{$empe->logo}");?>" style="height:110px; width:200px;"></td>
                            <td><?=$empe->name;?></td>
                            <td><?=$empe->email;?></td>
                            <td><a href="<?php echo base_url('welcome/editcompany/'.$empe->id);?>"><i style="color:red;" class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="<?php echo base_url('welcome/deletecomp/'.$empe->id);?>" onclick="return confirm('are you sure want to delete this slider');"><i style="color:red;" class="fa-solid fa-trash-can"></i></a></td>
                            

                        </tr>
                        <?php $i++;} ?>

                    </tbody>
                </table>

            </div>


        </div>
    </div>
    </div>
    </div>

</body>

</html>
<script>
$(document).ready(function() {
    $("#myTable").dataTable();
});
</script>

</body>
</html>