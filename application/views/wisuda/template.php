<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/') ?>bootstrap.css">
    <title>Wisuda</title>
</head>

<body>
    <div class="container">
    <h1><?= $title ?></h1>
        <?php $this->load->view($content); ?>
    </div>
</body>

</html>