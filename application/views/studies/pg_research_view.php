<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container">
    <h3 class="header-bg">Graduate Theses:</h3>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <p>By Year:</p>
                <p>
                    <?php $k=1; for ($i = 0; $i < count($thesis); ++$i) {?>
                    &raquo;<a href="<?=base_url();?>studies/pg_research_year_detail/<?php echo $thesis[$i]->thesis_year;?>"><?php echo $thesis[$i]->thesis_year;?></a> &emsp;
                        <?php $k++;} ?>
                </p>

            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <hr>
        </div>
    </div> <!--row end-->

    <?php
    $this->load->view('common/footer');
    ?>
