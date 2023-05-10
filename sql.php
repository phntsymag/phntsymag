<?php
include "database.php";

$query = new db_connect();
$query->run_sql("SELECT * FROM users", "Vyskytol sa problem", null, $result);

$myHTML = '<table border="1" class="table table-sm table-dark">
<thead>
<tr>
<th>id</th>
<th>user_id</th>
<th>user_name</th>
<th>password</th>
</tr>
</thead><tbody>';

foreach ($result as $row) {
    $myHTML .= "<tr>";
    $myHTML .= "<td>" . $row['id'] . "</td>";
    $myHTML .= "<td>" . $row['user_id'] . "</td>";
    $myHTML .= "<td>" . $row['user_name'] . "</td>";
    $myHTML .= "<td>" . $row['password'] . "</td>";
    $myHTML .= "</tr>";
}
$myHTML .= "</tbody></table>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body {
            font: 16px monospace;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Website</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="todolist.html">To Do List</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>

    <div class="well bg-primary text-center">
        <h3> List of users</h3>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">


                <?php echo $myHTML; ?>

            </div>
        </div>
    </div>

    <div class="container">
        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>

    <div class="container">
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>

    <div class="container">
        <img class="img-responsive" src=https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/01/31/14/panda-bamboo.jpg alt="Panda" width="80" height="60">
    </div>
    <div class="database">
        <!-- <?php
                echo " $color, $fruit"; ?> -->
        <div>

</body>

</html>