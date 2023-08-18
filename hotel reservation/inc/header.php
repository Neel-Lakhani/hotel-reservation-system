<nav class="navbar navbar-expand-lg nav-color navbar-light px-lg-2 py-lg-1 shadow-sm sticky-top  ">
    <div class="container-fluid">
      <a class="navbar-brand logo fw-bold fs-3">
        The Palm
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
          <li class="nav-item">
            <a class="nav-link active  me-2 " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link me-2 " href="./facilities.php">Facilities </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 " href="./rooms.php"> Rooms </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 " href="./about.php"> About Us </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 " href="./contact.php"> Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">

          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 " data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none  " data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>

        </form>
      </div>

    </div>
  </nav>


  <!-- Modals -->
  <div class="modal fade modal-lg" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
              <i class="bi bi-person-fill-add fs-3 me-2"></i>

              User Registration
            </h1>
            <button type="reset" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge text-bg-danger lh-base text-wrap mb-3">Note: Your Detailes Must Match with Your ID
              (Adhaarcard, Passport, Pancard, etc.). It Will be Required When You will check-in.</span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0">
                  <label class="form-label"> Full Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                  <label class="form-label">Email Address</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 py-2">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 py-2">
                  <label class="form-label">Your ID Proof</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 ps-0 py-2">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-6 ps-0 py-2">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 py-2">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 py-2">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 py-2">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="d-flex justify-content-center align-items-center my-2">
                  <button type="submit" class="btn btn-dark">Register</button>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
              
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <button type="submit" class="btn btn-dark">Login</button>
              <a href="#" class="text-decoration-none text-secondary"> Forgot Password?</a>
            </div> -->
      </div>
      </form>
    </div>
  </div>
  </div>
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
              <i class="bi bi-person-circle fs-3 me-2"></i>
              User Login
            </h1>
            <button type="reset" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">

            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <button type="submit" class="btn btn-dark">Login</button>
              <a href="#" class="text-decoration-none text-secondary"> Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
