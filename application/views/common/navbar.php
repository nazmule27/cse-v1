<?php
/*$CI = &get_instance();
$role = $CI->session->userdata('role');
$username = $CI->session->userdata('username');*/
?>
<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Banner -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/img/logo.png" alt="logo">
                        <p class="cse">Department of Computer Science and Engineering</p>
                        <p class="buet">Bangladesh University of Engineering and Technology</p></a>
                </div>
                <div class="col-md-6">
                    <ul class="top-menu" role="group" >
                        <li><a class="btn btn-default btn-sm" target="_blank" href="http://cse.buet.ac.bd/common/loginstat.php">Login</a></li>
                        <li>&nbsp;</li>
                        <li><a target="_blank" href="http://cse.buet.ac.bd/feedback/login">Feedback</a></li>
                        <li>&diams;</li>
                        <li><a target="_blank" href="http://cse.buet.ac.bd/moodle">Moodle</a></li>
                        <li>&diams;</li>
                        <li><a target="_blank" href="http://lib.buet.ac.bd/home">Library</a></li>
                        <li>&diams;</li>
                        <li><a target="_blank" href="http://biis.buet.ac.bd/">BIIS</a></li>
                        <li>&diams;</li>
                        <li><a target="_blank" href="https://webmail.buet.ac.bd/">Web Mail</a></li>
                    </ul>
                    <div id="navbar" class="navbar-collapse collapse">
                        <!--<form class="navbar-form navbar-right" method="POST" action="https://cse.buet.ac.bd/common/login.php">
                            <div class="form-group">
                                <input type="text" name="user_text" placeholder="Username" class="input-sm form-control" required >
                            </div>
                            <div class="form-group">
                                <input name="pass_text" type="password" placeholder="Password" class="input-sm form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm ">Sign in</button>
                        </form>-->
                    </div><!--/.navbar-collapse -->
                </div>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
                <li><a href="<?=base_url();?>home">Home</a></li>
                <li><a href="<?=base_url();?>admission"><!--<i class="glyphicon glyphicon-star-empty blink_me"></i>-->Admissions <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>admission">Admissions information</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url();?>home/news_detail/122">Ph.D. Admission April 2018</a></li>
                        <li><a href="<?=base_url();?>home/news_detail/121">PG Admission October 2017</a></li>
                        <li><a href="<?=base_url();?>home/news_detail/119">PG Admission April 2017</a></li>

                    </ul>
                </li>
                <li><a href="<?=base_url();?>general_info">General Information <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>general_info/prosstd">Prospective Students</a></li>
                        <li><a href="<?=base_url();?>general_info/current_std">Current Students</a></li>
                        <li><a href="<?=base_url();?>studies/ug_studies">Undergraduate Studies</a></li>
                        <li><a href="<?=base_url();?>studies/pg_studies">Graduate Studies</a></li>
                        <li><a href="<?=base_url();?>general_info/poster">Undergraduate Thesis Posters</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url();?>research" class="has-submenu">Research <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="<?=base_url();?>research/publication">Publications</a></li>
                    </ul>
                </li>
                <!--<li><a href="#" class="has-submenu">BRTC<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="#">BRTC</a></li>
                    </ul>
                </li>-->
                <li><a href="<?=base_url();?>activities">Activities <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>activities/indgov">Industry & Government</a></li>
                        <li><a href="<?=base_url();?>activities/feature">Features</a></li>
                        <li><a href="<?=base_url();?>activities/self_assessment">Self Assessment</a></li>
                        <li><a href="<?=base_url();?>activities/fulbright">Fulbright scholarship</a></li>
                        <li><a href="<?=base_url();?>home/all_event">Calendar Events</a></li>
                        <li><a href="<?=base_url();?>home/all_notice">Public Notices</a></li>

                    </ul>
                </li>
                <li><a href="javascript:void(0)">Student Section<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>downloads/class_routine">Class Routine</a></li>
                        <li><a href="http://cse.buet.ac.bd/moodle/">Moodle</a></li>
                        <li><a href="http://cse.buet.ac.bd/feedback/login">Feedback</a></li>
                        <li><a href="<?=base_url();?>student/student_notice">Student Notice</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url();?>faculty_list/home" class="has-submenu">Faculty <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>faculty_list/short_list">Active Faculty Short Detail</a></li>
                        <li><a href="<?=base_url();?>faculty_list">Active Faculty List</a></li>
                        <li><a href="<?=base_url();?>faculty_list/faculty_on_leave">Faculty List on Leave</a></li>
                        <li><a href="<?=base_url();?>faculty_list/faculty_served">Faculty who Served to CSE</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url();?>officer" class="has-submenu">Officers <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>officer/staff">Staff</a></li>
                        <li><a href="<?=base_url();?>officer/who_served">Officer who Served</a></li>
                    </ul>
                </li>
                <li><a href="#" class="has-submenu">Others <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group" >
                        <li><a href="<?=base_url();?>downloads">Downloadable Forms</a></li>
                        <li><a href="http://cse.buet.ac.bd/new/">PPC (new)</a></li>
                        <li><a href="http://cse.buet.ac.bd/iac/">IAC</a></li>
                        <li><a href="http://cse.buet.ac.bd/cnap/">Cisco Academy</a></li>
                        <li><a href="http://cse.buet.ac.bd/nsyss2017-4th/">NSysS 2017 (4th)</a></li>
                        <li><a href="http://cse.buet.ac.bd/walcom2018/">WALCOM 2018</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url();?>contact" class="has-submenu">Contact </a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div>