
        <?php
        include("header.php");
        ?>

    <div class="container ">
            <h2 class="mt-1" >Dažniausiai užduodami klausimai</h2>
            <div class="row">
                    <div class="col-3">
                        <img class="slepti img-fluid" src="img/duk.jpg"  alt="individualūs buhalterių mokymai">
                    </div>
<?php require_once('db_functions.php'); ?>
                <div class="col-9" ">
      <?php $questions = getQuestions();
      $question = mysqli_fetch_assoc($questions);
      while (  $question == true ) {
          echo "<h3>". $question['id'] . $question['question'] . "</h3>";
          $atsakymai = getAtsakymai($question['id']);
          $atsakymas = mysqli_fetch_assoc($atsakymai);
          while (  $atsakymas == true ) {
          echo "<p>".  $atsakymas['atsakymas'] ."</p>";
          $atsakymas = mysqli_fetch_assoc($atsakymai);
              }
          $question = mysqli_fetch_assoc($questions);
              }  ?>

</div>
</div>
</section>

<?php
include("footer.php");
 ?>
    </body>
