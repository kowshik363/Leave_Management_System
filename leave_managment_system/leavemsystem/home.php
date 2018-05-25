<?php 
  session_start();
     
  if( $_SESSION['sourov']!='sourov'){

    header('location:login.php');
  }
?>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("leave_management", $connection); // Selecting Database from Server
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }






if(isset($_POST['submit']))
{

 // Fetching variables of the form which travels in URL
$bivag = $_POST['bivag'];
$applicant_name = $_POST['applicant_name'];
$applicant_id = $_POST['applicant_id'];
$applicant_occu=$_POST['applicant_occu'];
$Start_day=$_POST['Start_day'];
$end_day=$_POST['end_day'];
$no_of_day=$_POST['no_of_day'];
$addition_day=$_POST['addition_day'];
$leave_reason = $_POST['leave_reason'];
$address=$_POST['address'];

$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$fifth=$_POST['fifth'];
$sixth=$_POST['sixth'];

$date=$_POST['date'];
$signature=$_POST['signature'];



//Insert Query of SQL
$query = mysql_query("insert into application(dept,Applicant_name,Applicant_id,Applicant_occupation,Starting_day,Ending_day,No_of_day,Additional_day,Reason,Address,First,Second,Third,Fourth,Fifth,Sixth,Date,Signature) values ('$bivag', '$applicant_name', $applicant_id, '$applicant_occu', '$Start_day','$end_day','$no_of_day', '$addition_day', '$leave_reason', '$address', '$first', '$second', '$third', '$fourth', '$fifth', '$sixth', '$date', '$signature')");
if($query){

  echo "<br/><br/><span>Data Inserted successfully...!!</span>";
  session_start();
  $_SESSION['pasta']='pasta';

}
else{ 
  echo "<br/><br/><span>Data not Inserted ...!!</span>";

}
}



mysql_close($connection); // Closing Connection with Server
?>




