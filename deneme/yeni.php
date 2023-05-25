<?php global $baglanti;
require_once('config.php') ?>
<?php include ('partials/_db.php') ?>
<?php include ('partials/_header.php') ?>
<body>
<?php include ('partials/_navbar.php') ?>
<?php
    $result_kategoriler = mysqli_query($baglanti, "SELECT * from kategoriler");
    $result_tarifler = mysqli_query($baglanti, "SELECT * from tarifler");

    $kategoriler = mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC);
    $tarifler = mysqli_fetch_all($result_tarifler,MYSQLI_ASSOC);

    mysqli_close($baglanti);
?>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <?php include ('partials/_menu.php') ?>
            </div>
            <div class="col-9" style="background-color: #C07F00; border-radius: 5px ">
                <?php foreach ($tarifler as $tarif): ?>
                    <?php if($tarif["onay"]==0): ?>
                        <?php include ('partials/_cards.php') ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
