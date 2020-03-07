<?php
include "includes/dbh.inc.php";
include "template.php";
?>

    <h1>Article</h1>
    <div class="container-fluid">
    <?php
    $title = $_GET['title'];
    $date = $_GET['date'];

    $sql = "select * from article where title = :title AND date_created = :date;";
    $stmt = $pdo->prepare($sql);
    $status = $stmt->execute(['title'=>$title, 'date'=>$date]);
    while ($row = $stmt->fetch()){
        echo "<h3>".$row['title']."</h3>";
        echo "<p>".$row['content']."<br>";
        echo $row['author']."<br>";
        echo $row['date_created']."</p>";
        }
    ?>
    </div>
</body>
</html>