<?php

include("header.php");
 ?>



              <div class="container">
                  <h3>Turite klausimų, rašykite mums</h3>
       <form action="siusti.php" method="get">
         <div class="row">

           <div class="col-25">
             <label for="fname">First Name</label>
           </div>
           <div class="col-75">
             <input type="text" id="fname" name="name" placeholder="Your name..">
           </div>
         </div>
         <div class="row">
           <div class="col-25">
             <label for="lname">Email</label>
           </div>
           <div class="col-75">
             <input type="text" id="lname" name="email" placeholder="Your last name..">
           </div>
         </div>

         <div class="row">
           <div class="col-25">
             <label for="subject">Question</label>
           </div>
           <div class="col-75">
             <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
           </div>
         </div>
         <div class="row">
           <input type="submit" value="Submit">
         </div>
       </form>
     </div>
 </section>
 <?php
 include("footer.php");

  ?>
