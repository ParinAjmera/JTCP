<?php

    mysql_connect('localhost','root','root');
    mysql_select_db('CalTrans_JTCP');
    
    session_start();
    
    //Fetch all companies
    function getCompany()
    {
        $ret = array();
        $query = "select * from `Company`";
        $res = mysql_query($query);
        while($row=mysql_fetch_array($res))
        {
            $temp_ret = array();
            $temp_ret['Company_ID']=$row[0];
            $temp_ret['Company_Name']=$row[1];
            $ret[] = $temp_ret;
        }
        return $ret;
    }
    
    function signup($prefix, $firstname, $initial, $lastname, $email, $password, $mobile, $company_id, $company_other, $position, $address, $city, $postal)
    {
        $ret = array();
        $query = "select * from `Login` where `Login_Email`='$email'";
        $res = mysql_query($query);
        if(mysql_affected_rows()>0)
        {
            $ret['Status']=0;
            $ret['Message']='Email Address Already Exist!';
            return $ret;
        }
        
        $query = "insert into `Login` value ('','$email', '$password', '1', '')";
        $res = mysql_query($query);
        $lid = mysql_insert_id();
        
        if($res>0)
        {
            $query = "insert into `Employee` values ('','$prefix', '$firstname', '$initial', '$lastname', '$mobile', '$company_id', '$company_other', '$position', '$address', '$city', '$postal', '$lid')";
            $res = mysql_query($query);
            
            if($res>0)
            {
                $ret['Status']=1;
                $ret['Message']='User Registed!';
                return $ret;
            }
            else
            {
                $query = "delete from `Login` where `Login_Email`='$email'";
                $res = mysql_query($query);
                $ret['Status']=0;
                $ret['Message']='Error! Please try again in a while.';
                return $ret;

            }
        }
    }
    
    //password_verify($password, $passDB)
    function login($email, $password)
    {
        $ret = array();
        $query = "select * from `Login` where `Login_Email`='$email'";
        $res = mysql_query($query);
        if($row=mysql_fetch_array($res))
        {
            $passDB = $row[2];
            if (password_verify($password, $passDB)) {
                $ret['Status']=1;
                $ret['Message']='Success';
                $ret['Login_ID']=$row[0];
                $ret['Role']=$row[3];
                return $ret;
            }
            else
            {
                $ret['Status']=0;
                $ret['Message']='Incorrect Email Address or Password!';
                return $ret;
            }
        }
        else
        {
            $ret['Status']=0;
            $ret['Message']='Incorrect Email Address or Password!';
            return $ret;
        }
    }
    
    function getEmployeeDetail($lid)
    {
        $ret = array();
        $query = "select * from `Employee`,`Login` where `Employee`.`Login_ID`='$lid' AND `Employee`.`Login_ID`=`Login`.`Login_ID`";
        $res = mysql_query($query);
        if($row=mysql_fetch_array($res))
        {
            $ret['Employee_ID'] = $row[0];
            $ret['Employee_Prefix'] = $row[1];
            $ret['Employee_FirstName'] = $row[2];
            $ret['Employee_Initial'] = $row[3];
            $ret['Employee_LastName'] = $row[4];
            $ret['Employee_Mobile'] = $row[5];
            $ret['Company_ID'] = $row[6];
            $ret['Company_Other'] = $row[7];
            $ret['Employee_Position'] = $row[8];
            $ret['Employee_Address'] = $row[9];
            $ret['Employee_City'] = $row[10];
            $ret['Employee_Postal'] = $row[11];
            $ret['Login_Email'] = $row[14];
            
            //Get Certified Courses
            $eid = $row[0];
            $query2 = "select * from `Certificate`,`Course` where `Employee_ID`='$eid' and `Certificate`.`Course_ID`=`Course`.`Course_ID`";
            $res2 = mysql_query($query2);
            
            $ret2 = array();
            while($row2=mysql_fetch_array($res2))
            {
                  $temp_ret2 = array();
                  $temp_ret2['Certificate _ID']=$row2[0];
                  $temp_ret2['Course_ID']=$row2[2];
                  $temp_ret2['Certificate _Code']=$row2[3];
                  $temp_ret2['Certificate _StartDate']=$row2[4];
                  $temp_ret2['Certificate _IssueDate']=$row2[5];
                  $temp_ret2['Certificate _ExpireDate']=$row2[6];
                  $temp_ret2['Status_ID']=$row2[7];
                  $temp_ret2['Course_Name']=$row2[9];
                  $ret2[] = $temp_ret2;
            }
            $ret['Certificate'] = $ret2;
        }
        return $ret;
    }
    
    function getCourse($cid)
    {
        $query = "select * from `Course` where `Course_ID`='$cid'";
        $res = mysql_query($query);
        if($row=mysql_fetch_array($res))
        {
            return $row[1];
        }
        return "";
    }
    
    function getMaterialFile($cid)
    {
        $query = "select * from `Material` where `Course_ID`='$cid'";
        $res = mysql_query($query);
        if($row=mysql_fetch_array($res))
        {
            return $row[1];
        }
        return "";
    }


    function getQuiz($cid)
    {
        $ret = array();
        $query = "select * from `Questions` where `Course_ID`='$cid'";
        $res = mysql_query($query);
        while($row=mysql_fetch_array($res))
        {
            $temp_ret = array();
            $temp_ret['Questions _ID'] = $row[0];
            $temp_ret['Questions _Name'] = $row[2];
            $temp_ret['Questions_Image'] = $row[3];
            $temp_ret['Questions_Answer'] = $row[4];
            
            $query2 = "select * from `Question_Options` where `Questions _ID`='$row[0]'";
            $res2 = mysql_query($query2);
            $temp_ret2 = array();
            while($row2=mysql_fetch_array($res2))
            {
                $temp_ret2[] = $row2[2];
            }
            $temp_ret['Question_Options'] = $temp_ret2;
            $ret[] = $temp_ret;
        }
        return $ret;

    }
?>
