<?php
require_once("connect.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $update = $connect ->prepare("UPDATE agents SET AGENT_NAME = ? WHERE WORKING_AREA = ?");
    $update->bindParam(1,$_POST['name']);
    $update->bindParam(2,$_POST['country']);
    $update->execute();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>prepare with application </title>
</head>
<body>
    <form class="form-control container" method="POST">
        <div class="row">
            <h3 class="text-bold text-dark my-2 text-center">Update agents names by Working Area</h3>
            <div class="col-sm-6">
                <input type="text" name="country" id="" class="p-2 w-100" placeholder="Country name">
            </div>
            <div class="col-sm-6">
                <input type="text" name="name" id="" class="p-2 w-100" placeholder="Name to Update">
            </div>
            <div class="my-3 d-flex justify-content-center">
            <input type="submit" value="Update" class="btn btn-primary m-auto">
            </div>
        </div>
    </form>
    <div class="container">
        <h4 class="text-primary text-center font-weight-bold">
            updated Records
        </h4>
        <?php
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $sql = $connect ->prepare("SELECT AGENT_NAME , WORKING_AREA from agents WHERE WORKING_AREA = ?");
            $sql -> bindParam(1,$_POST['country']);
            $sql ->execute();
            echo "<div class='row justify-content-center align-items-center font-weight-bold'>";
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
                echo "<div class='col-md-6 text-primary my-2'>".$row['AGENT_NAME']."</div>";
                echo "<div class='col-md-6 text-primary my-2'>".$row['WORKING_AREA']."</div>";
            }
            echo "</div>";
            $connect = NULL;

        }
        
        
        
        
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>