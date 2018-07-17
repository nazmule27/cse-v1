<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container faculty-text">
    <h3 class="header-bg">Faculty who served to CSE</h3>
    <div class="row">
        <?php $k=1; for ($i = 0; $i < count($faculty_served_list); ++$i) {?>
        <div class="col-md-6 col-sm-6">
                <p><?php echo $k.'. '.$faculty_served_list[$i]->fac_name.' ('.$faculty_served_list[$i]->fac_bangla_name.')';?></p>
        </div>
        <div class="col-md-6 col-sm-6">
            <p><?php echo $faculty_served_list[$i]->fac_desig;?></p>
        </div>
            <?php $k++;} ?>
    </div> <!--row end-->
    <?php
    $this->load->view('common/footer');
    ?>
