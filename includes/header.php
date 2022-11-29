<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
<?php header('Access-Control-Allow-Origin: *'); ?>
<header>
   <nav role="navigation" class="primary-navigation" id="myTopnav">

      <ul>
         <li><a href=index.php?page=salon>SALON</a></li>
         <!-- <li><a href=index.php?page=soins>SOINS</a></li> -->
         <li><a href=index.php?page=prestation-femme>PRESTATIONS FEMME</a></li>
         <li><a href=index.php?page=prestation-homme>PRESTATIONS HOMME</a></li>
         <li><a href=index.php?page=produits>PRODUITS</a></li>
         <!-- <li><a href=index.php?page=tarifs>TARIFS</a></li> -->
         <li><a href=index.php?page=reservation>RESERVATION</a></li>
         <li><a href=index.php?page=contact>CONTACT</a></li>
         <li><a href=index.php?page=login>LOGIN</a></li>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
         </a>
      </ul>
   </nav>
   <script>
      function myFunction() {
         var x = document.getElementById("myTopnav");
         if (x.className === "primary-navigation") {
            x.className += " responsive";
         } else {
            x.className = "primary-navigation";
         }
      }
   </script>
</header>
