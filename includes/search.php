<?php
require "dbh.inc.php";
require "../helpers/helpers.php";

if (!isset($_GET['submit']) && !isset($_GET['page']) )
    {
     redirect('../index.php', ['error'=>'accessDenied']);
    }
if(empty($_GET['searchItem']))
    {
     redirect('../index.php', ['error'=>'searchBoxEmpty']);
    }

$results_per_page = 2;
if(!isset($_GET['page'])){
    $page = 1;
}
else{
    $page = $_GET['page'];
}

$offset = ($page-1)*$results_per_page;

$toSearch = $_GET['searchItem'];

// This query gives the total items found matching search data, based on which paginations related variables are set
 $sql = "select * from article where title like :tosearch Or content like :tosearch Or author like :tosearch OR date_created like :tosearch ;";  
 $stmt = $pdo->prepare($sql);
 $item_to_search = '%'.$toSearch.'%';
 $stmt->bindParam(':tosearch', $item_to_search, PDO::PARAM_STR);
 $result = $stmt->execute();

//  Exit if no search result found
 if ($stmt->rowCount()===0)
    {
        redirect('../index.php', ['status'=>'NoItemFound']);
        // header('Location: ../index.php?status=NoItemFound');
        // exit();
    }

// no. of pages set for pagination
 $num_of_pages = ceil($stmt->rowCount()/$results_per_page);
//  }

// This query repeatedly fetches data from database based on limit set by no, of pages set per page 
 $sql = "select * from article where title like :tosearch Or content like :tosearch Or author like :tosearch OR date_created like :tosearch limit :offset, :total ;";  
 $stmt = $pdo->prepare($sql);
 $stmt->bindParam(':total', $results_per_page, PDO::PARAM_INT);

 $stmt->bindParam(':tosearch', $item_to_search, PDO::PARAM_STR);
 $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
 $result = $stmt->execute();
 include_once '../template.php';
echo "<div class='w-75 p-5 '>";
while ($row = $stmt->fetch()){
   
    $text = $row['content'];

    // if the content size is longer then 25 characters then an ellipse is
    //  put after 25 characters instead of displaying whole content, for which
    // one has to click the link 
    $text = strlen($text)>25 ? substr($text,0,25).'&hellip;' : $text; 

    echo "<div class=' mb-5'>
    <a href='../article.php?title=".$row['title']."&date=".$row['date_created']."'>
    <h3>".$row['title']."</h3>".
  
     $text."<br>".
     $row['author']."<br>".
     $row['date_created']."</a><br> <br> </div>";

}

// Displays page links 
if (isset($_GET['total_pages'])){$num_of_pages = $_GET['total_pages'];}
echo 'Pages: ';
for($page=1; $page <= $num_of_pages; $page++ ){
    echo '<a href="/includes/search.php?searchItem='.$toSearch.'&page='.$page.'&total_pages='.$num_of_pages.'">' . $page . '</a>   ';
}
echo '</div></body></html>';