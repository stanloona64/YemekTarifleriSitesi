<?php require_once('config.php') ?>
<?php include ('partials/_db.php') ?>
<?php include ('partials/_header.php') ?>
<body>
<?php include ('partials/_navbar.php') ?>
<?php
if(!isset($_GET["id"])){
    header("Location: yeni.php");
}
$id = $_GET["id"];
$result_kategoriler = mysqli_query($baglanti, "SELECT * from kategoriler");
$result_tarif = mysqli_query($baglanti, "SELECT * from tarifler WHERE id=".$id);

$kategoriler = mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC);
$tarif = mysqli_fetch_assoc($result_tarif);

mysqli_close($baglanti);
?>
<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <?php include ('partials/_menu.php') ?>
        </div>
        <div class="col-9" style="background-color: #C07F00; border-radius: 5px ">
            <?php include ('partials/_cards.php') ?>
        </div>
    </div>
</div>
</body>
</html>
