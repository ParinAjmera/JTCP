<?php

    session_start();
    if($_SESSION['Login_ID']==null || $_SESSION['Role']!=1)
    {
        header("Location: ../login.php");
    }
    
    
    function coursestatus($cid, $ret)
    {
        if(count($ret['Certificate'])==0 || $ret['Certificate'][0]['Status_ID']!=3)
        {
            return "<a href=''>Take Safety Quiz First</a>";
        }
        else
        {
            $Certificate = $ret['Certificate'][$cid];
            $Course_Name = $Certificate[Course_Name];
            //For HMA 2
            if($cid==2)
            {
                if($ret['Certificate'][1]==null || $ret['Certificate'][1]['Status_ID']!=3)
                {
                    return "<a href=''>Complete Hot Mix Asphalt I First</a>";
                }
            }
            if($Course_Name==null)
            {
                return "<a href=''>Take Prerequisite Test</a>";
            }
            else
            {
                if($Certificate['Status_ID']==2)
                {
                    return "Enrolled";
                }
                return "<a href=''>Enroll To Class</a>";
            }
        }
    }

?>
