<?php
include('header.php');
include('db_connection.php'); // Include your database connection script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include the database connection
    require 'db_connection.php'; // Make sure you have a separate file for the database connection

    // Sanitize user inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $city = htmlspecialchars($_POST['city']);
    $looking_for = htmlspecialchars($_POST['looking_for']);
    $investment_range = isset($_POST['investment_range']) ? htmlspecialchars($_POST['investment_range']) : null;
    $details = htmlspecialchars($_POST['details']);

    // Validate mandatory fields
    if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($looking_for) || empty($details)) {
        echo "<script>alert('Please fill in all required fields.');</script>";
    } else {
        // SQL query to insert data into the form table
        $query = "INSERT INTO abudabhievent_form_submissions (name, email, phone, city, looking_for, investment_range, details) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $conn->prepare($query);

        if ($stmt) {
            // Bind parameters to the query
            $stmt->bind_param("sssssss", $name, $email, $phone, $city, $looking_for, $investment_range, $details);

            // Execute the query
            if ($stmt->execute()) {
                echo "<script>alert('Your message has been sent successfully!');</script>";
            } else {
                echo "<script>alert('Failed to send your message. Please try again later.');</script>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<script>alert('Error preparing the query.');</script>";
        }
    }

    // Close the database connection
    $conn->close();
}
?>


    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb">
      <div class="container text-center py-5" style="max-width: 900px">
        <h3
          class="text-white display-3 mb-4 wow fadeInDown"
          data-wow-delay="0.1s"
        >
         Abu Dhabi Franchise Show 2025
        </h3>

        <ol
          class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown"
          data-wow-delay="0.3s"
        >
          <li class="breadcrumb-item">
            <a href="index.html" class="text-white">Event</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#" class="text-white">Pages</a>
          </li>
          <li class="breadcrumb-item active text-secondary">Abu Dhabi Franchise Show 2025</li>
        </ol>
      </div>
    </div> -->
    <!-- Header End -->


    <div class="container-fluid service overflow-hidden ">
      <div class="container py-5">
        <div
          class="section-title text-center  wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="sub-style">
            <h5 class="sub-title text-primary px-3">Abu Dhabi Franchise Show</h5>
          </div>

          <h1 class="display-6 mb-4">About the Event</h1>
          
        </div>
  <p class="text-center">
          The Global Franchise Forum is thrilled to announce the Abu Dhabi Franchise Show 2025, set to take place on 13th February. This premier event is your gateway to unlocking cross-border franchise opportunities, connecting visionary investors with global brands in the vibrant UAE market. Attendees will explore high-growth sectors, gain valuable insights from franchise experts, and harness Abu Dhabi’s thriving economy. With a strong emphasis on innovation, strategic partnerships, and market leadership, the Abu Dhabi Franchise Show 2025 by Global Franchise Forum offers an unparalleled chance to redefine success in franchising. Don’t miss this opportunity to shape the future of franchising in the UAE and the Middle East!
          </p>
      </div>
    </div>

    <!-- Vision and Mission Section Start -->

   
 <!-- about award start-->
 <div class="container py-5">
     
      <div class="row g-5 align-items-center mt-4">
        <!-- Content Section -->
        <div class="col-lg-6">
          <!-- <h5 class="mb-3 sub-title text-center text-lg-start pe-3">
          UAE
          </h5> -->
          <h1 class="display-5 mb-4 text-center text-lg-start">
          A Booming Hub for Franchise Opportunities
          </h1>
         
          <ul class="list-unstyled">
            <li class="mb-3">
              <strong>Population:</strong>  Approximately 10 million, comprising a diverse and affluent consumer base.
            </li>
            <li class="mb-3">
              <strong>Franchise Trends:</strong>  High demand for food and beverage, premium retail, wellness, and tech-driven franchises.
            </li>
            <li class="mb-3">
              <strong>Strategic Importance:</strong> Abu Dhabi stands as the political, cultural, and industrial hub of the UAE, with a fast-growing economy.

            </li>
            <li class="mb-3">
              <strong>Retail Sophistication:</strong> Advanced retail landscape featuring iconic landmarks like Yas Mall and Marina Mall.
            </li>
            <li class="mb-3">
              <strong>Established Global Brands:</strong> Franchises such as Shake Shack, Starbucks, and The Cheesecake Factory thrive in the region.

            </li>
            <li class="mb-3">
              <strong>Diverse Opportunities:</strong> Abu Dhabi presents immense potential for innovative franchises in food, wellness, education, and retail, fueled by high disposable incomes and a cosmopolitan audience.

            </li>
          </ul>
        </div>
        <!-- Image Section -->
        <div class="col-lg-6 text-center">
          <img
            src="img/Award-Categories.jpg"
            alt="Award Categories"
            class="img-fluid rounded"
          />
        </div>
      </div>
    </div>

    <!-- about award end -->
 <!-- cta -->
 <div class="hero-section">
      <div class="container">
        <div class="text-center">
          <h1 class="display-6 mb-4" style="color: white">
          What the Event will Offers
          </h1>
      
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
          <div class="stat-item">
            <!-- <h2 class="dynamic-counter" style="color: white" data-value="10000">
              0
            </h2> -->
            <h4 class="text-white">Access</h4>
            <p>
            Direct access to global franchise opportunities.
            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Market Insights</h4>
            <p>
            In-depth industry research and trends.

            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Personalized Engagements</h4>
            <p>
            One-on-one meetings with top franchise leaders.
            </p>
          </div>
          <div class="stat-item ">
            <h4 class="text-white">Networking Opportunities</h4>
            <p>
            Connect with high-net-worth individuals (HNIs) and business houses.
            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Recognition</h4>
            <p>
            Celebrate achievements through the prestigious Global Franchise Forum Awards.
            </p>
          </div>
         
        </div>
      </div>
    </div>


    <!-- Eligibility and Criteria start -->
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-12 wow fadeInRight" data-wow-delay="0.3s">
          <div
            class="section-title text-center wow fadeInUp"
            data-wow-delay="0.1s"
            style="margin-bottom: 70px"
          >
           
            <h1 class="display-6 mb-4">Why You Should Participate</h1>
           
          </div>

          <!-- Steps in Cards Displayed in a Responsive Row -->
          <div
            class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center"
          >
            <div class="col">
              <div class="card h-100" style="min-height: 250px;">
                <div class="card-body text-center">
                <i class="fas fa-chart-line fa-2x text-success mb-3 mt-4"></i>

                  <h5 class="card-title text-center">
                  Expand Markets
                  </h5>
                  <p class="text-center ">
                  Enter thriving, untapped franchise markets
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="min-height: 250px;">
                <div class="card-body text-center">
                <i class="fas fa-users fa-2x text-success mb-3 mt-4"></i>
                  <h5 class="card-title text-center">Investor Connections</h5>
                  <p class="text-center">
                  Network with pre-qualified investors.
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="min-height: 250px;">
                <div class="card-body text-center">
                <i class="fas fa-globe fa-2x text-success mb-3 mt-4"></i>
                  <h5 class="card-title text-center">Explore the GCC Region</h5>
                  <p class="text-center">
                  Identify lucrative opportunities across the UAE and beyond.
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="min-height: 250px;">
                <div class="card-body text-center">
                <i class="fas fa-user-tie fa-2x text-success mb-3 mt-4"></i>

                  <h5 class="card-title text-center">
                  Gain Expert Guidance
                  </h5>
                  <p class="text-center">
                   Learn from franchise consultants and industry leaders at the Global Franchise Forum.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Eligibility and Criteria end -->
