<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | Puskesmas Tinewati</title>
    <link rel="icon" href="<?= asset_url(); ?>img/tinewati/logo_tinewati.png">
    <link rel="stylesheet" href="<?= asset_url(); ?>style/main.css">
    <?php if ($homepage) { ?>
        <link rel="stylesheet" href="<?= asset_url(); ?>style/homepage.css">
    <?php }; ?>
    <?php if ($profile) { ?>
        <link rel="stylesheet" href="<?= asset_url(); ?>style/profile.css">
    <?php }; ?>
    <?php if ($structure) { ?>
        <link rel="stylesheet" href="<?= asset_url(); ?>style/structure.css">
    <?php }; ?>
    <?php if ($article) { ?>
        <link rel="stylesheet" href="<?= asset_url(); ?>style/article.css">
    <?php }; ?>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

<body>
    <?= $this->include('include/navbar'); ?>

    <?php $this->renderSection('content'); ?>

    <?= $this->include('include/footer'); ?>
</body>
<?php if ($facility) { ?>
    <script>
$.getScript("<?= asset_url(); ?>script/facility.js");
                    // let data_fasilitas = $data;
                    $(document).ready(function() {
                        $(".facility-detil").hide().html($(".facility-list-table li").eq(0).find('img').clone()).fadeIn("fast");
                        $(".facility-detil").addClass("selected");
                        $(".facility-list-table").find("li:eq(0)").addClass("selected-item");
});
    </script>
<?php }; ?>
<script type="text/javascript" src="<?= asset_url(); ?>script/contact.js"></script>
<script type="text/javascript" src="<?= asset_url(); ?>script/drag-scroll.js"></script>

</html>