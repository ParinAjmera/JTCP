<?php
    include 'template1.php';
    $ret = getQuiz(1);
    $results = array();
    for($i=0;$i<count($ret);$i++)
    {
        $results[] = $ret[$i]['Questions_Answer'];
    }
?>

<script type="text/javascript">

$(document).ready(function(){
                  var jArray= <?php echo json_encode($results); ?>;
                  var count=0;
                  $("#sub").click(function(){
                                  for(var i=0;i<jArray.length;i++)
                                  {
                                    var myclass = ".optradio"+i+":checked";
                                    var val = $(myclass).val();
                                    if(val==null)
                                    {
                                        alert("Please attend all the questions!");
                                        return;
                                    }
                                    if(val==jArray[i])
                                    {
                                        count++;
                                    }
                                  }
                                  if(count==jArray.length)
                                  {
                                    alert("Passed");
                                  }
                                  else
                                  {
                                    alert("Failed");
                                  }
                               });
                  });



</script>

            <div class="row">
                <div class="col-lg-9">
                    <h3 class="page-header"><?php echo getCourse(1); ?></h3>
                </div>
                <div class="col-lg-3">
                    <h1><button type="button" class="btn btn-success" id="sub">Submit</button></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <!-- Extra Space -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <h4>Paragraph</h4>
<p id="filedata">
<iframe src="<?php echo getMaterialFile(1); ?>" frameborder="0" width="100%" height="500px" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</p>
                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-6">
                    <div class="panel panel-default" style="overflow-y: scroll; height:500px;">
<?php
    for($i=0;$i<count($ret);$i++)
    {
?>

                        <h4><?php echo $i+1 . ". " . $ret[$i]['Questions _Name'];?></h4>
                        <?php
                            if($ret[$i]['Questions_Image']!=null)
                            {
                                echo '<center><img src="data:image/jpeg;base64,'.base64_encode( $ret[$i]['Questions_Image'] ).'" height=90px width=90px/></center>';
                            }
                        ?>
                        <h4>Select best case from options.</h4>

<div class="modal-body">
<div class="col-xs-3 col-xs-offset-5">
<div id="loadbar" style="display: none;">
<div class="blockG" id="rotateG_01"></div>
<div class="blockG" id="rotateG_02"></div>
<div class="blockG" id="rotateG_03"></div>
<div class="blockG" id="rotateG_04"></div>
<div class="blockG" id="rotateG_05"></div>
<div class="blockG" id="rotateG_06"></div>
<div class="blockG" id="rotateG_07"></div>
<div class="blockG" id="rotateG_08"></div>
</div>
</div>

<?php
    for($j=0;$j<count($ret[$i]['Question_Options']);$j++)
    {
?>
<div class="radio">
<label><input type="radio" name="<?php echo 'optradio'.$i; ?>" value="<?php echo $j+1; ?>" class="<?php echo 'optradio'.$i; ?>"><?php echo $ret[$i]['Question_Options'][$j];  ?></label>
</div>
<?php
    }
?>

                        <!-- /.panel-body -->
                    </div>
<?php
    }
?>
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
