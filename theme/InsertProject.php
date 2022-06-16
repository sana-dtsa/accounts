<?php

// $servername = "localhost"; 
//    $user = "root";  
//     $password = '';  
//     $dbname = "accountsproject";  

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO project (Code, Desc,Year,Name,SchedulePassedBy)
//   VALUES ('John', 'Doe', 45,'67','676')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "New record created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;

include_once '../conn.php';

if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}

if(isset($_POST['save']))
{
  // $id=$_POST['id'];
    $code = $_POST['Code'];
    $desc = $_POST['Desc'];		
    $year = $_POST['Year'];
    $name = $_POST['Name'];
    $schedulePassedBy = $_POST['SchedulePassedBy'];

     $sql = "INSERT INTO project VALUES ('max(id)','$code', '$desc', '$year', '$name', '$schedulePassedBy')";
    
     if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Project has been added successfully !')</script>";
      echo "<script>window.location='./AddProject.php'</script>";
      //header("Refresh: 0',  url=addProject.php");
        //echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
   }











   
   if(isset($_POST['save']))
{
  // $id=$_POST['id'];
    $code = $_POST['Code'];
    $desc = $_POST['Desc'];		
    $year = $_POST['Year'];
    $name = $_POST['Name'];
    $schedulePassedBy = $_POST['SchedulePassedBy'];

     $sql = "INSERT INTO project VALUES ('max(id)','$code', '$desc', '$year', '$name', '$schedulePassedBy')";
    
     if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Project has been added successfully !')</script>";
      echo "<script>window.location='./AddProject.php'</script>";
      //header("Refresh: 0',  url=addProject.php");
        //echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
   }
?>

