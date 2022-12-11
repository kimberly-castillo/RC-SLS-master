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
   <a href="./login.php" class="back-button">
      <img src="../images/extras/back-button.svg" alt="">
   </a>
   <button class="logout-button">Logout</button>
   <main class="pt-5">
      <div class="container-fluid pt-4">
         <h6 class="text-dark">Scan here</h6>
         <h6 class="pb-4">Are you heading inside?</h6>
         <form action="" class="container p-0">
            <div class="d-flex flex-column text-start justify-content-center">
               <div class="col text-center">
                  <figure>
                     <a href="./scancode.php"><img src="../images/extras/scan-1.svg" alt=""></a>
                     <figcaption>Scan QR Code</figcaption>
                  </figure>
               </div>
               <button class="mt-4 skip-button">Skip</button>
            </div>
         </form>
      </div>
   </main>
   <footer></footer>

</body>

</html>