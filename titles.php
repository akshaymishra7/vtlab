<!DOCTYPE html>
<?php
echo session_status();
if($_POST)
{
  if($_POST['session_type']=="register")
  {
   require_once("registerprocess.php");
  }
  else if($_POST['session_type']=="login")
  {
    require_once("loginprocess.php");
  }
  else eecho("ERROR SESSION TYPE MISMATCH-- titles.php");
session_start();
$_SESSION["username"]=$_POST['name'];
echo session_status();
}
else
{
  header("Location: index.php");
  exit;
}
?>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Virtual Lab</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="images\dscelogo.png">
        <title>Virtual-Labs</title>
</head>
<body>

<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
   <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item
  </a> -->
</div>
</div>
<div id="toTop"><i class="chevron up icon"></i></div>
<div class="ui container" id="CardGrid">
  <div class="ui stackable grid">
    <div class="four wide column">
      <div class="ui raised card" id="car1">
       <div class="content" id="Card1">
      <div class="header">
            <a href="datastructures.php">
             Data Structures Laboratory
            </a></div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains 6 Programs with Applications On Data Structures in C Programming Language
           </span>
           <br><br>
           <a class="ui button" href="datastructures.php" >Go</a>
         </div>
      </div> 
    </div>
      
    <div class="four wide column">
        <div class="ui raised card" id="car2">
       <div class="content" id="Card2">
      <div class="header">
         <a href="OopsWithJava.php">
             OOPS With Java
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains concepts On Object Oriented Programming in Java
           </span>
           <br><br>
           <a class="ui button" href="OopsWithJava.php" >Go</a>
         </div>
    </div>
  </div>

    <div class="four wide column">
        <div class="ui raised card" id="car3">
       <div class="content" id="Card3">
      <div class="header">
         <a href="co.php" >
             Computer Organisation
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on Computer Organisation (CO)
           </span>
           <br><br>
           <a class="ui button" href="co.php" >Go</a>
         </div>
  
      </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car4">
       <div class="content" id="Card4">
      <div class="header">
         <a href="ld.php" >
             Logic Design
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on Logic Design (LD)
           </span>
           <br><br>
           <a class="ui button" href="ld.php" >Go</a>
         </div>
  
      </div>
      </div>
      
    <div class="four wide column">
        <div class="ui  raised card" id="car5">
       <div class="content" id="Card5">
      <div class="header">
         <a href="cn.php" >
             Computer Networks Laboratory
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains 12 Experiments On Computer Networks in Cisco Packet Tracer
           </span>
           <br><br>
           <a class="ui button" href="datastructures.php" >Go</a>
         </div>
  
      </div>
      </div>
      
      <div class="four wide column">
        <div class="ui raised card" id="car6">
       <div class="content" id="Card6">
      <div class="header">
         <a href="dbms.php" >
             Database Management Laboratory
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains 12 Experiments On Database Management in Oracle SQL
           </span>
           <br><br>
           <a class="ui button" href="dbms.php" >Go</a>
         </div>
  
      </div>
      </div>
  
      <div class="four wide column">
        <div class="ui raised card">
       <div class="content" id="Card7">
      <div class="header">
         <a href="english.php" >
             English Language
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on Learning the English Language better
           </span>
           <br><br>
           <a class="ui button" href="english.php">Go</a>
         </div>
  
      </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card">
       <div class="content" id="Card8">
      <div class="header">
         <a href="placement.php" >
             Pre-Placement Training
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains concepts which help students in Placements
           </span>
           <br><br>
           <a class="ui button" href="placement.php">Go</a>
         </div>
  
      </div>
      </div>
      
    
  </div>
    </div>
  </div>
  </div>
</body>
</html>