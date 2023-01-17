<html>
<?php
  function runMyFunction() {
    echo 'I just ran a php function';
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
  include 'dbconnect.php';
  
  $sql="select COUNT(user.std_id) as count from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE events.event_id=1 AND UPPER(user.clg_name) LIKE UPPER('st.xaviers college') AND UPPER(user.dept) LIKE UPPER('bca');";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $count=$row['count'];
  echo 'count: ' . $count;
  $email=$_GET['email'];
  $flag=0;
  if($count==7){
  
  for ($i=0;$i < count($email); $i++) {
  $sql="Select * from manage_events where event_id=$email[$i]";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  
  if($row['std_id']!=null){
    $flag=0;
  }else{
    $flag=1;
    break;
  }
  }
}
  session_start();
  if($flag==1){
    // Start the session
    // Set session variables
    $_SESSION["alert1"] = "limit reached";
    header("Location:register.php");
    
  }else{
    $_SESSION["alert1"] = "no problem";
    
  }
 

?>
<!-- Hello there!
<a href=check.php?hello=true'>Run PHP Function</a> -->


</html>