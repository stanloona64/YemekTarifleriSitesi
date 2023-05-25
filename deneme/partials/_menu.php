<div class="list-group">
    <?php foreach ($kategoriler as $kategori): ?>
        <a href="#" class="list-group-item list-group-item-action" style="background-color: #FFD95A; color: #C07F00" >
            <?php
            echo $kategori["kategori_adi"];
            ?>
        </a>
    <?php endforeach; ?>
</div>