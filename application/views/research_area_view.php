<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container">
    <h3 class="header-bg">Research Areas:</h3>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <p>The Department of CSE facilitates environments for the following research areas:</p>
            <?php $k=1; for ($i = 0; $i < count($research_area); ++$i) {?>
                <p>&raquo; <a href="<?=base_url();?>research/string/<?php echo $research_area[$i]->research_area;?>"><?php echo $research_area[$i]->research_area;?></a> </p>
             <?php $k++;} ?>
            <hr>
        </div>
    </div> <!--row end-->

    <?php
    $this->load->view('common/footer');
    ?>
