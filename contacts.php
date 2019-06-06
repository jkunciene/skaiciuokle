<?php

include("header.php");
 ?>
 <section class="container">
     <div class="row justify-content-start">
         <div class="col-3">
             <img class="img-fluid"src="img/plansete.jpg" class="img-thumbnail" alt="apskaita suprantamai">
         </div>
         <div class="col-9 ">
             <form class="" action="registracija.php" method="get">
                 <input type="text" name="name" value="" placeholder="Įveskita vardą">
                 <input type="text" name="email" value="" placeholder="Įveskite savo el.paštą">
                 <textarea name="subject"  placeholder="Jūsų klausimas.." rows="6" cols="60"></textarea>
                 <button type="submit" name="button"> Send </button>
             </form>
         </div>
     </div>

 </section>
 <?php
 include("footer.php");

  ?>
