<?php
// connect to database
require('config.php');
require_once('functions.php');

// loop through all dates in results and change format
$resultsArr = array();
$result = mysqli_query($mysqli, "SELECT title, description, author, date_created, image FROM blog;");
while($res = mysqli_fetch_array($result)) {
    array_push($resultsArr, $res);
}

// sort results by date
usort($resultsArr, function($a, $b) {
    return compareDates($a['date_created'], $b['date_created']);
});

// display 2 most recent results
for ($i = 0; $i < 2; $i++) {
    $res = $resultsArr[$i];
    echo '
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url('.$res['image'].');"></a>
    <div class="text">
        <h3 class="heading"><a href="#">'.$res['title'].'</a></h3>
        <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> '.$res['date_created'].'</a></div>
        <div><a href="#"><span class="icon-person"></span> '.$res['author'].'</a></div>
        </div>
    </div>
    </div>
    ';
}

// close the connection to database
$mysqli->close();
?>