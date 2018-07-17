<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container">
    <h3 class="header-bg">Graduate Courses:</h3>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Course Title</th>
                </tr>
                </thead>
                <tbody>
                <?php $k=1; for ($i = 0; $i < count($courses); ++$i) {?>
                    <tr>
                        <td><?php echo $courses[$i]->course_id;?></td>
                        <td><?php echo $courses[$i]->course_title;?></td>
                    </tr>
                    <?php $k++;} ?>
                </tbody>
            </table>
        </div>

    </div> <!--row end-->

    <?php
    $this->load->view('common/footer');
    ?>
