<?php
include_once('connect.php');
$query = $connect->query("SELECT NAME,SECTION,CLASS from student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>fetchall</title>
</head>
<body>
    <?php
while ($res=$query->fetchall(PDO::FETCH_ASSOC)){
    echo "<pre><p class='text-primary'";
    print_r($res);
    echo "</p></pre>";
    $connect = NULL;

}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

