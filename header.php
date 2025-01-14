<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Global Franchise Forum</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />


    <script>
  // Add "active" class to the current navigation link
  document.addEventListener('DOMContentLoaded', () => {
    // Get the current URL path
    const currentPath = window.location.pathname;
    console.log("Current Path:", currentPath); // Debugging to check the current path

    // Select all navbar links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(link => {
      const linkPath = link.getAttribute('href');
      console.log("Checking link:", linkPath); // Debugging to check each link's href

      // Check if the href matches the current path
      if (currentPath.endsWith(linkPath)) { // Match even if paths are relative
        link.classList.add('active');
        console.log("Active class added to:", linkPath); // Debugging to confirm the match
      } else {
        link.classList.remove('active');
      }
    });
  });
</script>



    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-secondary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
      <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
          <div class="d-flex">
            <a href="mailto:info@globalfranchiseforum.com" class="text-white me-4"
              ><i class="fas fa-envelope me-2 icon-color"></i>info@globalfranchiseforum.com</a
            >
            <a href="tel:+919910120897" class="text-white me-0">
              <i class="fas fa-phone-alt me-2 icon-color"></i> +91 99101 20897
            </a>
          </div>
        </div>
        <!-- <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <a href="contact.php" class="icon-color">Help</a
            ><small> / </small>
            <a href="contact.php" class="text-white mx-2">Support</a
            ><small> / </small>
            <a href="contact.php" class="text-white ms-2">Contact Us</a>
          </div>-->
        <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <a href="contact.php" class="icon-color"></a><small> </small>
            <a href="contact.php" class="text-white mx-2"></a><small></small>
            <a href="contact.php" class="text-white ms-2"></a>
          </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <!-- <a
              class="btn btn-sm btn-outline-light btn-square rounded-circle me-2"
              href=""
              ><i class="fab fa-twitter fw-normal"></i
            ></a> -->
            <!-- <a
              class="btn btn-sm btn-outline-light btn-square rounded-circle me-2"
              href=""
              ><i class="fab fa-facebook-f fw-normal"></i
            ></a> -->
            <a
              class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" target="_blank"
              href="https://www.linkedin.com/company/global-franchise-forum"
              ><i class="fab fa-linkedin-in fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-square rounded-circle me-2"
              href=""
              ><i class="fab fa-instagram fw-normal"></i
            ></a>
            <!-- <a
              class="btn btn-sm btn-outline-light btn-square rounded-circle"
              href=""
              ><i class="fab fa-youtube fw-normal"></i
            ></a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
      <nav
        class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0"
      >
        <a href="/" class="navbar-brand p-0">
          <h1 class="display-5 text-secondary m-0" style="size: 30px">
            <img src="img/logo.png" class="img-fluid" alt="logo" />
          </h1>
          <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about.php" class="nav-item nav-link">About</a>
            <!-- <a href="events.php" class="nav-item nav-link">Events</a> -->
            <a href="/global-franchise.php" class="nav-item nav-link"
              >Global Franchise Forum</a
            >
            <a href="/global-franchise-leadership.php" class="nav-item nav-link"
              >Leadership Forum</a
            >
            <a href="/global-franchise-awards.php" class="nav-item nav-link"
              >Awards</a
            >
            <a href="/portfolio.php" class="nav-item nav-link">Portfolio</a>

            <div class="nav-item dropdown ">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
            <div class="dropdown-menu m-0">
                <a href="/abudhabi-franchise-show.php" class="dropdown-item">Abu Dhabi Franchise Show</a>
                <a href="/qatar-franchise-show.php" class="dropdown-item">Qatar Franchise Show</a>
            </div>
        </div>

            <!-- <div class="nav-item dropdown">
              <a href="#" class="nav-link" data-bs-toggle="dropdown"
                ><span class="dropdown-toggle">Pages</span></a
              >
              <div class="dropdown-menu m-0">
                <a href="#" class="dropdown-item">Feature</a>
                <a href="#" class="dropdown-item">Countries</a>
                <a href="#" class="dropdown-item">Testimonial</a>
                <a href="#" class="dropdown-item">Training</a>
                <a href="#" class="dropdown-item">404 Page</a>
              </div>
            </div> -->
            <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
          </div>
          <!-- <button
            class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3"
            data-bs-toggle="modal"
            data-bs-target="#searchModal"
          >
            <i class="fas fa-search"></i>
          </button> -->
          <a
            href="/contact.php"
            class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0"
            >Contact Us</a
          >
        </div>
      </nav>
    </div>
    <!-- Navbar & Hero End -->