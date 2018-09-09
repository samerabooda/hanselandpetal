<?php
include 'connect.php';
$stmt = $conn->prepare("SELECT * FROM arrangements");
$stmt->execute();
$rows = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mixed Arrangements - Hansel and Petal</title>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link href="../styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
   <?php require '../includes/header.php'; ?>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../arrangements.php">Arrangements</a></li>
                <li>Mixed Arrangements</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Mixed Arrangements</h1>
            <h2 class="h3 inline_block">Mixed bouquets with the bright colors of Spring</h2>
            <div class="cols lg_margin">
                <div class="col sub">
                    <p class="w210">Hansel &amp; Petal combines the highest quality 
                        flowers in unique, colorful arrangements and bouquets that are sure to 
                        make everyone happy.</p>
                    <p>Choose from our popular arrangements or <a href="../bouquet.php" class="btn alt inconsistent_mt"><span class="normalcase">Create Your Own</span> Custom Bouquet</a></p>
                </div>
                <div class="col main">
                    <div id="feature">
                        <div class="inner">
                            <p class="overlay large">Arrangements for Every Occasion</p>
                            <p class="overlay price">Starting at $39.95</p>
                            <img src="../images/710_arrangement_97881968.jpg" alt="Mixed Arrangement" height="300" width="710"> </div>
                    </div>
                </div>
            </div>
            
           
            <div class="page open">
            <?php 
            $i = 0;
            foreach ($rows as $row) {
                if ($i % 4 === 0 ) {
              ?>
                <div class="section">
                    <ul class="reset tiles">
                    <?php } ?>
                        <li> <a href="details.php?id=<?=$row['id']?>"> <img src="../images/<?=$row['image'] ?>" alt="<?=$row['alt']?>" height="200" width="200">
                            <h3 class="h4"><?=$row['title']?></h3>
                            <p class="reset">$<?=$row['price']?></p>
                            </a> 
                        </li>
                        <?php $i++;
                        if($i % 4 === 0){ 
                            ?>
                    </ul>
                </div>
             <?php 
                 }  
            }; ?>

            </div>
        </div>
    </div>
  <?php include '../includes/footer.php'; ?>
</div>
<script src="../js/jquery-1.10.2.min.js"></script> 
<script src="../js/scripts.js"></script>
</body>
</html>