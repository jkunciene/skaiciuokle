<?php
include('header.php');
require_once('db_functions.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
        <?php
         if (isset($_GET['keywords'])) {
                
                 $galimiAtsakymai = getSearchRezultata($_GET['keywords']);
                 echo "<p>".$galimiAtsakymai['atsakymas']."</p>";
             }
        ?>
        </div>
    </div>
</div>
<?php
include("footer.php");
 ?>
