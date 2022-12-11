<!doctype html>
<html lang="en" class="h-100">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!-- Custom styles for this template -->
   <link href="../css/styles.css" rel="stylesheet">
   <style>
      h1 {
         text-transform: uppercase;
      }

      form.container {
         max-width: 500px;
      }
   </style>
</head>

<body class="">
   <?php
   include "../repeat/header.php";
   ?>
   
   <button class="logout-button">Logout</button>
   <main class="">
      <div class="container-fluid pt-4">
         <h1>Hello</h1>
         <h6 class="pb-4">Sign in below</h6>
         <form action="" class="container p-0">
            <div class="d-flex flex-column text-start ">
               <div class="col-lg-12">
                  <label for="email" class="form-label">Email</label>
               </div>

               <div class="col-lg-12">
                  <input type="email" class="form-control" id="email" placeholder="yourUBid@ub.edu.bz">
               </div>

               <div class=" col-lg-12 mt-3">
                  <label for="password" class="form-label">Password</label>
               </div>

               <div class="col-lg-12">
                  <input type="password" class="form-control">
               </div>

               <div class="text-center">
                  <button class="mt-4">Submit</button>
               </div>
            </div>
         </form>

         <img src="../images/extras/signin-1.svg" alt="" class="mt-5 mb-5">
      </div>
   </main>


</body>

</html>