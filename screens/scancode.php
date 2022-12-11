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

      body,
      main {
         overflow: hidden !important;
         /* overflow-y: auto!important; */
      }

      .scannerbox {
         overflow: auto;
         max-width: 400px;
      }

      footer {
         width: 100%;
      }
   </style>
</head>

<body class="">
   <?php
   include "../repeat/header.php";
   ?>
   <a href="./scanoption.php" class="back-button">
      <img src="../images/extras/back-button.svg" alt="">
   </a>
   <button class="logout-button">Logout</button>
   <main class="pt-5">
      <div class="container-fluid pt-4 ">
         <h6 class="text-dark">Scan QR Code</h6>
         <h6 class="pb-4">Position camera on the code</h6>
         <div class="scannerbox container d-flex flex-column justify-content-center mb-5">
            <div class="row col-lg-12 bg-danger justify-content-center">
               <div class="col-lg-12">
                  <div id="reader"></div>
               </div>
            </div>
            <div class="row col-lg-12 bg-primary">
               <div class="col-lg-12" style="padding:30px;">
                  <h4>SCAN RESULT</h4>
                  <div id="result">Result Here</div>
               </div>
            </div>
         </div>
      </div>
   </main>
   <footer></footer>


   <script src="../js/html5-qrcode.min.js"></script>
   <script type="text/javascript">
      function onScanSuccess(qrCodeMessage) {
         document.getElementById('result').innerHTML = '<span class="result">' + qrCodeMessage + '</span>';
      }
      function onScanError(errorMessage) {
         //handle scan error
      }
      var html5QrcodeScanner = new Html5QrcodeScanner(
         "reader", { fps: 10, qrbox: 250 });
      html5QrcodeScanner.render(onScanSuccess, onScanError);
   </script>
</body>

</html>