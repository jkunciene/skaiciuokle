<?php
session_start();

if (isset($_SESSION['connect']) === true && $_SESSION['user_level'] = 'admin') {

}
include ('db_functions.php');




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
</main>
</section>