<head>
<meta charset="UTF-8"/>
<title>Leave Management System</title>
<link href = "style.css" type = "text/css" rel = "stylesheet" />
<link href = "home.css" type = "text/css" rel = "stylesheet" />
<link href = "Login style.css" type = "text/css" rel = "stylesheet" />
<style type="text/css">
body {
  background-color: #bdc3c7;
}
</style>
</head>
<body>
<div id = "nav" >
   <div id = "nav_wrapper"></div>
    <ul>
      <li><a href = "home.php"> <img src="image/arrow.png" width="55" height="55"> </a>
      <ul>
               <li><a href = "home.php" title="home page of Leave Management System">Home</a></li>
               <li><a href = "profile.php" title="Profile page of the user">Profile</a></li>
               <li><a href = "notice.php"  title="Notice from the administrator">Notice</a></li>
               <li><a href = "about.php" title="Details of Leave Management System">About</a></li>
			         <li><a href = "contact.php" title="Contact information of the developer">Contact</a></li>  
               <li><a href="index.php" title="Logout">LOG-OUT</a></li>              
      </ul>
      </li> 
   </ul>
  </div>
  </div>


  <div class="calendar" id="calendar">

    <p id="caltxt">The Calendar Of The Current Month</p>


    <center>
      <script language="javascript" type="text/javascript">
      var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
      var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

      //  DECLARE AND INITIALIZE VARIABLES
      var Calendar = new Date();

      var year = Calendar.getFullYear();     // Returns year
      var month = Calendar.getMonth();    // Returns month (0-11)
      var today = Calendar.getDate();    // Returns day (1-31)
      var weekday = Calendar.getDay();    // Returns day (1-31)

      var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
      var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
      var cal;    // Used for printing

      Calendar.setDate(1);    // Start the calendar day at '1'
      Calendar.setMonth(month);    // Start the calendar month at now


      /* VARIABLES FOR FORMATTING
      NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
            tags to customize your caledanr's look. */

      var TR_start = '<TR>';
      var TR_end = '</TR>';
      var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=6495ED BORDERCOLOR=6495ED><TR><TD WIDTH=20><B><CENTER>';
      var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
      var TD_start = '<TD WIDTH="30"><CENTER>';
      var TD_end = '</CENTER></TD>';

      /* BEGIN CODE FOR CALENDAR
      NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your calendar's look.*/

      cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BGCOLOR=006400 BORDERCOLOR=00FFFF><TR><TD>';
      cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
      cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#00FFFF"><CENTER><B>';
      cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
      cal += TR_start;

      //   DO NOT EDIT BELOW THIS POINT  //

      // LOOPS FOR EACH DAY OF WEEK
      for(index=0; index < DAYS_OF_WEEK; index++)
      {

      // BOLD TODAY'S DAY OF WEEK
      if(weekday == index)
      cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

      // PRINTS DAY
      else
      cal += TD_start + day_of_week[index] + TD_end;
      }

      cal += TD_end + TR_end;
      cal += TR_start;

      // FILL IN BLANK GAPS UNTIL TODAY'S DAY
      for(index=0; index < Calendar.getDay(); index++)
      cal += TD_start + '  ' + TD_end;

      // LOOPS FOR EACH DAY IN CALENDAR
      for(index=0; index < DAYS_OF_MONTH; index++)
      {
      if( Calendar.getDate() > index )
      {
        // RETURNS THE NEXT DAY TO PRINT
        week_day =Calendar.getDay();

        // START NEW ROW FOR FIRST DAY OF WEEK
        if(week_day == 0)
        cal += TR_start;

        if(week_day != DAYS_OF_WEEK)
        {

        // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
        var day  = Calendar.getDate();

        // HIGHLIGHT TODAY'S DATE
        if( today==Calendar.getDate() )
        cal += highlight_start + day + highlight_end + TD_end;

        // PRINTS DAY
        else
        cal += TD_start + day + TD_end;
        }

        // END ROW FOR LAST DAY OF WEEK
        if(week_day == DAYS_OF_WEEK)
        cal += TR_end;
        }

        // INCREMENTS UNTIL END OF THE MONTH
        Calendar.setDate(Calendar.getDate()+1);

      }// end for loop

      cal += '</TD></TR></TABLE></TABLE>';

      //  PRINT CALENDAR
      document.write(cal);

      //  End -->
      </script>
    </center>


  </div>
  <div class="mainarea">
      <div class="main"> 
        <div  class="header">  
            <h1>চট্টগ্রাম প্রৌকশল ও প্রযুক্তি বিশ্ববিদ্যালয়</h1>
            <h3>চট্টগ্রাম-৪৩৪৯</h3>
            <hr/>
        </div>
        <form action="" method="post"> 
            <div class="form_header"> 
               <h1>শিক্ষকদের নৈমিত্তিক ছুটির জন্য আবেদনপত্র</h1>
               <h3><input type="text" name="bivag" >বিভাগ <br> <u> “মূল কপি / বিভাগীয় প্রধানের কপি”</u></h3>
            </div>
            <div class="form_area"> 
                <h3>১। আবেদনকারীর নামঃ <input type="text" name="applicant_name" > &nbsp &nbsp আইডীঃ<input type="text" name="applicant_id" > &nbsp &nbsp পদবীঃ<input type="text" name="applicant_occu" ></h3>
                <h3>২।ছুটির সময়কাল <input type="text" name="Start_day" > &nbsp &nbsp ইং হইতে<input type="text" name="end_day" > &nbsp &nbsp ইং পর্যন্ত মোট <input type="text" name="no_of_day" > &nbsp &nbsp দিন</h3>
                <h3>৩। সংযুক্ত সরকারী ছুটির দিনঃ  <input type="text" name="addition_day" ></h3>
                <h3>৪। ছুটি চাহিবার কারণঃ <input type="text" name="leave_reason" ></h3>
                <h3>৫। ছুটিতে থাকাকালীন যোগাযোগের ঠিকানাঃ <input type="text" name="address" ></h3>
                <div>
                  <table id="leavetab" cellpadding="10" border="1px solid red">
                    <h3>৬। ছুটি সময় ক্লাসগুলো নিম্নরূপে বন্দোবস্ত হইয়াছেঃ</h3>

                    <tr> 
                    <th>কোর্সের নং</th>
                    <th>চক্র/ডে</th>
                    <th>পিরিয়ড</th>
                    <th>-বিকল্প ব্যবস্থায় যিনি ক্লাশ নিবেন তাহাঁর নাম ও স্বাক্ষর</th>
                    <th>নিজের না হওয়া ক্লাশ অনুষ্ঠানের সম্ভাব্য স্মময়সূচী(চক্র/ডে)</th>
                    <th>নিজের না হওয়া ক্লাশ অনুষ্ঠানের সম্ভাব্য স্মময়সূচী(পিরিয়ড)</th>
            
                            <!--<td><td>চক্র/ডে</td>><td> <th>-চক্র/ডে</th>
                    <th>পিরিয়ড</th></td></tr>-->
              
                     </th>

                    </tr>

                    <tr> 
                    <td><input type="text" name="first"></td>
                    <td><input type="text" name="second"></td>
                    <td><input type="text" name="third"></td>
                    <td><input type="text" name="fourth"></td>
                    <td><input type="text" name="fifth"></td>
                    <td><input type="text" name="sixth"></td>
                    </tr>

                    
                  </table>

                  <h3>তারিখঃ <input type="text" name="date" > &nbsp ইং</h3>
                  <p id="applicant"><input type="text"  name="signature" ><br>আবেদনকারীর স্বাক্ষর </p>

                </div>
                <input id="apply" name="submit" type="submit"/>

                <!--

                <h3>৭।সুপারিশ করা হইল/ হইল না । আবেদনকারী ছুটিতে থাকাকালীন ক্লাশসমূহের বিষয়ে উপরে বর্ণিত ব্যবস্থার প্রতি দৃষ্টি রাখা হইবে এবং প্রয়োজনে যথাযথ বিকল্প ব্যবস্থা গ্রহণ করা হইবে ।</h3>
                <p><input type="text"  ><br>বিভাগীয় প্রধান</p>

                <h3>৮।আবেদনকারী এই আবেদনে বর্ণিত সময়ের পূর্ব পর্যন্ত  <input type="text"  > দিন নৈমিত্তিক ছুটি ভোগ করিয়াছেন এবং ভবিষ্যতে আরও  <input type="text"  >  দিন ছুটি পাইতে পারেন  ।</h3>
                <p><input type="text"  ><br>অফিস সহকারীর স্বাক্ষর</p> 

                <h3>৯। মঞ্জুর করা হইল/হইল না । </h3>
                <p><input type="text"  ><br>ভাইস—চ্যান্সেলর<br>-চট্টগ্রাম প্রৌকশল ও প্রযুক্তি বিশ্ববিদ্যালয়</p> 

                <h3>বিঃ দ্রঃ – এই ফরম ২ টি পূরণ করিয়া ১ (এক) কপি এবং ১ (এক) কপি মঞ্জুরের জন্য উপাচার্যের অফিসে পাথাইবেন । </h3>

                -->
             </div>
        </form>

      </div>
  </div>
</body>
</html>
