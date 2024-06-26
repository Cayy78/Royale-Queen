<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css file -->
     <link rel="stylesheet" href="../style.css">
     <style>
        .admin_image{
    width: 100px;
    object-fit: contain;
    }
    .footer{
        position: absolute;
        bottom:0;
        
    }
     </style>
</head>
<body>
    <!-- navbar -->
     <div class="container-fluid p-0">
        <!-- first child -->

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welvome Guest</a>
                        </li>
                    </ul>
                  </nav>
            </div>
        </nav>

        <!-- second child -->
         <div class="bg-light">
            <h3 class="text-center p2">Manage Details</h3>
         </div>

         <!-- third child -->
          <div class="row">
            <div class="com-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                <a href=""><img src="../image/Sepatu Lari 1.png" alt="" class="admin_image"></
                a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <!-- button*10>a.na-link.text-light.bg-info.my-1 -->
            <div class="button text-center">
                <button class="my-3"><a href="" class="nav-link text-light 
                bg-info my-1">Insert Product</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light 
                bg-info my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light 
                bg-info my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">All Order</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">All Payment</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">Logout</a></button>
            </div>
          </div>


        <!-- fourth child -->
         <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            ?>
         </div>

          <!-- last child -->
 -<div class="bg-info p-3 text-center footer">
    <p>Designed by kami-2024</p>
 </div> 
     </div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous">
</script>
</body>
</html>