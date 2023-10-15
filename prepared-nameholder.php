<?php 
require_once("connect.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $res = $connect->prepare("INSERT INTO agents (AGENT_CODE , AGENT_NAME , WORKING_AREA , COMMISSION , PHONE_NO , COUNTRY) VALUES  (:ag_code , :ag_name , :wo_area , :com , :phone , :cntry)");
    $res -> bindParam(":ag_code",$_POST['ag_code']);
    $res -> bindParam(":ag_name",$_POST['ag_name']);
    $res -> bindParam(":wo_area",$_POST['wo_area']);
    $res -> bindParam(":com",$_POST['com']);
    $res -> bindParam(":phone",$_POST['phone']);
    $res -> bindParam(":cntry",$_POST['cntry']);
    $res -> execute();
}
$connect = NULL;
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
    <form action="" method="post" class="container">
        <div class="row font-weight-bold text-center">
            <div class="col-md-4">
                <input type="text" name="ag_code" id="" class="w-100 p-2 my-1" placeholder = "Agent code">
            </div>
            <div class="col-md-4">
                <input type="text" name="ag_name" id="" class="w-100 p-2 my-1" placeholder="Agent Name">
            </div>
            <div class="col-md-4">
                <input type="text" name="wo_area" id="" class="w-100 p-2 my-1" placeholder="Working Area">
            </div>
            <div class="col-md-4">
                <input type="number" min="0" max="1" step="0.01" name="com" id="" class="w-100 p-2 my-1" placeholder="Commission">
            </div>
            <div class="col-md-4">
                <input type="number" name="phone" placeholder="Phone number" id="" class="w-100 p-2 my-1">
            </div>
            <div class="col-md-4">
                <input type="text" name="cntry" class="w-100 p-2 my-1" placeholder="Country Name" id="">
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <input type="submit" value="Add To Database" class="btn btn-primary">
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>