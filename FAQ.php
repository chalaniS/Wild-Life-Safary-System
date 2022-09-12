<!-- Nimadi -->

<?php
require 'conn.php';
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/FAQ.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <script src="./js/home.js"></script>
</head>

<body>

    <!--header-->
    <?php
  include './header.php';
  ?>

    <!--FAQ page-->
    <div class="faq">
        <div class="faq-heading">
            <h3>FAQ ! Need help ??</h3>
            <p>We've got you covered.</p>
        </div>

        <br />

        <div class="search-bar">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
                <i class="fas fa-search"></i>
                <input type="text" placeholder=" Search..." id="txt-search" name="search-words" />
                <button id="search-btn">Search</button>
            </form>
        </div>
        <br />

        <!--searching process-->
        <?php
    if (isset($_POST["search-btn"])) {

      $question = $_POST["search-words"];
      $sql = "SELECT * FROM faq WHERE question LIKE '%$question%'";

      if ($result = $con->query($sql)) {

        if ($result->num_rows > 0) {

          while ($row = $result->fetch_assoc()) {

            echo    "  <div id='quection'>";
            echo    "       <aside>" . $row["question"] . "</aside>";
            echo    "       <p>Q.</p>";
            echo    "  </div>";
            echo    "  <div id='answer'>";
            echo    "      <aside>";
            echo    "      <a href='contact.php' target='_blank' title='Contact Us for more details.'>" . $row["answer"] . "</a>";
            echo    "      </aside>";
            echo    "      <p>A.</p>";
            echo    "  </div>";
            echo    "   <br />";
          }
        } else {
          echo "No matching result.. Please contact us about it.";
        }
      } else {
        echo "erro";
      }
    }
    ?>



        <!--QNA-->
        <div class="QNA">
            <?php

      $sql = "SELECT * FROM faq";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

          echo    "  <div id='quection'>";
          echo    "       <aside>" . $row["question"] . "</aside>";
          echo    "       <p>Q.</p>";
          echo    "  </div>";
          echo    "  <div id='answer'>";
          echo    "      <aside>";
          echo    "      <a href='contact.php' target='_blank' title='Contact Us for more details.'>" . $row["answer"] . "</a>";
          echo    "      </aside>";
          echo    "      <p>A.</p>";
          echo    "  </div>";
          echo    "   <br />";
        }
      }
      ?>

        </div>
    </div>

    <!--footer-->

    <?php
  include './footer.php';
  ?>

</body>

</html>