<div class="container py-5">
      <div class="row g-5">
        <div class="col-12 wow fadeInRight" data-wow-delay="0.3s">
          <div
            class="section-title text-center wow fadeInUp"
            data-wow-delay="0.1s"
            style="margin-bottom: 70px"
          >
           
            <h1 class="display-6 mb-4">Who Can Participate?</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center mb-4">
            <div class="col" style="max-width: 500px;">
              <div class="card h-100" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Target Audience</h5>
                  <p class="text-center">Aspiring master franchisees aiming to expand their business ventures.
                  </p>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Key Stakeholders</h5>
                  <p class="text-center">
                    High-net-worth individuals (HNIs), ultra-high-net-worth individuals, and prominent business houses.
                  </p>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Industry Experts</h5>
                  <p class="text-center">
                    Global franchise consultants and leaders in the franchising ecosystem.
                  </p>
                </div>
              </div>
            </div>
        </div>      
      </div>
    </div>
</div>

    <!-- <div class="hero-section">
      <div class="container">
        <div class="text-center">
          <h1 class="display-6 mb-4" style="color: white">
          What the Event Will Offer
          </h1>
      
        </div>

       
        <div class="stats-grid">
          <div class="stat-item">
          
            <h4 class="text-white">Target Participants</h4>
            <p>
            Aspiring master franchisees eager to expand their business portfolios.

            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Key Stakeholders</h4>
            <p>
            High-net-worth individuals, ultra-high-net-worth individuals, and influential business groups.

            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Industry Experts </h4>
            <p>
            Global franchise consultants and market strategists from across industries.

            </p>
          </div>
        
         
        </div>
      </div>
    </div> -->

    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container">
            <div class="section-title text-center wow fadeInUp"
                        data-wow-delay="0.1s"
                        
                    >
                    <h1 class="display-6 mb-4">Global Franchise Forum Highlights</h1>
            </div>
            <div class="row align-items-center">
            <!-- Full Width Cards -->
                <div class="highlights-grid">
                    <div class="highlight-card">
                    <h2>97+</h2>
                    <p>Extensive Reach: Present in 97+ cities and 9+ international locations.</p>
                </div>
                <div class="highlight-card">
                    <h2>10,000+</h2>
                    <p>Brand Collaboration: Partners with 10,000+ brands</p>
                </div>
                <div class="highlight-card">
                    <h2>1 Lakh+</h2>
                    <p>Proven Success: Facilitated over 1 lakh successful deals globally.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
  <div class="row g-4">
        <!-- Section Title -->
        <div class="col-12">
        <h1 class="section-title text-center">
        Opportunities at Abu Dhabi Franchise Show by Global Franchise Forum
        </h1>
        </div>
        <!-- Food and Beverage Card -->
         
        <div class="row g-4 d-flex align-items-stretch">
        <div class="col-lg-4">
        <div class="opportunity-card shadow border-1" style="min-height:400px;">
            <div class="opportunity-card-body">
            <h3 class="opportunity-card-title">Food and Beverage</h3>
            <p class="opportunity-card-text">The Global Franchise Forum showcases the lucrative potential of food and beverage franchises, offering opportunities to partner with globally recognized brands that prioritize quality and innovation.</p>
            
            <ul class="list-unstyled">
                <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i>Restaurants and Quick-Service Restaurants (QSRs)
                </p>
                <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i>Cafes, Lounges, and Microbreweries
                </p>
                <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i>Bakery, Sweets, and Ice Cream Franchises
                </p>
                <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i>FMCG Brands
                </p>
                <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i>Dark Stores and Food Delivery Services
                </p>
            </ul>
            </div>
        </div>
        </div>


        <!-- Health and Wellness Card -->
    <div class="col-lg-4">
    <div class="opportunity-card shadow border-1"style="min-height:400px;">
        <div class="opportunity-card-body">
        <h3 class="opportunity-card-title">Health and Wellness</h3>
        <p class="opportunity-card-text">Health-focused franchises are thriving in the UAE, and the Global Franchise Forum highlights investment opportunities in this growing sector. These ventures promise immediate returns and long-term growth.</p>
        <ul class="list-unstyled">
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Hospitals, Clinics, and At-Home Care Services
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Gyms, Ayurveda, and Retreat Centers
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Skin Aesthetics Clinics
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Pharmaceuticals and Medical Stores
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Nutrition and Food Supplement Retailers
            </p>
        </ul>
        </div>
    </div>
    </div>

    <!-- Salon and Beauty Card -->
    <div class="col-lg-4">
    <div class="opportunity-card shadow border-1"style="min-height:400px;">
        <div class="opportunity-card-body">
        <h3 class="opportunity-card-title">Salon and Beauty</h3>
        <p class="opportunity-card-text">The beauty industry continues to expand, and the Global Franchise Forum presents exciting prospects for investment in leading beauty and salon franchises.</p>
        <ul class="list-unstyled">
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>High-End Makeup Studios
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Nail and Lash Art Studios
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Advanced Skincare Clinics
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Cosmetics and Beauty Product Retailers
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Massage Therapy and Spa Services
            </p>
            <p class="text-primary h6 mb-3">
            <i class="fa fa-check-circle text-secondary me-2"></i>Mobile and At-Home Salon Solutions
            </p>
        </ul>
        </div>
    </div>
    </div>
