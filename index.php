
<!-- Head Includes -->
<?php require_once('./private/initialize.php'); ?>
<?php include('includes/functions-include.php'); ?>
<?php $unite = true; ?>
<?php include('includes/header-includes.php'); ?>


  <?php $image_path_sets = find_all_image_path("index");?>
  <body id="page-top">

    <!-- Navigation -->
    <?php include('includes/nav.php'); ?>

     <!-- Header Fold -->
    <header class="foldhead">
      <div class="container">
        <div class = "row">
          <div class = "col-lg-6 col-md-10 col-sm-12 col-xs-12">
            <div class = "foldhead-container">
                <h1 class="font-italic">We Got You Covered</h1>
                <p>The fastest growing, pre-engineered building systems and components manufacturer in United Arab Emirates, Our <a class="anchor-content" href="products.php">products</a> are the best you can find in the United Arab Emirates market such as Profile Sheets, Panels, Cold Storage, Refrigerated Trucks, Skid Mounted Containers and Various Structural Members thriving not only in the United Arab Emirates market, but also in the Middle East. <a class="anchor-content" href="aboutus.php">Learn more about us</a></p>
                <a id="btn-index-request-quote" class="btn btn-request-quote btn-peach"><i class="fa fa-file-alt"></i>Request a Quote</a>
            </div>
          </div>
          <div class = "col-md-12">
              <div id="gallery" style="display:none;">
                <?php while($image_path = mysqli_fetch_assoc($image_path_sets)) { ?>
                  <a href="#">
                  <img class="lazy" alt="<?php echo rdecode($image_path['name']); ?>"
                       data-src="<?php echo rdecode($image_path['thumb_path']); ?>"
                       data-image="<?php echo rdecode($image_path['path']); ?>"
                       data-description="<?php echo rdecode($image_path['name']); ?>"
                       style="display:none">
                  </a>
                <?php } ?>
          </div>

          <?php mysqli_free_result($image_path_sets); ?>

          <?php db_close($db); ?>
            <div class="url-btn">
              <a href="projects.php#c-1" class="mt-3" target="_blank"><i class="fa fa-building"></i> See more accomplished projects </a>
            </div>
        </div>
      </div>
    </header>
    <!--Custom Adde Fold s1-1 -->
    <section id="s1-1" style="background-color: rgba(173,100,52, 0.2);">
      <h2 class="text-center font-italic">PROFILES RH CATALOGUES</h2>
      <div class = "container">
        <div class = "row">
          <div class="col-md-3">
            <div class="card-container first-card">
                <div class="card-component">
                    <a href="images/catalogue/documents/Cladding.pdf" target="_blank">
                        <div class="front">
                            <h3 class="text-center d-label">CLADDING</h2>
                            <img class="lazy" data-src="images/catalogue/cladding/01.jpg" alt="Cladding Catalogue"> 
                            <h3 class="text-center m-label">CLADDING</h2>
                            <sub class="text-center m-label">(View Catalogue)</sub>
                        </div>
                    </a>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-container second-card">
                <div class="card-component">
                    <a href="images/catalogue/documents/PreEngineeredBuilding.pdf" target="_blank">
                        <div class="front">
                            <h3 class="text-center d-label">PRE ENGINEERED BUILDING</h2>
                            <img class="lazy" data-src="images/catalogue/peb/01.jpg" alt="Pre-Engineered Building System and Components Catalogue.">
                            <h3 class="text-center m-label">PRE ENGINEERED BUILDING</h2>
                            <sub class="text-center m-label">(View Catalogue)</sub>
                        </div>
                    </a>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-container third-card">
                <div class="card-component">
                    <a href="images/catalogue/documents/Coldroom.pdf" target="_blank">
                        <div class="front">
                            <h3 class="text-center d-label">COLDROOM</h2>
                            <img class="lazy" data-src="images/catalogue/coldroom/01.jpg" alt="Coldroom Catalogue">
                            <h3 class="text-center m-label">COLDROOM</h2>
                            <sub class="text-center m-label">(View Catalogue)</sub>
                        </div>
                    </a>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-container fourth-card">
                <div class="card-component">
                    <a href="images/catalogue/documents/RollingMill.pdf" target="_blank">
                        <div class="front">
                            <h3 class="text-center d-label">ROLLING MILL</h2>
                            <img class="lazy" data-src="images/catalogue/rolling-mill/01.jpg" alt="Rolling Mill catalogue">
                            <h3 class="text-center m-label">ROLLING MILL</h2>
                            <sub class="text-center m-label">(View Catalogue)</sub>
                        </div>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fold 2 -->
    <section id="s1" style="background-color:#f1f1f1;">
      <div class = "container">
          <h2 class="text-center">Engineering Practices</h2>
        <div class = "row">
          <div class ="col-sm-12">
              <h3>Design Responsibility</h3>
              <p>It is the responsibility of PROFILES RH, to design the pre-engineered building to meet 
              the specifications including the design criteria and  design loads incorporated by the 
              client into the contract document.  PROFILES RH, is not responsible for making an 
              independent  determination of any local codes or any other requirements which 
              is not part of the contract documents.</p>

              <p>PROFILES RH, is not responsible for the design of any components or  materials not
              sold by them or their interface in connection with the Pre-Engineered Building Systems 
              unless such design responsibility is specifically required by the contract documents.</p>

              <p>In the event of discrepancy between the plans and specifications for the Pre-Engineered 
              Building Systems, the specifications govern. In the event of discrepancy between scaled 
              dimensions and numerical dimensions on the plans, included as part of the contract  
              documents, the numerical dimension governs.</p>
          </div>
        </div>
        <div class = "row">
            <div class ="col-sm-12 col-xs-12">
                <h3>Structured Design Codes</h3>
                <p>PROFILES RH, uses the following codes for analysis, design and fabrication of its pre-engineered buildings and components.</p>
                <ol>
                  <li>A.I.S.C. - "American Institute of Steel Construction" - Manual of Steel Construction 1989 and edition and its revisions. This manual is used for the design for all built up sections, hot-rolled sections and welded plates.</li>
                  <li>A.I.S.I. - "American Iron and Steel Institute" - Specifications for the design of cold formed steel structural members - 1996 Edition and its revisions. This manual is used for all welding specifications and procedures.</li>
                  <li>A.W.S. - "American Welding Society Manual" 2006 Edition. This manual used for all welding specifications and procedures.</li>
                  <li> M.B.M.A. - "Metal Building Manufacturers Association" manual 1996 Edition / 2002 Edition Metal Building Dealers Association. This manual is used for all loading conditions, fabrication tolerances and is considered as a guideline for pre-engineered buildings.</li>
                </ol>
                <p>Its PROFILES RH's policy to adhere to all latest updates of the above code. Apart from the above mentioned codes, PROFILES RH, is capable of designing the structures in accordance with B.S. 5950 and B.S. 449. For concrete design and related subjects, PROFILES RH, follows B.S. 8110 as the design code.</p>
            </div>
      </div>
      <div class = "row">
          <div class ="col-sm-12">
            <h3>Building Design Certification</h3>
            <p>Upon the request of the client, PROFILES RH, will provide a letter of certification towards the integrity of the design. The Engineering Manager and the Managing Director will duly authorize this letter.</p>
          </div>
        </div>
    </section>

    <!-- Fold 3 -->
    <section id="s2">
     <div class = "container">
       <h2 class="text-center">Standard Building Systems</h2>
       <div class = "row">
          <div class = "col-sm-12 col-md-12">
            <p>This section gives guidelines on the most commonly used structural frames by PROFILES RH. These are considered to be the most economical designs and cater to a wide variety of usages.</p>
            <p>For each type of frame (section 3.2 to 3.7), a load table is given showing the clearance and reactions. This is a very handy data for the preliminary design of foundations and pedestals. Section - 3.8 to 3.10 is load table for canopies generally used for parking bays.</p>
            <p class="font-weight-bold">For special conditions PROFILES RH can provide the designer/consultant with data required for preliminary designs.</p>
          </div>
       </div>
       <div class = "row">
         <div class = "col-md-4 col-sm-12 col-xs-12">
           <div class = "custom-box">
              <img class="lazy" data-src="images/design-loads.svg" alt="Design Load description">
              <p class="custom-box-title">Design Loads</p>
              <p>Design loads considered are live load of 0.57Kn/m and wind load 130km/hr. These are the loading required by most of the local bodies in Middle East.</p>
           </div>
         </div>
         <div class = "col-md-4 col-sm-12 col-xs-12">
            <div class = "custom-box">
               <img class="lazy" data-src="images/bay-spacing.svg" alt="Bay Spacing description">
               <p class="custom-box-title">Bay Spacing</p>
               <p>Bay spacing is considered as 7.5meters from the point of view of economy. Spacing as wide as 12 meters and as low as 4meters can be accommodated but will be at the overall increase in cost.</p>
            </div>
          </div>
          <div class = "col-md-4 col-sm-12 col-xs-12">
              <div class = "custom-box">
                 <img class="lazy" data-src="images/eave-height.svg" alt="Eave Height description">
                 <p class="custom-box-title">Eave Height</p>
                 <p>Eave heights of 4meters, 6meters and 8meters are considered in this section. These are the height requirement for most of the structures. However heights up to 16 meters can be produced by PROFILES RH.</p>
              </div>
            </div>
       </div>
     </div>
    </section>

     <!-- Fold 4 -->
     <section id="s3" style="background-color:#eeeeee;">
       <div class = "container">
         <div class = "row">
           <div class = "col-md-4 col-sm-12">
             <h2 class="font-italic">Quality <br/> Policy <br/> Statement</h2>
             <p><b>PROFILES RH</b> shall provide products and services that meet or exceed the expectations of our interested parties.</p>
             <p>This is achieved by implementing the Quality Management System conforming to ISO 9001:2015 and applicable standards including applicable statutory and regulatory requirements.</p>
           </div>
           <div class = "col-md-8 col-sm-12">
             <p class="font-italic" style="font-family:Lato; font-size: 1.2em;">We are committed to a Quality Management System that supports and encourages:</p>
             <ul class=font-weight-bold>
               <li>Product Quality, delivery and service</li>
               <li>Customer loyalty and satisfaction</li>
               <li>Continual improvement</li>
             </ul>
             <p>We shall endeavor to pay careful attention to every quality detail. The quality of our products and services and their conformance with applicable standards shall be our primary concern.</p>
             <p>This policy shall be communicated to all our employees, is available to the general public and will be periodically reviewed to ensure its continued suitability to our organization.</p>
           </div>
         </div>
       </div>
     </section>

     <!-- Fold 5 -->
     <section id="s4">
       <div class = "container">
         <div class = "row">
           <div class = "col-md-6 col-sm-12">
             <div class = "request-quote-tag">
                <p class="content"><strong><i>SERVICE</i></strong> is delivering a <strong><i>QUALITY</i></strong> product on time, engineered and fabricated to exacting standards.</p> 
                <p class="content"><strong><i>SERVICE</i></strong> is providing clients with competitive prices for buildings with liners, patiotions, fascia, canopies, and so much more. In a matter of minutes! </p>
             </div>
           </div>
           <div class = "col-md-6 col-sm-12">
              <?php include('includes/request-quote.php'); ?>
           </div>
         </div>
       </div>
     </section>
 
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    
    <!-- Javascript Includes -->
    <?php include('includes/footer-includes.php'); ?>

    <!-- Custom Includes -->
    <script defer src="vendor/unite-gallery/js/unitegallery.min.js" type="text/javascript"></script>
    <script defer src="vendor/unite-gallery/js/ug-theme-carousel.js" type="text/javascript"></script>
    <script defer src="js/initUniteGallery.min.js"></script>
  </body>

</html>
