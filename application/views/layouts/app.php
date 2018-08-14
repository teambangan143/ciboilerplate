<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sb-admin.css">

    <title>Code Igniter</title>
</head>

<body id="page-top">


<?php
$this->load->view('layouts/header');
?>

<div id="wrapper">
    <?php
    if($this->User->loggedIn()):
    $this->load->view('layouts/sidebar');
    endif
    ?>
    <div id="content-wrapper">
        <?php
        $this->load->view($content);
        ?>
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/js/Chart.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>
</body>
</html>