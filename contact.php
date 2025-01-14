<?php
include ('db_connection.php'); // Replace with your database connection script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $query = "INSERT INTO contactus (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send your message. Please try again later.');</script>";
    }

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
            <a href="/" class="text-white">Home</a>
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
            <div class="d-flex align-items-center pt-3">

            </div>
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
        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Your Email"
                    required
                />
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-floating">
                <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Phone"
                />
                <label for="phone">Your Phone</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea
                    class="form-control"
                    placeholder="Leave a message here"
                    id="message"
                    name="message"
                    style="height: 160px"
                    required
                ></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100 py-3">
                Send Message
            </button>
        </div>
    </div>
</form>

          </div>
        </div>

     
      </div>
    </div>
    <!-- Contact End -->
    <!-- FAQ Start -->
    <div class="container-fluid faq-section">
      <div class="container py-5">
        <div
          class="section-title text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="sub-style">
            <h5 class="sub-title text-primary px-3">FAQ</h5>
          </div>
          <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
          <p class="mb-0">
            Have questions? We've got answers. Here are some of the most common
            queries from our customers.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-10 mx-auto">
            <div class="accordion" id="faqAccordion">
              <!-- Question 1 -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    What is the Global Franchise Forum?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    The Global Franchise Forum is an annual gathering of
                    entrepreneurs, investors, and industry experts to explore
                    franchise opportunities and share insights into business
                    strategies.
                  </div>
                </div>
              </div>
              <!-- Question 2 -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    How do I register for the event?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    You can register for the event through our official website.
                    Click on the "Register Now" button and follow the
                    instructions to secure your spot.
                  </div>
                </div>
              </div>
              <!-- Question 3 -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    What is included in the registration fee?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    The registration fee includes access to all sessions,
                    workshops, and networking events. Attendees also receive
                    complimentary lunch, coffee breaks, and event materials.
                  </div>
                </div>
              </div>
              <!-- Question 4 -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    Is there a refund policy for cancellations?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Yes, we offer a full refund if you cancel your registration
                    up to 30 days before the event. After that, partial refunds
                    may apply. Please check our refund policy for detailed
                    terms.
                  </div>
                </div>
              </div>
              <!-- Question 5 -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                <h2 class="accordion-header" id="headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                  >
                    Will event materials be available after the conference?
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Yes, all registered attendees will receive a digital package
                    containing session recordings, presentations, and
                    supplementary resources within a week of the event's
                    conclusion.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQ End -->

<?php include ('footer.php'); ?>
