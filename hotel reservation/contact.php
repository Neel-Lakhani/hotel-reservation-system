<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>THE PALM | Contect</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100&family=Exo+2:wght@100&family=Fugaz+One&family=Homemade+Apple&family=Josefin+Sans:wght@100&family=Jost:wght@200&family=Lato:wght@300&family=Merienda:wght@800;900&family=Playfair+Display&family=Press+Start+2P&family=Signika&family=Ysabeau:wght@1;300;400&display=swap"
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

    .nav-color{
      background-color: rgb(232, 232, 232);
    }
  </style>

</head>

<body class="bg-light">


  <?php require('inc/header.php')?>
   

<!-- main STARTS-->


<div class=" my-5 px-4">
    <h2 class="fw-bold logo text-center">CONTACT US</h2>
    <div class="container text-center">
      <p>Get-in Touch With Us. </p>
    </div>
  </div>

     <!-- FORM STARTS -->


     <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-7 p4  mb-lg-0 mb-3 bg-white rounded shadow">
        <iframe class="w-100 rounded mt-2"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.67288148977!2d72.65747753596237!3d21.159440571035283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1691579188365!5m2!1sen!2sin"
          height="450" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <h5 class="pt-4 pb-3 mx-2">Call US </h5>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark ms-4">
            <i class="bi bi-telephone-fill"></i> +919898746454
          </a>
          <br>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark ms-4">
            <i class="bi bi-telephone-fill"></i> +913598700676
          </a>

          <h5 class="pt-4 pb-0 mx-2">Email </h5>
          <a href="#" class="d-inline-block my-3 text-decoration-none text-dark mx-4">
            <span class="fs-6">
            <i class="bi bi-envelope-at-fill fs-5 pe-2"></i> contact.palmhotel@gmail.com
          </a>
          </span>

          <h5 class="pt-4 pb-0 mx-2">Follow US </h5>
          <a href="#" class="d-inline-block my-3 text-decoration-none text-dark ms-4">
            <span class="fs-6 ">
              <i class="bi bi-facebook me-1 fs-5"></i> 
          </a>
          </span>
        
          <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark mx-1">
            <span class="fs-6 p-2">
              <i class="bi bi-twitter fs-5"></i>
            </span>
          </a>

          <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark ">
            <span class="fs-6 p-2">
              <i class="bi bi-instagram  fs-5"></i> 
          </a>
          </span>
      </div>

      <!-- ----message form--- -->


      <div class="col-lg-5 col-md-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <img src="./img/message.jpg" class="w-100 rounded-3" height="240">
          <form action="#">
            <h5 class="my-3 fw-bold">Send a Message</h5>
            <div class="mb-3">
                  <label class="form-label"> Name </label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                  <label class="form-label">Mobile Number</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                  <label class="form-label">Subject</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mb-4">
                  <label class="form-label">Message </label>
                  <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn custom-bg">Send Message </button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 <!-- FOOTER STARTS -->


<!-- ----- FOOTER STARTS----- -->

<?php require('inc/footer.php')?>

</body>
</html>