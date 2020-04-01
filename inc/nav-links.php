<!-- Nav Links for Desktop -->
   <ul class="navigation-links">
      <li class="navlink">
         <a class="<?= ($current_page == 'why-solidstack') ? 'navactive' : '' ?>" href="#0">
            Why SolidStack
         </a>
      </li>
      
      <li class="navlink">
         <a class="<?= ($current_page == 'docs') ? 'navactive' : '' ?>" href="#0">
            Docs
         </a>
      </li>

   <!-- Products Dropdown -->
      <li class="navlink desktop-dropdown-container">
         <a class="dropdown" href="#">Products</a>
         <div class="desktop-dropdown">      
         <!-- HTTP -->
            <div data-link="product-http.php" class="full product-card http relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <div class="full">
                  <p class="card-title text-white">
                     SolidStack.<span class="text-teal text-exbold">Http</span>
                  </p>
                  </div>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: HTTP -->

         <!-- Rest -->
            <div data-link="product-rest.php" class="full product-card rest relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <p class="card-title text-white">
                  SolidStack.<span class="text-pink text-exbold">Rest</span>
                  </p>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: Rest -->

         <!-- Coroutines -->
            <div data-link="product-coroutines.php" class="full product-card coroutines relative">
               <div class="bgs-outline"></div>  
               <div class="pc-content">
                  <p class="card-title text-white">
                  SolidStack.<span class="text-orange text-exbold">Coroutines</span>
                  </p>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: Coroutines -->

         <!-- Ioc -->
            <div data-link="product-ioc.php" class="full product-card ioc relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <p class="card-title text-white">
                  SolidStack.<span class="text-greena text-exbold">Ioc</span>
                  </p>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: Ioc -->

         <!-- Mvc -->
            <div data-link="product-mvc.php" class="full product-card mvc relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <p class="card-title text-white">
                  SolidStack.<span class="text-yellow text-exbold">Mvc</span>
                  </p>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: Mvc -->

         <!-- Logging -->
            <div data-link="product-logging.php" class="full product-card logging relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <p class="card-title text-white">
                     SolidStack.<span class="text-purple text-exbold">Logging</span>
                  </p>
               </div>
            </div><!-- END: Logging -->

         <!-- Websockets -->
            <div data-link="product-websockets.php" class="full product-card websockets relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <p class="card-title text-white">
                  SolidStack.<span class="text-reda text-exbold">WebSockets</span>
                  </p>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: Websockets -->

         <!-- Localization -->
            <div data-link="product-localization.php" class="full product-card localization relative">
               <div class="bgs-outline"></div>
               <div class="pc-content">
                  <p class="card-title text-white">
                  SolidStack.<span class="text-bluea text-exbold">Localization</span>
                  </p>
               </div><!-- CLOSE: .pc-content -->
            </div><!-- END: Localization -->
         </div><!-- CLOSE: Desktop Dropdown -->
      </li>

      <li class="navlink">
         <a class="<?= ($current_page == 'contribute') ? 'navactive' : '' ?>" href="#0">
            Contribute
         </a>
      </li>

      <li class="navlink">
         <a class="<?= ($current_page == 'contact') ? 'navactive' : '' ?>" href="#0">
            Contact
         </a>
      </li>

      <li class="navlink">
         <a class="<?= ($current_page == 'github') ? 'navactive' : '' ?>" href="#0">
            <i class="fab fa-github"></i>
         </a>
      </li>

   </ul>


