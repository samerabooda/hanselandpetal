<?php
include 'connect.php';

$userid = isset($_GET['id']) && is_numeric($_GET['id'])?intval($_GET['id']):0;
$stmt = $conn->prepare("SELECT * FROM arrangements WHERE id = ? ");
$stmt->execute(array($userid));
$row = $stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mixed Arrangements - Hansel and Petal</title>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link href="../styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="site">
   <?php require '../includes/header.php'; ?>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../arrangements.php">Arrangements</a></li>
                <li><a href="mixed.php">Mixed Arrangements</a></li>
                <li><?=$row['title']?></li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block"><?=$row['title']?></h1>          
            <p class="figure"><img src="../images/<?=$row['image']?>" alt="<?=$row['alt']?>" width="200" height="200">$<?=$row['price']?></p>
            <?=$row['description']?>
        </div>
        <div id="col_2">
        <h3>How to Order</h3>
        <p>All the flowers for our mixed arrangements are carefully selected by <a href="../designers.php">our talented designers</a> using the freshest flowers in season. To discuss your individual requirements, please call Hansel and Petal toll-free on <b>800-555-0199</b>.</p>
        </div>
    </div>
   <?php include '../includes/footer.php'; ?>
</div>
<script src="../js/jquery-1.10.2.min.js"></script> 
<script src="../js/scripts.js"></script>
</body>
</html>
