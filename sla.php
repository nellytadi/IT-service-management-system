<?php
  //Here, when user clicks on link, we have to download the excel file directly, without showing the data
header("Content-type: application/octet-stream");  
//Now, we have to set the filename for downloading excel file
header("Content-Disposition: attachment; filename=ticket_info.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
require 'databaseconn.php';
$query = "SELECT * FROM ticket_info";  
$result = mysqli_query($conn, $query);  
  //Our table data row and columns are ready now. We have to define a new variable for header row, as shown in below code,
$columnHeader = '';  
# \t means new tab
$columnHeader ="ID" . "\t" . "NAME" . "\t" . "DEPARTMENT" . "\t". "PROBLEM" . "\t". "URGENCY" . "\t". "DEVICE" . "\t" . "TICKET REPORTED DATE" . "\t" . "STATUS" . "\t" . "SOLUTION" . "\t". "TICKET CLOSED DATE/TIME" . "\t". "SLA_DURATION TIME" . "\t". "TICKET CLOSED TIME" . "\t";  
  
$setData = '';  
  
while ($row = mysqli_fetch_row($result))
{  
    $rowData = ''; 
    //Now, we have to get the column wise data from the row. So, we write “for each” loop in while loop. 
    foreach ($row as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
//finally we print all the table row data and header data to the excel file.
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  
