<?php
// use PHPMailer\PHPMailer\PHPMailer; 
// use PHPMailer\PHPMailer\Exception; 
  
// require 'vendor/autoload.php'; 

//   if($_POST["name"]!=NULL)
//   {
// $mail = new PHPMailer(true); 
  
// try {      
//     // $mail->SMTPDebug = 3;                                  
//     $mail->isSMTP();                                             
//     $mail->Host       = 'smtp.gmail.com';                     
//     $mail->SMTPAuth   = 'XOAuth2';                              
//     $mail->Username   = 'oasismhss@gmail.com';                  
//     $mail->Password   = 'oasis@52233';                         
//     $mail->SMTPSecure = 'tls';                               
//     $mail->Port       = 587;   

    $name="'" .$_POST["name"] ."'";
    $gender="'" .$_POST["gender"]."'";
    $dob="'" .$_POST["dob"]."'";
    $cls="'" .$_POST["cls"]."'";
    $aadhar="'" .$_POST["aadhar"]."'";
    $emis="'" .$_POST["emis"]."'";
    $email="'" .$_POST["email"]."'";
    $mobile="'" .$_POST["phone"]."'";
    $fathername="'" .$_POST["fathername"]."'";
    $fatherocc="'" .$_POST["fatherocc"]."'";
    $mothername="'" .$_POST["mothername"]."'";
    $address="'" .$_POST["address"]."'";
    

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname="oasis";
 try {
    $conn = new PDO("mysql:host=$servername;dbname={$dbname}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    

    $sql=sprintf("INSERT INTO `admission`( 
        NAME,
        GENDER,
        DOB,
        `CLASS COMPLETED`,
        AATHAR,
        EMIS,
        EMAIL,
        MOBILE,
        `FATHER NAME`,
        `FATHER OCC`,
        `MOTHER NAME`,
        `ADDRESS`
        ) 
        VALUES
        (
        %s,
        %s,
        %s,
        %s,
        %s,
        %s,
        %s,
        %s,
        %s,
        %s,
        %s,
        %s)",
        $name,
        $gender,
        $dob,
        $cls,
        $aadhar,
        $emis,
        $email,
        $mobile,
        $fathername,
        $fatherocc,
        $mothername,
        $address    
  );

            $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


 
