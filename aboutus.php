<!-- Head Includes -->
<?php require_once('./private/initialize.php'); ?>
<?php include('includes/functions-include.php'); ?>
<?php include('includes/header-includes.php'); ?>
 

  <body id="aboutus">

    <!-- Navigation -->
    <?php include('includes/nav.php'); ?>

     <!-- Header Fold -->
    <header class = "head-container">
      <div class="container">
      <?php $isMain = true; ?>
      <?php include('breadcrumbs.php'); ?>
        <div class = "aboutus-content-container">
           <h1 class="font-italic">About Us</h1>
            <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
							<div class="card-image">
								<a href="corporate-profile.php"> 
									<img class="img" src="images/about-us/main-office.jpg">
								</a>
                            </div>
							<div class="card-body">
                                <h4 class="card-title text-center">
                                    Our Corporate Profile
                                </h4>
                                <div class="card-description font-italic">
                                    Established in 1991 with a workforce of nearly 20 employees.
                                </div>
                            </div>
                            <a href="corporate-profile.php" class="btn btn-orange btn-round">Continue Reading </a> 
						</div>
                        <div class="card" data-background="image" style="background-image: url('images/about-us/sales-person.jpg')">
							<div class="card-body">
								<a data-toggle="modal" data-target="#request-quote-modal">
									<h3 class="card-title">Request a Quote Now!</h3>
								</a>
								<p class="card-description">
                                        Our expert sales team will arrange everything for you.
								</p>
                            </div>
                            <a class="btn btn-round btn-brown" data-toggle="modal" data-target="#request-quote-modal">Let's Get Started</a>
                        </div>
                        <div class="card bg-orange"> 
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="health-and-safety.php">
                                        <h3><i class="fa fa-medkit mr-1"></i>Health and Safety</h3>
                                    </a>
                                </div> 
                                <div class="clearfix"></div>
                                <p class="card-description">
                                    "For PROFILES RH, good corporate citizenship begins with putting the safety of our people first. Safety is our number one core value and our corporation’s top priority."
                                </p>
                            </div>
                            <a href="health-and-safety.php" class="btn btn-round btn-green">Learn more </a>
                        </div>
                        <div class="card" data-background="image" style="background-image: url('images/about-us/recycle.jpg')">
							<div class="card-body">
								<a href="environment-energy.php">
									<h3 class="card-title">Environment Energy</h3>
								</a>
								<p class="card-description">
                                        We live in an environment shared by many and, as such, we have a great responsibility towards the natural world and its ecological future.
								</p>
                            </div>
                            <a href="environment-energy.php" class="btn btn-round btn-orange">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card bg-orange">
                            <div class="card-body">
                                <div class="clearfix"></div>
                                <a data-toggle="modal" data-target="#messageModal">
                                    <p class="card-description white font-italic">
                                        "PROFILES RH, has set high standards for itself, paving the way for responsible quality control and assurance.  PROFILES RH has maintained building personal relationships with all its clients, a standard practice inherent within the organisation..."
                                    </p>
                                    <div class = "text-right mb-3">
                                        <span><i class="fa fa-envelope logo mr-1"></i>Message From the Managing Director</span>
                                    </div>
                                </a>
                            </div> 
                            <a class="btn btn-round btn-green" data-toggle="modal" data-target="#messageModal">Continue reading</a>
                        </div>
                        <div class="card">
                                <div class="card-image">
                                    <a href="our-people.php"><img class="img lazy" data-src="images/about-us/company-people.jpg"></a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title text-center">
                                        Our People
                                    </h4>
                                    <div class="card-description font-italic">
                                            Our people embody the success of our company.
                                    </div>
                                </div>
                                <a href="our-people.php" class="btn btn-round btn-orange">Learn more</a>
                            </div>
                            <div class="card">
                                    <div class="card-image">
                                        <a href="work-action.php">
                                            <img class="img lazy" data-src="images/about-us/aboutus-steel.jpg">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">
                                                Work in Action
                                        </h4>
                                        <div class="card-description">
                                                Steel and aluminum are among the most widely used metals as well as most recycled material on earth.
                                        </div>
                                    </div>
                                    <a href="work-action.php" class="btn btn-round btn-brown">Learn More</a>
                                 </div>
                                 <div class="card" data-background="image" style="background-image: url('images/about-us/certification.jpg');background-position: top center;">
                                    <div class="card-body">
                                        <a href="certificates.php">
                                            <h3 class="card-title">PROFILES RH Factory LLC Certifications</h3>
                                        </a>
                                    </div>
                                    <a href="certificates.php" class="btn btn-round btn-green">Learn More</a>
                                </div>
                        </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="corporate-governance.php">
                                    <img class=" lazy" data-src="images/about-us/corporate-governance.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">
                                    Corporate Governance
                                </h4>
                                <div class="card-description">
                                        A chief cornerstone of corporate governance is excellence in the methods leaders use to conduct their team.
                                </div>
                            </div>
                            <a href="corporate-governance.php" class="btn btn-round btn-orange">Learn more</a>
                        </div>
                        <div class="card" data-background="image" style="background-image: url('images/about-us/diversity-inclusion.jpg')">
							<div class="card-body">
								<a href="diversity-inclusion.php">
									<h3 class="card-title">Diversity And Inclusion</h3>
								</a>
								<p class="card-description">
                                        Our company’s long history of success confirms that leaders in their industry play to their strengths.  At PROFILES RH, our greatest strength is our people.
								</p>
                            </div>
                            <a href="diversity-inclusion.php" class="btn btn-round btn-green">Learn more</a>
                        </div>
                    <div class="card" data-background="image" style="background-image: url('images/about-us/project-management.jpg')">
                        <div class="card-body">
                            <a href="project-management.php">
                                <h3 class="card-title">Project Management</h3>
                            </a>
                            <p class="card-description">
                                    PROFILES RH shall, in tendering for contracts, review all project (particularly the HSE plan) in accordance with the company’s contract review procedures.
                            </p>
                        </div>
                        <a href="project-management.php" class="btn btn-round btn-orange">Learn more</a>
                    </div>
                </div>
            </div>
      </div>
    </header>
  
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

    <!-- Javascript Includes -->
    <?php include('includes/footer-includes.php'); ?>

  </body>

</html>
