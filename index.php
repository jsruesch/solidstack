
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
    <div class="wrapper relative bg-ddblue">
        <div class="bgs-outline"></div>
        <div class="wrapper-content relative">

        <!-- Components -->
            <section class="pad60">
            <!-- Section Header -->
                <div class="full mar30-bot">
                    <p class="section-header text-white text-center">SolidStack <span class="text-teal text-exbold">Components</span></p>
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
        <section class="wrapper bg-grad-white-pink">
            <div class="wrapper-content">
            <!-- Section Header -->
                <div class="full grid-2col div grid-vertical-align-content pad60">
                    <div class="full pad60">
                        <img src="img/graphic-architecture.svg" alt="" class="grid-image">
                    </div>
                    <div class="full pad60">
                    <p class="section-subheader text-pink mar10-bot">Enable Test-Driven Architecture</span></p>
                    <p class="text-ddblue text-bold">Unit testing games is hard. SolidStack components are built with dependency injection and interface segregation in mind, and help streamling test-driven development for your project. </p>
                    </div>
                   
                </div>
            </div><!-- CLOSE .wrapper-content -->
        </section><!-- Architecture -->

    <!-- Applications -->
        <section class="wrapper relative">
            <div class="bgs-outline-dark"></div>
            <div class="wrapper-content relative">
            <!-- Section Header -->
                <div class="full grid-2col div grid-vertical-align-content pad60">
                    <div class="full pad60">
                    <p class="section-subheader text-teal mar10-bot">Build Asynchronous Unity Applications</span></p>
                    <p class="text-ddblue text-bold">Use full power of C# Tasks in Unity, with async/await syntax, progress tracking and cancellation tokens. Forget about coroutine-flavored callback hell.</p>
                    </div>
                    <div class="full pad60">
                        <img src="img/graphic-applications.svg" alt="" class="grid-image">
                    </div>
                </div>
            </div><!-- CLOSE .wrapper-content -->
        </section><!-- Applications -->

    <!-- Contribute -->
        <section class="wrapper bg-ddblue">
            <div class="wrapper-content">
            <!-- Section Header -->
                <div class="full center-callout pad60">
                    <div class="center-callout-content">
                        <div class="full mar10-bot">
                            <p class="section-header text-white text-center"><span class="text-exbold">Contribute</span></p>
                        </div>
                        <div class="full mar20-bot">
                            <p class="section-subheader text-teal text-center mar10-bot">Become part of the SolidStack community!</span></p>
                            <p class="text-mblue text-center text-bold">Our Community is growing! Become part of the OpenSource community. Check out our components on GitHub</p>
                        </div>
                        <div class="full flex-center">
                        <a href="#0" class="btn-b">
                            <p class="">
                                Get Started
                            </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </section><!-- END: Contribute -->

<!-- Footer -->
<?php include('./inc/footer.php') ?> 