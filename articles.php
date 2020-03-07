  <?php
  include "includes/dbh.inc.php";
  include "template.php";
  ?>

        <!-- logic for fetching and displaying data from database -->
        <h1>Current Articles</h1>
        <div class="container-fluid">
    <?php
    $sql = "select * from article";
    $stmt = $pdo->query($sql);
    echo '<div class="row" >';
    while ($row = $stmt->fetch()){
        echo "<div class='col-8'><h3 class='mt-5'>".$row['title']."</h3>";
        echo "<p class='mb-5'>".$row['content']."<br>";
        echo '<strong>By:</strong> '.$row['author']."<br>";
        echo '<strong>Date:</strong> '.$row['date_created']."</p> </div>";
        }
      echo '  </div>';
    ?>
        </div>
    </body>

    </html>