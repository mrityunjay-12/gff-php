<?php
include('db_connection.php'); // Replace with your database connection script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize user inputs
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $city = htmlspecialchars($_POST['city']);
    $country = htmlspecialchars($_POST['country']);
    $organization = htmlspecialchars($_POST['organization']);
    $details = htmlspecialchars($_POST['details']);
    $looking_for = htmlspecialchars($_POST['looking_for']);

    // Correct SQL query to match the updated table structure
    $query = "INSERT INTO form (name, phone, city, country, organization, details, looking_for) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
              
    // Prepare the statement
    $stmt = $conn->prepare($query);

    // Bind parameters to the query
    $stmt->bind_param("sssssss", $name, $phone, $city, $country, $organization, $details, $looking_for);

    // Execute the query and check if successful
    if ($stmt->execute()) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send your message. Please try again later.');</script>";
    }
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<?php include ('header.php'); ?>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
      <div class="container text-center py-5" style="max-width: 900px">
        <h3
          class="text-white display-3 mb-4 wow fadeInDown"
          data-wow-delay="0.1s"
        >
          Contact Us
        </h3>
        <ol
          class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown"
          data-wow-delay="0.3s"
        >
          <li class="breadcrumb-item">
            <a href="index.html" class="text-white">Home</a>
          </li>
          <!-- <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li> -->
          <li class="breadcrumb-item active text-secondary">Contact Us</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->
    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden py-5">
      <div class="container py-5">
        <div class="row g-5 mb-5">
          <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="sub-style">
              <h5 class="sub-title text-primary pe-3">Contact Us</h5>
            </div>
            <h1 class="display-5 mb-4">We’d Love to Hear From You!</h1>
            <p class="mb-5">
              <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
              totam deserunt tempora. Tempore neque necessitatibus corporis
              error earum sint quae? -->
            </p>
            <div class="d-flex border-bottom mb-4 pb-4">
              <i
                class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"
              ></i>
              <div class="ps-3">
                <h5>Location</h5>
                <p>
                  Franchise India Ventures Private Limited
                  405b, Pinnacle Tower, Surajkund
                  Road, Faridabad, Haryana- 121001
                </p>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-xl-6">
                <div class="d-flex">
                  <i class="fas fa-tty fa-3x text-primary"></i>
                  <div class="ps-3">
                    <h5 class="mb-3">Quick Contact</h5>
                    <div class="mb-3">
                      <h6 class="mb-0">Phone:</h6>
                      <a href="#" class="fs-5 text-primary">+91 99101 20897</a>
                    </div>
                    <div class="mb-3">
                      <h6 class="mb-0">Email:</h6>
                      <a href="#" class="fs-5 text-primary">info@globalfranchiseforum.com</a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="d-flex align-items-center pt-3"></div>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
            <div class="sub-style">
              <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
            </div>
            <h1 class="display-5 mb-4">Send Us a Message.</h1>
            <p class="mb-3">
              <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
              accusamus laudantium explicabo sapiente pariatur molestias modi
              eos, minima recusandae cumque perferendis maiores a. Error
              reprehenderit reiciendis exercitationem nulla ut eos. -->
            </p>
           <form method="POST" action="">
                <div class="row g-4">
                    <!-- Name Field -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Your Name"
                                required
                            />
                            <label for="name">Your Name</label>
                        </div>
                    </div>

                    <!-- Phone Field -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input
                                type="tel"
                                class="form-control"
                                id="phone"
                                name="phone"
                                placeholder="Phone"
                                required
                            />
                            <label for="phone">Your Phone</label>
                        </div>
                    </div>

                    <!-- City Field -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                id="city"
                                name="city"
                                placeholder="City"
                                required
                            />
                            <label for="city">City</label>
                        </div>
                    </div>

                    <!-- Country Field -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                id="country"
                                name="country"
                                placeholder="Country"
                                required
                            />
                            <label for="country">Country</label>
                        </div>
                    </div>

                    <!-- Organization Field -->
                    <div class="col-lg-12">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                id="organization"
                                name="organization"
                                placeholder="Organization"
                                required
                            />
                            <label for="organization">Organization</label>
                        </div>
                    </div>

                    <!-- Details Field -->
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea
                                class="form-control"
                                placeholder="Provide more details"
                                id="details"
                                name="details"
                                style="height: 160px"
                                required
                            ></textarea>
                            <label for="details">Details</label>
                        </div>
                    </div>

                    <!-- Dropdown: What Are You Looking For? -->
                    <div class="col-12">
                            <div class="form-floating">
                                <select
                                    class="form-control"
                                    id="looking_for"
                                    name="looking_for"
                                    style="background-color: white;"
                                    required
                                >
                                    <option value="" disabled selected>-- Select an option --</option>
                                    <option value="investment">Investment</option>
                                    <option value="expanding_business">Expanding Your Business</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="looking_for" style="color:black; font-size: 1.2rem;" >What are you looking for?</label>
                            </div>
                        </div>

                    <!-- Submit Button -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100 py-3">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
<?php include ('footer.php'); ?>
