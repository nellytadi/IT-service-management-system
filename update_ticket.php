      <?php
 session_start();

    if(!isset($_SESSION['itname']))
      {
      header('location:'."itstafflogin.php");
      }

          $id=$_POST['e_id'];
          $name=$_POST['e_name'];
          $department=$_POST['e_department'];
          $problem=$_POST['e_problem'];
          $urgency=$_POST['e_urgency'];
          $device=$_POST['e_device'];
          $status=$_POST['e_status'];
          $my_date = date("Y-m-d H:i:s");
          $solution=$_POST['e_solution'];
          $id=$_POST['e_id'];
          $reporteddate=$_POST['e_date'];
          $ticket_closedby=$_POST['t_closedby'];

          require 'databaseconn.php';

          $id=mysqli_real_escape_string($conn,$id);
          $name=mysqli_real_escape_string($conn,$name);
          $department=mysqli_real_escape_string($conn,$department);
          $problem=mysqli_real_escape_string($conn,$problem);
          $urgency=mysqli_real_escape_string($conn,$urgency);
          $device=mysqli_real_escape_string($conn,$device);
          $status=mysqli_real_escape_string($conn,$status);
          $solution=mysqli_real_escape_string($conn,$solution);
          $ticket_closedby=mysqli_real_escape_string($conn,$ticket_closedby);

          $id=stripslashes($id);
          $name=stripslashes($name);
          $department=stripslashes($department);
          $problem=stripslashes($problem);
          $urgency=stripslashes($urgency);
          $device=stripslashes($device);
          $status=stripslashes($status);
          $solution=stripslashes($solution);
          $ticket_closedby=stripslashes($ticket_closedby);

          if($status=='open')
          {
           echo '<script>
           alert("please change ticket status");
           window.location="ittickettable.php";
            </script>';

          }

        if($status=='work in progress')
         {
                $result="SELECT email FROM user_login where name='$name'";
                $query=mysqli_query($conn,$result)or die('query failed');
                if($row=mysqli_fetch_array($query,MYSQLI_ASSOC))//use MYSQLI_NUM for $row[0],$row[1], and MYSQLI_BOTH for mix
                {
              $to=$row['email'];
              $subject='Ticket logged in status';
              $body='Your Ticket with ticket id '.$id.' has been logged in';
              $header='FROM: tadinelly@gmail.com';
              $mail=mail($to, $subject, $body,$header);
              if($mail){
                echo 'email has been sent successfully';
              }
              else{
                echo 'failure in sending email';
              }

                }
                
         }

        if($status=='closed')
      {
          $result="UPDATE ticket_info SET status= '$status' WHERE ticket_info . id= '$id';";
          $result.="UPDATE ticket_info SET solution= '$solution' WHERE ticket_info . id= '$id';";
          $result.="UPDATE ticket_info SET ticket_closeddate= '$my_date' WHERE ticket_info . id= '$id';";
          $result.="UPDATE ticket_info SET ticket_closedby= '$ticket_closedby' WHERE ticket_info . id= '$id';";

          $result.="UPDATE ticket_info SET SLA_status = TIMESTAMPDIFF(MINUTE,'$reporteddate','$my_date') WHERE ticket_info . id= '$id';";


          if($row=mysqli_multi_query($conn,$result))
          {
            echo "YOUR TICKET HAS BEEN CLOSED";
          }
          else{
            echo 'error closing ticket';
          }
        
      }
       
?>
