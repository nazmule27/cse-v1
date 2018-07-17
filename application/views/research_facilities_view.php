<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container">
    <h3 class="header-bg">Research Facilities:</h3>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <p>Graduate research in CSE BUET is well supported with equipped labs and free Books, Papers, Journals, Printing, Internet etc. The researchers use multimedia projectors to present and analyze research problems with his group. There is a small compensatory fund for graduate thesis work. This is awarded by BUET.</p>
            <p>Please visit the <a href="<?=base_url();?>research/facilities_detail">Department Facilities</a> page for further details.</p>
        </div>

    </div> <!--row end-->
    <?php
    $this->load->view('common/footer');
    ?>

 
