
        <?php
        include("header.php");
        ?>
        <section class="container ">
<div class="row">
    <div class="col-9">


        <?php
         require_once('db_functions.php');

          echo "<h2>dazniausiai uzduodami klausimai<h2 />";

          $questions = getQuestions();
          $question = mysqli_fetch_assoc($questions);

            while (  $question == true ) {
                echo "<a>". $question['id'] . $question['question'] . "</a>"." <br/>";

                  $atsakymai = getAtsakymai($question['id']);
                  $atsakymas = mysqli_fetch_assoc($atsakymai);

                  while (  $atsakymas == true ) {

                          echo "<h2>".  $atsakymas['atsakymas'] ."</h2>";
                           $atsakymas = mysqli_fetch_assoc($atsakymai);
                      }
                $question = mysqli_fetch_assoc($questions);
          }
?>
    </div>
</div>
</section>
<?php
include("footer.php");
 ?>
    </body>
