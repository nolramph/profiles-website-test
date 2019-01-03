<!-- Head Includes -->
<?php require_once('./private/initialize.php'); ?>
<?php include('includes/functions-include.php'); ?>
<?php include('includes/header-includes.php'); ?>
<?php
$projects_result = find_all_projects_data();

$projects = mysqli_fetch_all($projects_result, MYSQLI_ASSOC);
$projects_arr = array();

foreach($projects as $projects_detailed){
    $projects_arr[$projects_detailed["name"]][]= array("imagepath_name" => $projects_detailed["imagepath_name"], "path" => $projects_detailed["path"], "thumb_path" => $projects_detailed["thumb_path"],"image_id" => $projects_detailed["imagepath_id"]);

}

?>

  <body id="projects">

    <!-- Navigation -->
    <?php include('includes/nav.php'); ?>
    <header class="projecthead"> <div class="container"> 
        <div class="row"> 
            <div class="col-md-6 col-sm-12 col-xs-12"><div class="foldhead-container content"><p>PROFILES RH Turnkey Division can take up warehouse and factory constructions all over the United Arab Emirates.</p><p>Our projects include warehouses, convention halls, supermarkets, commercial showrooms, office buildings, warehouses, factories, sports halls, workshops, labor camps, distribution center, aircraft hangars, restaurants and schools. The time and craftsmanship that PROFILES RH gives each of these projects are reflected by the quality of the structures that we supply.</p></div></div><div class="col-md-6 col-sm-12 col-xs-12"> <div class="foldhead-container image"> <div class="photo-content"> <img src="images/projects/5-p2.jpg" alt="Dubai Tech. & Media Free zone (TECOM)"/> <p class="font-weight-bold">Dubai Tech. & <br>Media Free zone (TECOM)</p><p>Masar Printing and <br>Publishing Facility.</p></div><div class="photo-content"> <img src="images/projects/5-p3.jpg" alt="Visen Polymers FZE"/> <p class="font-weight-bold">Visen Polymers FZE</p><p>Proposed Factory in <br>Hamriyah Free Zone, Sharjah.</p></div><div class="photo-content"> <img src="images/projects/5-p5.jpg" alt="Tyser Arar Trading Co. LLC"/> <p class="font-weight-bold">Tyser Arar Trading <br>Co. LLC</p><p>Factory Shed in <br>Dubai Investment Park.</p></div><div class="photo-content"> <img src="images/projects/5-p4.jpg" alt="Visen Polymers FZE"/> <p class="font-weight-bold">Bel Ramaitha Sports Club</p><p>Sports Hall in <br>Rashidiya, Dubai.</p></div></div></div></div></div></header> 
    <section id="c-1"> 
    <h2 class="text-center">Projects Gallery</h2>
        <div class="container">
        <?php foreach($projects_arr as $key => $project_category){ ?>
            <h4 class="text-center mb-3"><?php echo $key; ?></h4>
            <div class = "row mb-5">
            <?php foreach($project_category as $key => $projects_detail){ ?>
                <div class = "col col-custom col-xs-12">
                    <img class = "lazy"
                    data-src="<?php echo $projects_detail["path"]; ?>" 
                    data-pic-title="<?php echo $projects_detail["imagepath_name"]; ?>"
                    data-pic="<?php echo $projects_detail["thumb_path"]; ?>"
                    alt="<?php echo $projects_detail["imagepath_name"]; ?>"
                    />
                    <div class = "p-cover" style="background-color:#FFF">
                        <p><?php echo $projects_detail["imagepath_name"]; ?></p>
                    </div>
                </div>
            <?php } ?>  
            </div>
        <?php } ?>
        </div>
    </section>  

    <?php mysqli_free_result($projects_result); ?>

    <?php db_close($db); ?>
     <!-- Fold 5 -->
     <section id="s4" class="projects">
       <div class = "container">
         <div class = "row">
           <div class = "col-md-6 col-sm-12"></div>
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
    <script defer src="js/imgPreview.min.js"></script>
    <script>
        $(() => $.imgPreview());
    </script>


  </body>

</html>
