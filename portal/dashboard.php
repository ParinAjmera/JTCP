<?php
    include 'template1.php';
    $ret = array();
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    <?php
                        $lid = $_SESSION['Login_ID'];
                        $ret = getEmployeeDetail($lid);
                        echo $ret['Employee_FirstName'] . "'s Dashboard";
                    ?>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- Extra Space -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <!--Progress Bar-->
                        <?php
                            if(count($ret['Certificate'])==0 || $ret['Certificate'][0]['Status_ID']!=3)
                            {
                        ?>
                        <h4>Status: Registerd</h4>
                        <h5>Next Step: Take Safety Quiz</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 20%">
                                <span class="sr-only">20% Used</span>
                            </div>
                        </div>
                        <?php
                            }
                            else if(count($ret['Certificate'])==1)
                            {
                        ?>
                        <h4>Status: Passed Safety Quiz</h4>
                        <h5>Next Step: Take Course Prerequisite</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 50%">
                                <span class="sr-only">50% Used</span>
                            </div>
                        </div>
                        <?php
                            }
                            else
                            {
                                $stat=0;
                                for($j=1;$j<count($ret['Certificate']);$j++)
                                {
                                    if($ret['Certificate'][$j]['Status_ID']==2 || $ret['Certificate'][$j]['Status_ID']==3)
                                    {
                                        $stat++;
                                    }
                                }
                                if($stat==0)
                                {
                        ?>
                        <h4>Status: Passed Prerequisite Quiz</h4>
                        <h5>Next Step: Enroll to Class</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 70%">
                                <span class="sr-only">70% Used</span>
                            </div>
                        </div>
                        <?php
                                }
                                else
                                {
                        ?>
                        <h4>Status: Enrolled</h4>
                        <h5>Welcome to California State University Long Beach</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 100%">
                                <span class="sr-only">100% Used</span>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <?php
                        if(count($ret['Certificate'])==0)
                        {
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> First Step
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">Take Safety Quiz</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <?php
                        }
                    ?>

                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Courses
                        </div>
                        <br>
                        <!-- /.panel-heading -->
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Hot Mix Asphalt I
                                    </div>
                                    <div class="panel-body">
                                        <p>The Joint Training and Certification Program (JTCP) has developed a two-part series certification program in Hot Mix Asphalt (HMA) for construction materials lab technicians. To help reduce conflict and delay on construction projects within the state, Caltrans, in partnership with CSULB, has developed a series of joint training and certification programs.</p>
                                        
                                        <p>Participants in Hot Mix Asphalt I will receive training and certification in various California Test Methods (CTM) and American Association of State Highway and Transportation Officials (AASHTO) methods pertaining to HMA testing in the field.</p>
                                    </div>
                                    <div class="panel-footer">
                                        <?php echo coursestatus(1, $ret); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Hot Mix Asphalt II
                                    </div>
                                    <div class="panel-body">
                                        <p>The Joint Training and Certification Program (JTCP) has developed a two-part series certification program in Hot Mix Asphalt (HMA) for construction materials lab technicians. To help reduce conflict and delay on construction projects within the state, Caltrans, in partnership with CSULB, has developed a series of joint training and certification programs.
                                        </p>
                                        <p>Participants in Hot Mix Asphalt II will receive training and certification in various American Association of State Highway and Transportation Officials (AASHTO) methods pertaining to HMA testing in the field.
                                            </p><br>
                                    </div>
                                    <div class="panel-footer">
                                        <?php echo coursestatus(2, $ret); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Soils & Aggregates
                                    </div>
                                    <div class="panel-body">
                                    <p>The Joint Training and Certification Program (JTCP) has developed a certification program in Soils and Aggregates testing for construction materials lab technicians. To help reduce conflict and delay on construction projects within the state, Caltrans, in partnership with CSULB, has developed a series of joint training and certification programs.
                                    </p>
                                    <p>
                                    Participants in Soils and Aggregates will receive training and certification in various California Test Methods (CTM) and American Society for Testing and Materials (ASTM) methods pertaining to Soils and Aggregates testing in the field.</p>
                                    </div>
                                    <div class="panel-footer">
                                        <?php echo coursestatus(3, $ret); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Portland Cement Concrete
                                    </div>
                                    <div class="panel-body">
                                    <p>The Joint Training and Certification Program (JTCP) has developed a certification program in Portland Cement Concrete testing for construction materials lab technicians. To help reduce conflict and delay on construction projects within the state, Caltrans, in partnership with CSULB, has developed a series of joint training and certification programs.</p>
                                    
                                    <p>Participants in Portland Cement Concrete will receive training and certification in various American Society for Testing and Materials (ASTM) methods pertaining to PCC testing in the field.</p><br>
                                    </div>
                                    <div class="panel-footer">
                                        <?php echo coursestatus(4, $ret); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Certificates
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
                                    for($j=0;$j<count($ret['Certificate']);$j++)
                                    {
                                        if($ret['Certificate'][$j]['Status_ID']==3)
                                        {
                                ?>
                                <a href="#" class="list-group-item">
                                    <?php echo $ret['Certificate'][$j]['Course_Name']; ?>
<span class="pull-right text-muted small"><em><?php echo $ret['Certificate'][$j]['Certificate _IssueDate']; ?></em>
                                    </span>
                                </a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Email All Certificates</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<?php
    
    include 'template2.php';
?>
