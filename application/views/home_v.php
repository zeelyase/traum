<!doctype html>
<html lang="tr" class="ie9">
<html lang="tr" class="ie">
<html dir="ltr" lang="tr">
<head>
        <?php $this->load->view("includes/head");?>
</head>
<body>
<!-- loader -->
<div class="loader">
    <div id="movingBallG">
        <div class="movingBallLineG"></div>
        <div id="movingBallG_1" class="movingBallG"></div>
    </div>
</div>
<!-- loader end -->
<div id="main">
        <?php $this->load->view("includes/header");?>
    <div id="wrapper">
        <?php $this->load->view("{$viewFolder}/content");?>

        <?php $this->load->view("includes/footer");?>
</div>
</div>
        <?php $this->load->view("includes/include_script");?>



</body>
</html>