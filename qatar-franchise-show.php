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
        $query = "INSERT INTO qatarevent_form_submissions (name, email, phone, city, looking_for, investment_range, details) 
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
    <!-- Header Start 
    <div class="container-fluid bg-breadcrumb">
      <div class="container text-center py-5" style="max-width: 900px">
        <h3
          class="text-white display-3 mb-4 wow fadeInDown"
          data-wow-delay="0.1s"
        >
         Qatar Event
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
          <li class="breadcrumb-item active text-secondary">Qatar</li>
        </ol>
      </div>
    </div>-->
    <!-- Header End -->

    <!-- About Start -->
     <div class="container-fluid service overflow-hidden ">
      <div class="container py-5">
        <div
          class="section-title text-center  wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="sub-style">
            <h5 class="sub-title text-primary px-3">Qatar Franchise Show</h5>
          </div>

          <h1 class="display-6 mb-4">About the Event</h1>
          <p class="mb-0">
          The Global Franchise Forum is excited to announce the Qatar Franchise Show 2025, scheduled for 11th February. This flagship event serves as a gateway to cross-border franchise opportunities, bringing global brands and visionary investors together in one of the Middle East’s most dynamic markets. Attendees will explore flourishing industries, gain valuable insights from franchise experts, and unlock the immense potential of Qatar’s thriving economy. With a spotlight on innovation, strategic partnerships, and market leadership, the Qatar Franchise Show 2025 by Global Franchise Forum is your exclusive opportunity to redefine success in franchising across the Middle East.</p>
        </div>
      </div>
    </div>

    <!--<div class="container-fluid overflow-hidden ">
      <div class="container py-5">
         <div class="row g-5">
          <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="text-primary rounded" style="color: #f0f5fb">
              <img
                src="img/GFF EVent Qatar.png"
                class="img-fluid w-100"
                style="margin-bottom: -7px"
                alt="Image"
              />
              <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> 
            </div>
          </div>
          <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
             <h5 class="sub-title pe-3">About GFF</h5> 
            <h1 class="display-5 mb-4">About the Event</h1>
            <p class="mb-4">
            The Global Franchise Forum is excited to announce the Qatar Franchise Show 2025, scheduled for 11th February. This flagship event serves as a gateway to cross-border franchise opportunities, bringing global brands and visionary investors together in one of the Middle East’s most dynamic markets. Attendees will explore flourishing industries, gain valuable insights from franchise experts, and unlock the immense potential of Qatar’s thriving economy. With a spotlight on innovation, strategic partnerships, and market leadership, the Qatar Franchise Show 2025 by Global Franchise Forum is your exclusive opportunity to redefine success in franchising across the Middle East.
            </p>
            <div class="row gy-4 align-items-center">
             
             
               <div class="col-4 col-md-3">
                <div class="bg-light text-center rounded p-3">
                  <div class="mb-2">
                    <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                  </div>
                  <h1 class="display-5 fw-bold mb-2">5</h1>
                  <p class="text-muted mb-0">5 Years of Franchise Expertise</p>
                </div>
              </div> 
              <div class="col-8 col-md-9">
               
                <div class="d-flex flex-wrap">
                  <div
                    id="phone-tada"
                    class="d-flex align-items-center justify-content-center me-4"
                  >
                    <a
                      href=""
                      class="position-relative wow tada"
                      data-wow-delay=".9s"
                    >
                      <i class="fa fa-phone-alt text-primary fa-3x"></i> 
                      <div class="position-absolute" style="top: 0; left: 25px">
                         <span
                          ><i class="fa fa-comment-dots text-secondary"></i
                        ></span> 
                      </div>
                    </a>
                  </div>
                   <div class="d-flex flex-column justify-content-center">
                    <span class="text-primary">Need Franchise Assistance?</span>
                    <span
                      class="text-secondary fw-bold fs-5"
                      style="letter-spacing: 2px"
                      >Free: +91 9910120897</span
                    >
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     About End -->
    <!-- Vision and Mission Section Start -->

   
 <!-- about award start-->
 <div class="container py-5">
     
      <div class="row g-5 align-items-center mt-4">
        <!-- Content Section -->
        <div class="col-lg-6">
          <!--<h5 class="mb-3 sub-title text-center text-lg-start pe-3">
          QATAR
          </h5>-->
          <h1 class="display-5 mb-4 text-center text-lg-start">
          A Booming Hub For Franchise Opportunities
          </h1>
         
          <ul class="list-unstyled">
            <li class="mb-3">
              <strong>Population:</strong> Over 3 million, with a growing middle class and affluent consumer base.
            </li>
            <li class="mb-3">
              <strong>Franchise Trends:</strong> High demand for food and beverage, health and wellness, fitness, and education franchises.
            </li>
            <li class="mb-3">
              <strong>Strategic Importance:</strong> Qatar’s post-FIFA 2022 landscape boasts a thriving business and tourism sector.

            </li>
            <li class="mb-3">
              <strong>Retail Sophistication:</strong> Advanced shopping infrastructure featuring world-class malls and business districts.

            </li>
            <li class="mb-3">
              <strong>Established Global Brands:</strong> Market presence of international names like McDonald’s, Subway, and Anytime Fitness.


            </li>
            <li class="mb-3">
              <strong>Diverse Opportunities:</strong> Qatar’s young and health-conscious population creates strong potential for franchises in food, fitness, and education.


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
          What the Event Will Offer
          </h1>
      
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
          <div class="stat-item">
            <!-- <h2 class="dynamic-counter" style="color: white" data-value="10000">
              0
            </h2> -->
            <h4 class="text-white">Direct Access</h4>
            <p>
            Explore global franchise opportunities
            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Market Research</h4>
            <p>
            Insights into the latest industry trends.

            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Personalized Engagements</h4>
            <p>
            Exclusive one-on-one meetings with franchise leaders.
            </p>
          </div>
          <div class="stat-item ">
            <h4 class="text-white">Networking</h4>
            <p>
            Opportunities to connect with high-net-worth individuals (HNIs) and top business houses.
            </p>
          </div>
          <div class="stat-item">
            <h4 class="text-white">Recognition</h4>
            <p>
            Celebrate excellence with the prestigious Global Franchise Forum Awards.

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
           
            <h1 class="display-6 mb-4">Why You Should Attend</h1>
           
          </div>

          <!-- Steps in Cards Displayed in a Responsive Row -->
          <div
            class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center"
          >
            <div class="col">
              <div class="card h-100 " style="min-height: 230px;">
                <div class="card-body text-center">
                <i class="fas fa-chart-line fa-2x text-success mb-3 mt-4"></i>

                  <h5 class="card-title text-center">
                  Market Expansion
                  </h5>
                  <p class="text-center ">
                  Tap into lucrative, emerging markets in the Middle East.
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="min-height: 230px;">
                <div class="card-body text-center">
                <i class="fas fa-users fa-2x text-success mb-3 mt-4"></i>
                  <h5 class="card-title text-center">Investor Connections</h5>
                  <p class="text-center">
                  Build relationships with pre-qualified investors.

                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="min-height: 230px;">
                <div class="card-body text-center">
                <i class="fas fa-globe fa-2x text-success mb-3 mt-4"></i>
                  <h5 class="card-title text-center">GCC Market Exploration</h5>
                  <p class="text-center">
                  Uncover opportunities across Qatar and the GCC region.
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="min-height: 230px;">
                <div class="card-body text-center">
                <i class="fas fa-user-tie fa-2x text-success mb-3 mt-3"></i>

                  <h5 class="card-title text-center">
                  Expert Guidance
                  </h5>
                  <p class="text-center">
                  Learn from global consultants and franchise leaders at the Global Franchise Forum.

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
                  <p class="text-center">
                    Aspiring master franchisees eager to expand their business portfolios.
                  </p>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Key Stakeholders</h5>
                  <p class="text-center">
                    High-net-worth individuals, ultra-high-net-worth individuals, and
                    influential business groups.
                  </p>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">Industry Experts</h5>
                  <p class="text-center">
                    Global franchise consultants and market strategists from across
                    industries.
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
  <div
            class="section-title text-center wow fadeInUp"
            data-wow-delay="0.1s"
            style="margin-bottom: 70px"
          >
           
            <h1 class="display-6 mb-4">Global Franchise Forum Highlights</h1>
           
          </div>
    <div class="row align-items-center">
      <!-- Full Width Cards -->
      <div class="highlights-grid">
        <div class="highlight-card">
          <h2>97+</h2>
          <p>Established Presence: Operates in 97 cities and 9+ international locations.</p>
        </div>
        <div class="highlight-card">
          <h2>10,000+</h2>
          <p>Broad Reach: Collaborates with over 10,000 brands.</p>
        </div>
        <div class="highlight-card">
          <h2>1 Lakh+</h2>
          <p>Proven Success: Facilitated more than 1 lakh successful deals worldwide.</p>
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
        Opportunities at Qatar Franchise Show by Global Franchise Forum
      </h1>
    </div>

    <!-- Food and Beverage Card -->
    <div class="row g-4 d-flex align-items-stretch">
      <div class="col-lg-4">
        <div class="opportunity-card shadow border-1" style="min-height: 400px;">
          <div class="opportunity-card-body">
            <h3 class="opportunity-card-title">Food and Beverage</h3>
            <p class="opportunity-card-text">The Global Franchise Forum emphasizes the lucrative potential of food and beverage franchises. Entrepreneurs can partner with renowned brands that prioritize quality, ensuring success in Qatar’s competitive market.</p>
            <ul class="list-unstyled">
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Restaurants and Quick-Service Restaurants (QSRs)
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Cafes, Lounges, and Microbreweries
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Bakeries, Sweets, and Ice Cream Brands
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> FMCG Companies
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Dark Stores and Food Delivery Services
              </p>
            </ul>
          </div>
        </div>
      </div>

      <!-- Health and Wellness Card -->
      <div class="col-lg-4">
        <div class="opportunity-card shadow border-1" style="min-height: 400px;">
          <div class="opportunity-card-body">
            <h3 class="opportunity-card-title">Health and Wellness</h3>
            <p class="opportunity-card-text">Health-focused franchises offer immediate financial returns and sustainable growth. The Global Franchise Forum highlights opportunities in this booming sector, catering to Qatar’s increasing demand for accessible and high-quality medical and wellness services.</p>
            <ul class="list-unstyled">
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Hospitals, Clinics, and Home Care Providers
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Gyms, Ayurveda Retreats, and Wellness Centers
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Skin Aesthetics Clinics
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Pharmaceuticals and Medical Stores
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Nutrition and Food Supplement Retailers
              </p>
            </ul>
          </div>
        </div>
      </div>

      <!-- Salon and Beauty Card -->
      <div class="col-lg-4">
        <div class="opportunity-card shadow border-1" style="min-height: 400px;">
          <div class="opportunity-card-body">
            <h3 class="opportunity-card-title">Salon and Beauty</h3>
            <p class="opportunity-card-text">The beauty industry is flourishing, and the Global Franchise Forum presents exciting investment opportunities with leading brands in Qatar.</p>
            <ul class="list-unstyled">
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> High-End Makeup Studios
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Nail and Lash Art Boutiques
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Advanced Skincare Clinics
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Cosmetics and Beauty Product Retail Stores
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Massage Therapy Centers
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Spa and Wellness Services
              </p>
              <p class="text-primary h6 mb-3">
                <i class="fa fa-check-circle text-secondary me-2"></i> Mobile and At-Home Salon Solutions
              </p>
            </ul>
          </div>
        </div>
      </div>
    </div>
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
                  <h5 class="card-title text-center">Networking Opportunities with Industry Leaders</h5>
                  <!--<p class="text-center">
                    High-net-worth individuals (HNIs), ultra-high-net-worth individuals, and prominent business houses.
                  </p>-->
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 500px;">
              <div class="card h-100 shadow border-2" style="min-height: 150px;">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                  <h5 class="card-title text-center">In-Depth Market Insights and Research</h5>
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
                src="img/GFF EVent Qatar.png"
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
                  Details of the schedule will be provided closer to the event date, ensuring sufficient time for participants to plan.
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
                  Participants can delve into sectors such as food and beverage, health and wellness, fitness, salon and beauty, and education.
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
                  Investment opportunities cater to diverse budgets, ranging from mid-level to high-end segments, depending on the brand and industry.

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
                  The process involves selecting a franchise, reviewing agreements, securing investments, and attending brand training. Guidance will be available from experts at the Global Franchise Forum.

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
                  Yes, replacement delegates are welcome with prior notification to the event organizers.
                  The Qatar Franchise Show 2025 by Global Franchise Forum is your gateway to unmatched opportunities in the Middle East’s vibrant franchising landscape. Prepare to take your business to the next level!


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