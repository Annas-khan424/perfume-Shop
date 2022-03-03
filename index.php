<?php
require_once("php/component.php");
require_once("php/operation.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Store</title>

    <script src="https://kit.fontawesome.com/1709735246.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    

<!--Custom stylesheet-->

<link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <div class="container text-center" >
        <h1 class="py-4 bg-dark text-light rounded" ><i class="fa-solid fa-spray-can-sparkles"></i> Perfume Store </h1>
 
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                <?php inputElement($icon="<i class='fas fa-id-badge'></i>","Perfume ID","perfume_id",setID());?>
            </div>

            <div class="pt-2">
                <?php inputElement("<i class='fa-solid fa-spray-can-sparkles'></i>","Perfume Name", "Perfume_name",""); ?>
            </div>
            <div class="row pt-2">
             <div class="col">
             <?php inputElement("<i class='fa-solid fa-spray-can-sparkles'> </i>"," Type", "Perfume_type",""); ?>
             </div>
             <div class="col">
             <?php inputElement("<i class='fas fa-dollar-sign'></i>","Price", "Perfume_price",""); ?>
             </div>

                 </div>
             </div>
                <div class="d-flex justify-content-center"> 
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php deleteBtn()?>

                </div>
            </form>

        </div>
  <!-- Bootstrap table  -->
  <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Perfume ID</th>
                        <th>Perfume Name</th>
                        <th>Perfume Type</th>
                        <th>Price</th>
                        <th>Edit</th>
                   <!-- <th>images</th> -->

                    </tr>
                </thead>
                <tbody id="tbody">
                <?php

                if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <!-- <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Perfume_name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Perfume_type']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo  $row['Perfume_Price']; ?></td>
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td> -->

                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Perfume_name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Perfume_type']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo '€' . $row['Perfume_price']; ?></td>
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>
                               
                   <?php
                           }
                        }
                    }  

                       
                   


                   ?>
            </tbody>
            </table>
 
    </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../CRUD/php/mian.js"></script>
</body>
</html>