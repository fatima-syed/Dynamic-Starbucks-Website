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

// display 3 most recent results
for ($i = 0; $i < 3; $i++) {
    $res = $resultsArr[$i];
    echo '
    <div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch">
        <a href="#" class="block-20"
            style="background-image: url('.$res['image'].');">
        </a>
        <div class="text py-4 d-block">
            <div class="meta">
                <div><a href="#">'.$res['date_created'].'</a></div>
                <div><a href="#">'.$res['author'].'</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">'.$res['title'].'</a></h3>
            <p>'.$res['description'].'</p>
        </div>
    </div>
    </div>
    ';
}

// close the connection to database
$mysqli->close();
?>