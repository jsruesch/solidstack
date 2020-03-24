
<!-- Change NavLink for Current Page -->
<?php $current_page = 'home'; ?>

<!-- Header -->
<?php include('./inc/header.php') ?>

<!-- Hero -->
    <section>


            <div class="full bg-white relative hero">
                <div class="bgs"></div>
               

                <div class="full grid-vertical-align-content">
                    <div class="hero-title-container">
                    <p class="hero-title">
                    Build Solid <br />
                    Architecture <br /> 
                    in Unity</p>
            
                    <p class="hero-subtitle">Re-usable, solid architecture components for <span class="text-teal text-exbold">Unity</span> and <span class="text-teal text-exbold">C#</span></p>
                </div>                        
                </div>

            </div>
        </section><!-- END: Hero -->

<!-- Main Content -->
    <div class="wrapper relative bg-white">
        <div class="bgs-outline-dark"></div>
        <div class="wrapper-content relative">

        <!-- Components -->
            <section class="pad60">
            <!-- Section Header -->
                <div class="full mar30-bot">
                    <p class="section-header text-ddblue text-center">SolidStack <span class="text-teal text-exbold">Components</span></p>
                </div>
            <!-- Product Card Grid -->
                <div class="full grid-2col ggap-20">
                    <?php include('./inc/product-cards/pc-http.php') ?>
                    <?php include('./inc/product-cards/pc-rest.php') ?>
                    <?php include('./inc/product-cards/pc-coroutines.php') ?>
                    <?php include('./inc/product-cards/pc-ioc.php') ?>
                    <?php include('./inc/product-cards/pc-mvc.php') ?>
                    <?php include('./inc/product-cards/pc-logging.php') ?>
                    <?php include('./inc/product-cards/pc-websockets.php') ?>
                    <?php include('./inc/product-cards/pc-localization.php') ?>
                </div><!-- END: Product Card Grid -->
            </section><!-- END: Components -->

        </div><!-- CLOSE .wrapper-content -->
    </div><!-- END: Main Content / CLOSE: .wrapper -->

    <!-- Architecture -->
        <section class="wrapper bg-mblue pad30">
            <div class="wrapper-content">
            <!-- Section Header -->
                <div class="full">
                    <h1 class="text-white text-center">Architecture</h1>
                </div>
            </div><!-- CLOSE .wrapper-content -->
        </section><!-- Architecture -->

    <!-- Applications -->
        <section class="wrapper bg-teal pad30">
            <div class="wrapper-content">
            <!-- Section Header -->
                <div class="full">
                    <h1 class="text-white text-center">Applications</h1>
                </div>
            </div>
        </section><!-- END: Applications -->

    <!-- Contribute -->
        <section class="wrapper bg-dblue pad30">
            <div class="wrapper-content">
            <!-- Section Header -->
                <div class="full">
                    <h1 class="text-white text-center">Contribute</h1>
                </div>    
            </div>            
        </section><!-- END: Contribute -->

<!-- Footer -->
<?php include('./inc/footer.php') ?> 