<div class="card mb-3">
    <div class="row">
        <div class="col-md-3">
            <img src="img/<?php echo $tarif["resim"]; ?>" class="img-fluid rounded-start" style="height: 233px;width: 300px">
        </div>
        <div class="col-md-9">
            <div class="card-body">
                <h3 class="card-title">
                    <a href="tarifler_detay.php?id=<?php echo $tarif["id"];?>" <?php echo $tarif["style"];?>>
                        <?php echo $tarif["baslik"]; ?>
                    </a>
                </h3>
                <p>
                    <?php echo $tarif["aciklama"]; ?>

                </p>
            </div>
        </div>
    </div>
</div>