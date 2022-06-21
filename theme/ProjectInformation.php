<?php
include("../conn.php");

$db= $conn;
//$tableName="12_months_actual_expenditure_of_all_units_for_the_year_2018_2019";
//$columns= ['Objectcode'];


$tableName="project";
$tableName1="budget";
$columns1= [ 'budget_year'];
$columns= [ 'Code', 'Description','Year', 'Name', 'SchedulePassedBy'];
$fetchData = fetch_data($db, $tableName,$tableName1, $columns, $columns1);


function fetch_data($db, $tableName,$tableName1, $columns, $columns1){
 if(empty($db)){
   $msg= "Database connection error";
 }
 elseif (empty($columns && $columns1) ) {
   $msg="columns Name must be defined in an indexed array";
 }
 elseif(empty($tableName && $tableName1)){
   $msg= "Table Name is empty";
 }
 else{
   $columnName = implode(", ", $columns);
   $query = "SELECT ".$columnName." FROM $tableName ";
   //." ORDER BY id DESC";
   $result = $db->query($query);

   if($result== true){ 
   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg= $row;
   } else {
      $msg= "No Data Found"; 
   }
   }else{
   $msg= mysqli_error($db);
   }
   }
   return $msg;
}
?>