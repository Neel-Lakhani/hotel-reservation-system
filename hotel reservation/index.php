<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>THE PALM | Home</title>
  <link rel="stylesheet" href="./css/common.css" />
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

    .check-form {
      margin-top: -50px;
      position: relative;
      z-index: 1;
    }

    .pop:hover{
 
        transform: scale(1.03);
        transition: all 0.2s;
    }

  </style>

</head>

<body class="bg-light">


  <?php require('inc/header.php')?>



  <!-- MAIN STARTS -->
  <div style="margin: 20px;">
    <img src="./img/hotel-1.png" class="img-fluid w-100 rounded " alt="Responsive image">

  </div>

  <!-- ---------- CHECK AVAILABILITY FORM-------  -->

  <div class="container check-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p4 rounded">
        <h5 class="mb-4 my-4">Check Availability</h5>
        <form class="my-4 mx-3">
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label form">Check-In Date</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label form">Check-Out Date</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label"> Adults</label>
              <select class="form-select" aria-label="Default select example">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label"> Children</label>
              <select class="form-select" aria-label="Default select example">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3">
              <button type="submit" class="btn text-white shadow-none custom-bg"> Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ----- OUR ROOMS---- -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold logo">OUR ROOMS</h2>

  <!-- ---- CARD STARTS---- -->

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3 pop">
        <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
          <img src="./img/room-1.webp" class="card-img-top " alt="...">
          <div class="card-body">
            <h5>Sea Facing Rooms</h5>
            <h6 class="mb-4"> ₹2500/Night</h6>
            <div class="features mb-4">
              <p class="mb-1">These rooms offer Panoramic breathtaking waterfront views of Sea, making it the perfect
                place to relax..</p>
            </div>
            <div class="ratings mb-3">
              <h6 class="mb-1 fw-bold">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <a href="#" class="btn custom-bg ">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3 pop">

        <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
          <img src="./img/room-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Delux Rooms</h5>
            <h6 class="mb-4"> ₹3000/Night</h6>
            <div class="features mb-4">
              <p class="mb-1">Our rooms are designed to provide guests with a comfortable ,stylish and luxuary stay with
                Delux Rooms.</p>
            </div>
            <div class="ratings mb-3">
              <h6 class="mb-1 fw-bold">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </div>
            <a href="#" class="btn custom-bg ">Book Now</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 my-3 pop">
        <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
          <img src="./img/room-3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Premium Suit</h5>
            <h6 class="mb-4"> ₹5000/Night</h6>
            <div class="features mb-4">
              <p class="mb-1">This is Fully furnished in a combination of classic and modern styles and features a
                separate sitting area.</p>
            </div>
            <div class="ratings mb-3">
              <h6 class="mb-1 fw-bold">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <a href="#" class="btn custom-bg ">Book Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-4">
        <a href="booking.php" class="btn btn-outline-dark rounded-3 fw-bold shadow-none">More Rooms >></a>
      </div>
    </div>
  </div>


  <!-- ------Facilities----- -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold logo">OUR FACILITIES</h2>

  <div class="container ">
    <div class="row justify-content-evenly px=lg-0">
      <div class="col-lg-2 col-md 2 text-center rounded shadow py-4 my-3 pop">
       <img src="./img/wifi-icon.png" height="80px" width="80px" alt="">
        <h5 class="mt-3">Free wifi</h5>
      </div>
      <div class="col-lg-2 col-md 2 text-center rounded shadow py-4 my-3 pop">
        <img src="./img/pool-icon.png" width="80px" height="80px">
        <h5 class="mt-3">Swimming Pool</h5>
      </div>
      <div class="col-lg-2 col-md 2 text-center rounded shadow py-4 my-3 pop">
        <img src="./img/casino-icon.png" width="80px" height="80px">
        <h5 class="mt-3">Casino</h5>
      </div>
      <div class="col-lg-2 col-md 2 text-center rounded shadow py-4 my-3 pop">
        <img src="./img/restaurant.png" width="80px" height="80px">
        <h5 class="mt-3">Restaurant</h5>
      </div>
      <div class="col-lg-2 col-md 2 text-center rounded shadow py-4 my-3 pop">
        <img src="./img/gym-icon.png" width="80px" height="80px">
        <h5 class="mt-3">Gym</h5>
      </div>
    </div>
  </div>


  <!-- ------ Reach US---- -->


  <h2 class="mt-5 pt-4 mb-4 text-center  fw-bold logo">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.67288148977!2d72.65747753596237!3d21.159440571035283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1691579188365!5m2!1sen!2sin"
          height="450" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4 rounded">
        <div class="bg-white">
          <h5 class="pt-4 pb-3 mx-2">Call US </h5>
          <a href="" class="d-inline-block mb-2 text-decoration-none text-dark mx-4">
            <i class="bi bi-telephone-fill"></i> +919898746454
          </a>
          <br>
          <a href="" class="d-inline-block mb-2 text-decoration-none text-dark mx-4">
            <i class="bi bi-telephone-fill"></i> +913598700676
          </a>
        </div>

        <div class="bg-white  py-2">
          <h5 class="pt-4 pb-0 mx-3">Follow US </h5>
          <a href="" class="d-inline-block my-3 text-decoration-none text-dark mx-4">
            <span class="fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
          </a>
          </span>
          <br>
          <a href="" class="d-inline-block mb-3 text-decoration-none text-dark mx-4">
            <span class="fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>

          <br>
          <a href="" class="d-inline-block mb-3 text-decoration-none text-dark mx-4">
            <span class="fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
          </a>
          </span>
        </div>

      </div>
    </div>
  </div>



  <!-- FOOTER STARTS -->

  <?php require('inc/footer.php')?>

</body>

</html>


<!-- INCLUDED SCRIPTS -->