<?php
session_start(); 
$empty = false;
$wrong = false;
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
$conn = new mysqli('localhost', 'youarefc_piyush', 'despacito', 'youarefc_main');
if(isset($_SESSION['login']) && $_SESSION['login'] == true){
}
else {
    // print_r($_POST);
    // $url = "index.php";
    // ob_start();
    // header('Location: '.$url);
    // ob_end_flush();
    // die();
}
$company_email = $_POST['email'];
$company_password = $_POST['pass'];



if(isset($_POST['email'])){
    if (isset($_POST['email']) && isset($_POST['pass']) ){
        
        $sql = "SELECT company_id FROM companies WHERE company_id = '$company_email' AND password = '$company_password' ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0){

            $_SESSION['login'] = "true";
            $_SESSION['company_id'] = $company_email;
            $url = "http://www.youaref.biz/index.php";
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
                        // echo "login";

            die("should have redirected by now");
        }
        else{
            $wrong = true;
        }
    }
    else {

        echo "mptisset";
        $empty = true;
    }
}
if(isset($_SESSION['login'])){

    echo $_SESSION['login'];
}
$conn->close();
?>

<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">

<Style>
.wrapper {    
    margin-top: 80px;
    margin-bottom: 20px;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</Style>

<div class = "container">
    <div class="wrapper">
        <form action="" method="post" name="Login_Form" class="form-signin" style="background-color: #fad30a">       
              <img src="resources/img/YOUAREF.png" alt="You are F" style="width:130px; height:130px; display:block; margin:auto; margin-bottom:20px">
              <input type="text" class="form-control" id="email" name="email" placeholder="Company Id" required="" autofocus="" />
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required=""/>            
             
              <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" style="background-color:black">Login</button>            
        </form>         
    </div>
</div>