<!doctype html>
<html lang="en" class="h-100">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link rel="stylesheet" href="./css/styles.css">
   <style>
      body {
         overflow: hidden;
      }

      main {
         /* height: 0%; */
         height: 100%;
         position: relative;
      }

      main .buttongrid img {
         width: 10em;
      }


      .img1 {
         transition: 2s ease;
      }

      .img1:hover,
      .img3:hover {
         position: relative;
         right: 10px;
         bottom: 10px;
         transition: 2s ease;
      }

      .img2:hover,
      .img4:hover {
         position: relative;
         left: 10px;
         bottom: 10px;
         transition: 2s ease;
      }

      main>div {
         overflow: auto;
      }

      h2 {
         /* position: absolute;
         top: 10%;
         right: 45%; */
         position: absolute;
         margin-left: auto;
         margin-right: auto;
         left: 0;
         right: 0;
         top: 15%;
         text-align: center;
      }
   </style>
</head>

<body class="">
   <main>
      <nav class="p-0 navbar navbar-expand-lg">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">
               <img src="./images/UB-Logo.png" alt="" width="80">
               <span>RC SLS</span>
            </a>
         </div>
      </nav>
      <button class="logout-button">Logout</button>
      <h2 class="text-center pt-5">Welcome Abel!</h2>
      <!-- <h2>Welcome Abel!</h2> -->
      <div class="buttongrid container d-flex justify-content-center flex-column align-items-center nowrap">
         <div class="row nowrap">
            <div class="col">
               <figure>
                  <a href="./screens/view-equipment.php"><img src="./images/homepage-1.svg" class="img-fluid img1" alt=""></a>
                  <figcaption>Borrow Equipment</figcaption>
               </figure>
            </div>
            <div class="col">
               <figure>
                  <a href="./screens/"><img src="./images/homepage-2.svg" class="img-fluid img2" alt=""></a>
                  <figcaption>Make Reservations</figcaption>
               </figure>
            </div>
         </div>
         <div class="row mt-3 nowrap">
            <div class="col">
               <figure>
                  <a href="./screens/"><img src="./images/homepage-3.svg" class="img-fluid img3" alt=""></a>
                  <figcaption>Leave a Comment</figcaption>
               </figure>
            </div>
            <div class="col">
               <figure>
                  <a href="./screens/"><img src="./images/homepage-4.svg" class="img-fluid img4" alt=""></a>
                  <figcaption>Announcements</figcaption>
               </figure>
            </div>
         </div>
      </div>
   </main>
   <footer></footer>

</body>

</html>