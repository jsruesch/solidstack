
<!-- Change NavLink for Current Page -->
<?php $current_page = 'home'; ?>

<!-- Header -->
<?php include('./inc/header.php') ?>

<!-- Hero -->
    <section>
            <div class="full pad60 bg-dblue">
                <h1 class="text-teal text-center">Build Solid Architecture in Unity</h1>
                <p class="text-white text-center">Re-usable, solid architecture components for <span class="text-teal text-exbold">Unity</span> and <span class="text-teal text-exbold">C#</span></p>
            </div>
        </section><!-- END: Hero -->

<!-- Main Content -->
    <div class="wrapper">
        <div class="wrapper-content">

        <!-- Components -->
            <section class="bg-teal pad30">
            <!-- Section Header -->
                <div class="full mar20-bot">
                    <h1 class="text-white text-center">SolidStack Components</h1>
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

        <!-- Architecture -->
            <section class="bg-mblue pad30">
            <!-- Section Header -->
                <div class="full">
                    <h1 class="text-white text-center">Architecture</h1>
                </div>
            </section><!-- Architecture -->

        <!-- Applications -->
            <section class="bg-teal pad30">
            <!-- Section Header -->
                <div class="full">
                    <h1 class="text-white text-center">Applications</h1>
                </div>
            </section><!-- END: Applications -->

        <!-- Contribute -->
            <section class="bg-dblue pad30">
            <!-- Section Header -->
                <div class="full">
                    <h1 class="text-white text-center">Contribute</h1>
                </div>                
            </section><!-- END: Contribute -->

        </div><!-- CLOSE .wrapper-content -->
    </div><!-- END: Main Content / CLOSE: .wrapper -->

<!-- Footer -->
<?php include('./inc/footer.php') ?> 

