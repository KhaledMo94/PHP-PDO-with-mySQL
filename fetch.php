<?php
include("connect.php");
$stmt = $connect->query("SELECT * FROM company");
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    $connect = NULL;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>fetch</title>
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>