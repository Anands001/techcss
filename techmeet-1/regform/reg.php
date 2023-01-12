<?php

$con=new mysqli('localhost','root','','techmeet');
if(!$con){
    die(mysqli_error($con));
}

 $eid=$_POST['eid'];
 
 $name=$_POST['name'];
 $regno=$_POST['regno'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $clg_name=$_POST['clg_name'];
 $dept=$_POST['dept'];
 var_dump($name);
 $c=count($name);

 

 $emailcheck="select * from user where email='$email[0]'";
 $result1=mysqli_query($con,$emailcheck);
 $rt=null;
 if($rt1=mysqli_fetch_assoc($result1)){
 $rt=$rt1['std_name'];
 }

 if($rt!=null){
    $fstdid="select std_id from user where email='$email[0]'";
    $r1=mysqli_query($con,$fstdid);
    $astdid=mysqli_fetch_assoc($r1);
    $stdid=$astdid['std_id'];
    

    $alreg="select * from manage_events where std_id=$stdid and event_id=$eid";
    $r1=mysqli_query($con,$alreg);
    $alreg1=mysqli_fetch_assoc($r1);
    
        if($alreg1!=null){
            header('location:/techmeet-1/landing.php');
        }else{
            $insstud="INSERT INTO `manage_events` (`std_id`, `event_id`) VALUES ($stdid, $eid);";
            $r1=mysqli_query($con,$insstud);
        }

 }else{
    $insstud1="INSERT INTO `user` (`std_id`, `std_name`, `std_regno`, `mobile`, `email`, `clg_name`, `dept`) VALUES (NULL, '$name[0]', '$regno', '$phone', '$email[0]', '$clg_name', '$dept');";
    mysqli_query($con,$insstud1);
        $fstdid1="select std_id from user where email='$email[0]'";
        $r2=mysqli_query($con,$fstdid1);
        $astdid1=mysqli_fetch_assoc($r2);
        $stdid1=$astdid1['std_id'];

        $insstud1="INSERT INTO `manage_events` (`std_id`, `event_id`) VALUES ('$stdid1', '$eid');";
        $r1=mysqli_query($con,$insstud1);
 }
//$sql1="INSERT INTO `user` (`std_id`, `std_name`, `std_regno`, `mobile`, `email`, `clg_name`, `dept`) VALUES (NULL, '$name[0]', '$regno', '$phone', '$email[0]', '$clg_name', '$dept');";
//mysqli_query($con,$sql1);

if($c>0){
 for ($i = 1; $i <$c; $i++) {
    $emailcheck="select * from user where email='$email[$i]'";
    $result1=mysqli_query($con,$emailcheck);
    $rt=null;
    if($rt1=mysqli_fetch_assoc($result1)){
    $rt=$rt1['std_name'];
    }
   
    if($rt!=null){
       $fstdid="select std_id from user where email='$email[$i]'";
       $r1=mysqli_query($con,$fstdid);
       $astdid=mysqli_fetch_assoc($r1);
       $tstdid=$astdid['std_id'];
       
   
       $alreg="select * from manage_events where std_id=$tstdid and event_id=$eid";
       $r1=mysqli_query($con,$alreg);
       $alreg1=mysqli_fetch_assoc($r1);
       
           if($alreg1!=null){
               header('location:/techmeet-1/landing.php');
           }else{
               $insstud="INSERT INTO `manage_events` (`std_id`, `event_id`) VALUES ($tstdid, $eid);";
               $r1=mysqli_query($con,$insstud);
           }
   
    }else{
        $insstud1="INSERT INTO `user` (`std_id`, `std_name`, `std_regno`, `mobile`, `email`, `clg_name`, `dept`) VALUES (NULL, '$name[$i]', '', '', '$email[$i]', '$clg_name', '$dept');";
        mysqli_query($con,$insstud1);

        $fstdid1="select std_id from user where email='$email[$i]'";
        $r2=mysqli_query($con,$fstdid1);
        $astdid1=mysqli_fetch_assoc($r2);
        $stdid1=$astdid1['std_id'];

        $insstud1="INSERT INTO `manage_events` (`std_id`, `event_id`) VALUES ('$stdid1', '$eid');";
        $r1=mysqli_query($con,$insstud1);
    }
  }
}
 
 

?>