<!doctype html>
<html lang="en" class="h-100">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

   <!-- Custom styles for this template -->
   <link href="../css/styles.css" rel="stylesheet">
   <style>
      h1 {
         text-transform: uppercase;
      }

      div.container {
         max-width: 500px;
      }
   </style>
</head>

<body class="">
   <?php
   include "../repeat/header.php";
   ?>

   <a href="../index.php" class="back-button">
      <img src="../images/extras/back-button.svg" alt="">
   </a>
   <button class="logout-button">Logout</button>
   <main class="mt-5">
      <div class="container-fluid pt-4">
         <h6 class="mt-5 pb-4 text-dark">Borrow Equipment</h6>
         <div class="container p-0">
            <div class="d-flex flex-column text-start ">
               <div class="col-lg-12">
                  <label for="accordionBasketball" class="form-label">Basketballs</label>
               </div>

               <div class="col-lg-12">
                  <div class="accordion" id="accordionBasketball">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="panelStayOpen">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#panelStayOpenCollapse" aria-expanded="true"
                              aria-controls="panelStayOpenCollapse">
                              Select
                           </button>
                        </h2>
                        <div id="panelStayOpenCollapse" class="accordion-collapse collapse show"
                           aria-labelledby="panelStayOpen">
                           <div class="accordion-body">
                              <div class="d-flex flex-column">
                                 <div class="row">
                                    <div class="col text-start">
                                       basketball1
                                    </div>
                                    <div class="col text-end">
                                       See Ball
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col text-start">
                                       basketball2
                                    </div>
                                    <div class="col text-end">
                                       See Ball
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col text-start">
                                       basketball3
                                    </div>
                                    <div class="col text-end">
                                       See Ball
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-12 mt-4">
                  <label for="accordionVolleyball" class="form-label">Volleyballs</label>
               </div>

               <div class="col-lg-12">
                  <div class="accordion" id="accordionVolleyball">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="panelStayOpen2">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#panelStayOpen2Collapse" aria-expanded="false"
                              aria-controls="panelStayOpen2Collapse">
                              Select
                           </button>
                        </h2>
                        <div id="panelStayOpen2Collapse" class="accordion-collapse collapse" aria-labelledby="panelStayOpen2">
                           <div class="accordion-body">
                              <div class="d-flex flex-column">
                                 <div class="row">
                                    <div class="col text-start">
                                       volleyball1
                                    </div>
                                    <div class="col text-end">
                                       See Ball
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col text-start">
                                       volleyball2
                                    </div>
                                    <div class="col text-end">
                                       See Ball
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col text-start">
                                       volleyball3
                                    </div>
                                    <div class="col text-end">
                                       See Ball
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>

         <img src="./images/extras/signin-1.svg" alt="" class="mt-5 mb-5">
      </div>
   </main>
   <footer></footer>

</body>

</html>