<table id="allprof" border="2" align="center">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Dept</th>
                      <th>Applicant Name</th>
                      <th>Applicant ID</th>
                      
  
                    </tr>
                  </thead>
                      <tbody>
                      <?php
                        $dbhost = "localhost";
                                $dbuser = "root";
                                $dbpass = "";
                                $dbname = "leave_management";
                                mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
                                mysql_select_db($dbname) or die('database selection problem');
                      $sql="SELECT * FROM application";
                      $result_set=mysql_query($sql);
                      while($row=mysql_fetch_array($result_set)){
                      
                        ?>

                                        <tr >
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['dept'] ?></td>
                                            <td><?php echo $row['Applicant_name'] ?></td>
                                            <td><?php echo $row['Applicant_id'] ?></td>
                                        </tr>
                                       <?php
                    }
                     ?>
                                    </tbody>
      </table>


      <html>
      <link href = "adminpanel.css" type = "text/css" rel = "stylesheet" />

      <br>

        <div align="center" id="choice">
          <form action = "request_proess.php" method = "post"> 
              <input type="text" name="userid" id="choiceid" placeholder="Input user id">
              <input type="submit" id="acp" value = "Accept">
              <a href="adminpanel.php"><input type="button" id="rej" value = "Reject"></a>
          </form>  
        </div>



      </html>