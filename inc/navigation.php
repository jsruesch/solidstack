<div class="wrapper nav">
   <div class="wrapper-content">

   <!-- Desktop Nav -->
      <div class="navigation-container">
         <div class="navigation-content">
            <a href="index.php"><div class="nav-logo-desktop"></div></a>
         
         <!-- Desktop Nav Links -->
            <div class="nav-link-container">
               <?php include('nav-links.php') ?>
            </div>

         <!-- Mobile Nav Button Container -->
            <div class="nav-link-mobile-container">
               <!-- Menu Toggle Button -->
               <div class="menu-toggle">
                  <div class="hamburger">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div><!-- CLOSE .menu-toggle -->
            </div><!-- END: Mobile Nav Button Container -->
         </div><!-- CLOSE: .navigation-content -->
      </div><!-- END: Desktop Nav -->

   <!-- Mobile Navigation -->
      <div class="mobile-nav-container relative">
         <div class="mobile-navigtation-links-container relative">
            <?php include('nav-links-m.php') ?>
         </div>
      </div> <!-- END: Mobile Navigation -->
      
   <!-- Applies Nav Link Styling for Active Page -->
      <script>
         // Add active class to the current button (highlight it)
         var header = document.getElementById("navigation-links");
         var btns = header.getElementsByClassName("navlink");
         for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function() {
         var current = document.getElementsByClassName("navactive");
         if (current.length > 0) { 
            current[0].className = current[0].className.replace(" navactive", "");
         }
         this.className += " navactive";
         });
         }
      </script>
   </div><!-- CLOSE: .wrapper-content -->
</div><!-- CLOSE: .wrapper -->

