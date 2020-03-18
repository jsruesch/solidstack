<div class="wrapper">
   <div class="wrapper-content">

<!-- Desktop Nav -->
   <div class="navigation-container">
      <div class="navigation-content">

         <div class="nav-link-container right">
            <?php include('nav-links.php') ?>
         </div>

         <div class="nav-link-mobile-container">
            <!-- Menu Toggle Button -->
            <div class="menu-toggle">
               <div class="hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
               <div class="cross">
                  <span></span>
                  <span></span>
               </div>
            </div><!-- END: Menu Toggle Button -->
         </div>
      </div><!-- CLOSE: .navigation-content -->
   </div><!-- END: Desktop Nav -->

    <!-- Mobile Navigation -->
    <div class="mobile-nav-container">
      <div class="mobile-navigtation-links-container grid-vertical-align-content">
         <?php include('nav-links.php') ?>
      </div>
   </div> <!-- END: Mobile Navigation -->
   
   <div class="divider-main"></div>
   
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

