<div class="artikel">
    <b class="artikel title">ACTIVITY ARTICLES</b>
    <div class="artikel-list">
        <?php foreach ($artikel as $datas) { ?>
            <div class="template-artikel">
                <div class="template-artikel-image-wrapper">
                    <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="<?= asset_url(); ?>img/default/template_image.png">
                </div>
                <div class="template-artikel-content">
                    <b class="template-artikel-content title"><?= $datas["title"]; ?></b>
                    <p class="template-artikel-content description"><?= $datas["description"]; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>