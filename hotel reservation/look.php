<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>THE PALM | Booking</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&display=swap"
        rel="stylesheet">
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

        .pop:hover {

            transform: scale(1.03);
            transition: all 0.2s;
        }
    </style>

</head>

<body class="bg-light">


    <?php require('inc/header.php') ?>

    <h2 class="mt-3 pt-4 mb-4 text-center fw-bold logo">OUR ROOMS</h2>

    <div class="container my-5 ">
        <div class="row featurette  col-lg-4">
            <div class=" pop">
                <img class="bd-placeholder-img rounded-5 bd-placeholder-img-lg featurette-image img-fluid mx-auto mb-4"
                    src="./img/room-1.webp" alt="">
            </div>
            <div class=" ">
                <h2 class="featurette-heading fw-normal lh-1 mb-2">Sea Facing Rooms </h2>
                <p class="lead my-3">Experience luxury and elegance at its finest in our Deluxe Rooms at the Palm
                    Hotel. These rooms offer Panoramic breathtaking waterfront views of Sea, making it the perfect place
                    to relax and unwind..</p>

                <button class="btn btn-danger btn-lg mb-4"> BOOK NOW!</button>
            </div>
        </div>

        <div class="row featurette  col-lg-4">
            <div class="  pop">
                <img class="bd-placeholder-img rounded-5 bd-placeholder-img-lg featurette-image img-fluid mx-auto mb-4"
                    src="./img/room-2.jpg" alt="">
            </div>
            <div class=" ">
                <h2 class="featurette-heading fw-normal lh-1">Delux Rooms </h2>
                <p class="lead my-3">Experience comfort and luxury in our Deluxe Rooms at the Palm Hotel. Our rooms are
                    designed to provide guests with a comfortable and stylish stay.</p>

                <button class="btn btn-danger btn-lg mb-4"> BOOK NOW!</button>
            </div>
        </div>


        <div class="row featurette  col-lg-4">
            <div class=" pop">
                <img class="bd-placeholder-img rounded-5 bd-placeholder-img-lg featurette-image img-fluid mx-auto mb-4"
                    src="./img/room-3.jpg" alt="">
            </div>
            <div class=" ">
                <h2 class="featurette-heading fw-normal lh-1">Premium Suit </h2>
                <p class="lead my-3">Premium Suits offers luxuary stay to Guests. It is fully fernished and decorated
                    suit. Guests can enjoy all of the facalities of our hotel.</p>

                <button class="btn btn-danger btn-lg mb-4"> BOOK NOW!</button>
            </div>
        </div>




      

    <!-- -----Room 4 ---- -->



    <!-- ----- FOOTER STARTS----- -->

    <?php require('inc/footer.php') ?>

</body>

</html>