</div>

    <!-- Event Highlights Card 
    <div class="col-lg-6">
      <div class="opportunity-card shadow border-1">
        <div class="opportunity-card-body">
          <h3 class="opportunity-card-title">Event Highlights</h3>
          <ul class="list-unstyled">
          <p class="text-primary h6 mb-3">
                    <i class="fa fa-check-circle text-secondary me-2"></i> Showcase of Top Master Franchise Brands
                  </p>
                  <p class="text-primary h6 mb-3">
                    <i class="fa fa-check-circle text-secondary me-2"></i> Networking with Industry Leaders

                  </p>
                  <p class="text-primary h6 mb-3">
                    <i class="fa fa-check-circle text-secondary me-2"></i> In-Depth Market Research and Insights
                  </p>
          </ul>
        </div>
      </div>
    </div>-->
  </div>
</div>
<div class="container py-5">
      <div class="row g-5">
        <div class="col-12 wow fadeInRight" data-wow-delay="0.3s">
          <div
            class="section-title text-center wow fadeInUp"
            data-wow-delay="0.1s"
            style="margin-bottom: 70px"
          >
           
            <h1 class="display-6 mb-4">Event Highlights</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center mb-4">
            <div class="col " style="max-width: 500px;">
              <div class="card h-100 shadow border-2" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Showcase of Top Master Franchise Brands</h5>
                  <!--<p class="text-center">Showcase of Top Master Franchise Brands</p>-->
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100 shadow border-2" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Networking with Industry Leaders</h5>
                  <!--<p class="text-center">
                    High-net-worth individuals (HNIs), ultra-high-net-worth individuals, and prominent business houses.
                  </p>-->
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100 shadow border-2" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">In-Depth Market Research and Insights</h5>
                  <!--<p class="text-center">
                    Global franchise consultants and leaders in the franchising ecosystem.
                  </p>-->
                </div>
              </div>
            </div>
        </div>      
      </div>
    </div>
