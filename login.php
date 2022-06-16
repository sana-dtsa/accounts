<?php
    require_once 'conn.php';
    session_start();
    if(ISSET($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       // alert($password);
        //$password = 'my secret password';
        //$hash = password_hash($password, PASSWORD_DEFAULT);
       // if (password_verify($password, $hash)) {
           //     echo 'Password is valid!';
          //  } else {
           //    echo 'Invalid password.';
         //   }
        //$conn = mysqli_connect($host, $user, $password, $db_name);  
        $query = mysqli_query($conn, "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
 
        if($row > 0){
            $_SESSION['user_id']=$fetch['user_id'];
           // echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.location='./theme/index.php'</script>";
        }else{
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>window.location='UserLogin.php'</script>";
        } 
    }
?>
<?php
/* 
 require_once 'conn.php';
 //session_start();
//$login = false;
//$showError = false;
if(ISSET($_POST['login'])){
    //include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    echo "<script>alert($password)</script>";
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from login where username='$username'";
    $result = mysqli_query($conn, $sql);
    //$fetch = mysqli_fetch_array($result);

    $num = mysqli_num_rows($result);
    //$new=$fetch['password'];
   // echo "<script>alert($fetch)</script>";
    //echo "<h2 class='text-success'>".$num['password']."</h2>";
    if ($num > 0){
        
            if (password_verify($password,PASSWORD_DEFAULT)){ 
                $login = true;
                session_start();

                $_SESSION['loggedin'] = true;
                $_SESSION['user_id']=$fetch['user_id'];
                echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.location='home.php'</script>";
            } 
            else{
                
                echo "<script>alert('Login UnSuccessful!')</script>";
                echo "<script>window.location='index.php'</script>";
                $showError = "Invalid Credentials";
            }
        
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
*/?>