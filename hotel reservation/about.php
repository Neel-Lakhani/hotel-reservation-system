<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>THE PALM | About</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100&family=Exo+2:wght@100&family=Fugaz+One&family=Homemade+Apple&family=Josefin+Sans:wght@100&family=Jost:wght@200&family=Lato:wght@300&family=Merienda:wght@800;900&family=Playfair+Display&family=Press+Start+2P&family=Signika&family=Ysabeau:wght@1;300;400&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <style>
    * {
      font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    .logo {
      font-family: 'Merienda', cursive;
    }

    .font {
      font-weight: 500;
    }

    .custom-bg {
      background-color: #2ec1ac;
    }

    .custom-bg:hover {
      background-color: #279e8c;
    }

    .nav-color {
      background-color: rgb(232, 232, 232);
    }

    .pop:hover{
      border: 3px solid rgb(8, 78, 103) !important;
        transform: scale(1.05);
        transition: all 0.2s;
    }
  </style>

</head>

<body class="bg-light">

<!-- ----include header---- -->

  <?php require('inc/header.php') ?>


  <div class="my-5 px-4">
    <h2 class="fw-bold logo text-center mb-3">ABOUT US</h2>
    <div class="container text-center">
      <p>We provide luxurious facilities to our valuable guests. </p>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1">
        <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora  deleniti laudantium quo cupiditate
          inventore atque, rem </p>
      </div>
      <div class="col-lg-5 col-md-5 order-1 order-lg-2 order-md-2 mb-4">
        <img src="./img/person.jpg" alt="" class="w-100 rounded-4">
    </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px 4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop">
          <img src="./img/hotel.png" width="70px" alt="">
          <h4 class="mt-3"> 100+ Rooms
          </h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px 4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop">
          <img src="./img/rating.png" width="70px" alt="">
          <h4 class="mt-3"> 1000+ Customers
          </h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px 4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop">
          <img src="./img/customer.png" width="70px" alt="">
          <h4 class="mt-3"> 400+ Reviews
          </h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px 4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop">
          <img src="./img/team.png" width="70px" alt="">
          <h4 class="mt-3"> 200+ Staff
          </h4>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER STARTS -->


  <?php require('inc/footer.php') ?>
</body>

</html>