</div>

<div class="container-fluid contact overflow-hidden py-5">
      <div class="container py-5">
        <div class="row g-5 mb-5" >
          <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
            <img
                src="img/GFF EVent Middle East.png"
                class="img-fluid w-100"
                style="margin-bottom: -7px"
                alt="Image"
              />

          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
            <div class="sub-style">
              <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
            </div>
            <h1 class="display-5 mb-4">Send Us a Message.</h1>
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
                <label for="name">Your Name*</label>
            </div>
        </div>

        <!-- Email Field -->
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
                <label for="email">Your Email*</label>
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
                    placeholder="Phone Number"
                    required
                />
                <label for="phone">Your Phone Number*</label>
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
                <label for="city">City*</label>
            </div>
        </div>

        <!-- What Are You Looking For? -->
        <div class="col-12">
            <label class="mb-2" style="font-weight: bold;">What are you looking for?*</label>
            <div class="form-floating">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="looking_for"
                        id="investment"
                        value="investment"
                        required
                    />
                    <label class="form-check-label" for="investment">
                        Investment
                    </label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="looking_for"
                        id="expanding_business"
                        value="expanding_business"
                        required
                    />
                    <label class="form-check-label" for="expanding_business">
                        Expanding Your Business
                    </label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="looking_for"
                        id="other"
                        value="other"
                        required
                    />
                    <label class="form-check-label" for="other">
                        Other
                    </label>
                </div>
            </div>
        </div>

        <!-- Investment Range -->
        <div class="col-12">
            <div class="form-floating">
                <select
                    class="form-control"
                    id="investment_range"
                    name="investment_range"
                    style="background-color: white;"
                >
                    <option value="" disabled selected>-- Select Investment Range --</option>
                    <option value="2-20k-3-30k">2,20,000 AED - 3,30,000 AED</option>
                    <option value="3-30k-above">3,30,000 AED - Above</option>
                </select>
                <label for="investment_range" style="color:black; font-size: 1.2rem;">Investment Range</label>
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
                    style="height: 100px"
                    required
                ></textarea>
                <label for="details">Details</label>
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

 <!-- FAQ Start -->
 <!-- FAQ Start -->
<div class="container-fluid faq-section">
  <div class="container py-5">
    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="sub-style">
        <h5 class="sub-title text-primary px-3">FAQ</h5>
      </div>
      <h1 class="display-5 mb-4">Frequently Asked Questions</h1>

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
                What are the event timings?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Event timings will be announced closer to the event date, providing attendees ample time to plan and schedule accordingly.
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
                What industries can be explored at the Qatar Franchise Show by Global Franchise Forum?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                The Qatar Franchise Show offers opportunities across a wide range of sectors, including food and beverage, health and wellness, fitness, salon and beauty, and education.
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
                What is the investment range?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Investment opportunities at the event cater to a broad spectrum of budgets, ranging from mid-level to high-end segments, depending on the selected brand and sector.
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
                How do I start or own a franchise business?
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                The process of starting or owning a franchise involves selecting a franchise, reviewing the franchise agreement, securing necessary investments, and undergoing brand-specific training. Expert guidance will be provided at the Global Franchise Forum.
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
                Can I send a replacement delegate if I cannot attend?
              </button>
            </h2>
            <div
              id="collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="headingFive"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Yes, if you're unable to attend, you can send a replacement delegate. Please notify the event organizers in advance to make necessary arrangements. The Qatar Franchise Show 2025 by Global Franchise Forum will open the door to incredible opportunities in the Middle East's franchising landscape, helping you take your business to the next level!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FAQ End -->







  

    


   




   

    <!-- Training End -->

    <?php include ('footer.php'); ?>