<?php
    session_start();

  $conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("leave_management",$conn);
  
  

  $userid=$_POST['id'];


    $sql="SELECT * FROM user_profile where userid='".$userid."' ";

    $result=mysql_query($sql);
    echo '<table border="2">';
    while($row=mysql_fetch_array($result))
    { 
    echo '<tr>';
    echo '<td>'; 
    echo $row['firstname']; 
    echo '</td>';
       echo '<td>'; 
    echo $row['lastname']; 
    echo '</td>';
       echo '<td>'; 
    echo $row['username']; 
    echo '</td>';
       echo '<td>'; 
    echo $row['userid']; 
    echo '</td>';  
    echo '</tr>';
    echo $row['email']; 
    echo '</td>';  
    echo '</tr>';    
    echo $row['leavetimes']; 
    echo '</td>';  
    echo '</tr>';
    }
    echo '</table>';
    $success = mysql_num_rows($result);
  
  mysql_close($conn);

?>