<?php
$group_id = $_GET['group_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Group Choice</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">

</head>

<body>
    <!-- Nav Bar -->
    <div class="topnav">
        <a href="projectHome.html">Home</a>
    </div>

    <div class="page">
        <div class="main">
            <h1 style="text-align: center;">Group Choice</h1>
            <div class="flexContainer">
                <div class="wideInfoBox">


                    <?php

                    $tempArray = array();
                    //$choices = array();
                    $leastFavorite = array();

                    require("dbConnect.php");
                    $db = get_db();

                    $query = 'SELECT * FROM "group_member" WHERE group_id = :group_id';
                    $statement = $db->prepare($query);
                    $statement->bindValue(':group_id', $group_id);
                    $statement->execute();

                    echo '<h1>Results</h1>';

                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                        $one   = strtolower($row['num_one']);
                        $two   = strtolower($row['num_two']);
                        $three = strtolower($row['num_three']);

                        $least = strtolower($row['least_favorite']);

                        array_push($tempArray, $one, $two, $three);


                        //echo $one . ' | ' . $two . ' | ' .
                         //   $three . ' | ' . $least . '<br/>';
                    }

                    $choices = array_count_values($tempArray);

                    arsort($choices);

                    $keys = array_keys($choices);

                    echo '<br>Results:<br>' . $keys[0] . ' | ' . $keys[1] . ' | ' . $keys[2] . '<br>';

                    ?>

                </div>
            </div>
        </div>

        <footer class="footer">
            Page Designed By: Cody Hatch
        </footer>
    </div>

</body>

</html>