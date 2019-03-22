<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OEpro</title>
    <link rel="stylesheet" href="project_CSS.css">
    <style>
    body {
    background-image: url(Calming-Wallpapers-HD-For-Desktop-620x388.jpg);
    height: 100%;

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>

<body>
  <div class="box" >
  <ul class="link_menu">
      <li><a href="ProjectMainPage.html">Home</a></li>
      <li><a href="OEpro_School_Of_Compute_%20And_Information_Technology.html">School Of Computer And Information Technology</a></li>
      <li> <a href="School_Of_Electrical_Electronics_And_Communication_Engineering.html">School Of Electrical Electronics And Communication Engineering</a></li>
      <li><a href="OEpro_school_of_%20civil_and_chemical_engineering.html">School Of Civil And Chemical Engineering</a></li>
      <li><a href="OEpro_school_of_automobile_mechanical_and_mechatronics.html">School Of Automobile Mechanical And Mechatronics</a></li>
</ul>
</div>
<div class="the_main_php">
  <?php

  $rNo = $_GET["registrationno"];
  $is_cgpa = $_GET["cgpa"];
  $even_odd = $_GET["Semister"];//ether Even or Odd
  $year=0;
  $iselogible=1;

    //-------------------------------------------------------------------------------------------------------------

// WORKING PERFECTLY
 function rno_if_valid($rNo)
{
  if(strlen($rNo)==9)
  {//1
    if($rNo[0]=="1")
    {//2
      $GLOBALS['isvalid'] = 1;
    }//2
    else
    {
      $GLOBALS['isvalid'] = 0;
      }
  }//1
  else
  {
    $GLOBALS['isvalid'] = 0;
      }
}

  //-------------------------------------------------------------------------------------------------------------

  // WORKING PERFECTLY
   function getyear($rNo)
{
  if($GLOBALS['isvalid']==1){
    if($rNo[1]=="8"&&$rNo[2]=="9"){
    $year=1;
    }
    elseif($rNo[1]=="7"&&$rNo[2]=="9")
    {
      $year=2;
    }
    elseif ($rNo[1]=="6"&&$rNo[2]=="9") {
      $year=3;
    }
    elseif ($rNo[1]=="5"&&$rNo[2]=="9") {
      $year=4;
    }
    else{
      $year=0;
      $GLOBALS['isvalid'] = 0;
    }
  }
  return $year;
}


  //-------------------------------------------------------------------------------------------------------------

  // WORKING PERFECTLY
 function getschool($rNo)
{
    if($GLOBALS['isvalid']==1){
      if($rNo[3]=="3" && $rNo[4]=="0") {//4.1
        $school = "School Of Compute Science And Information Technology";
      }
      elseif($rNo[3]=="2" && $rNo[4]=="0") {
        $school = "School Of Electrical Electronics And Communication Engineering";
      }
      elseif($rNo[3]=="4" && $rNo[4]=="0") {
        $school = "School of Automobile Mechanical And Mechatronics";
      }
      elseif ($rNo[3]=="1" && $rNo[4]=="0") {
        $school = "School of Civil and Chemical Engineering";
      }
      else {
        $GLOBALS['isvalid'] = 0;
              $school = null;
      }
  }
  return $school;
  //if registrationno is right
}


  //-------------------------------------------------------------------------------------------------------------

// WORKING PERFECTLY
 function got_the_school($year,$even_odd,$school,$is_cgpa)
{
  if($GLOBALS['isvalid']==1){
    if($school!=null){//4.2
        if($school=="School Of Compute Science And Information Technology"){
          ofAMM($is_cgpa,$year,$even_odd);
          ofCC($is_cgpa,$year,$even_odd);
          ofECEE($is_cgpa,$year,$even_odd);
        }
        elseif ($school=="School Of Electrical Electronics And Communication Engineering") {
          ofAMM($is_cgpa,$year,$even_odd);
          ofCC($is_cgpa,$year,$even_odd);
          ofCSIT($is_cgpa,$year,$even_odd);
        }
        elseif ($school=="School of Automobile Mechanical And Mechatronics") {
          ofCC($is_cgpa,$year,$even_odd);
          ofCSIT($is_cgpa,$year,$even_odd);
          ofECEE($is_cgpa,$year,$even_odd);
        }
        elseif($school=="School of Civil and Chemical Engineering"){
          ofAMM($is_cgpa,$year,$even_odd);
          ofCSIT($is_cgpa,$year,$even_odd);
          ofECEE($is_cgpa,$year,$even_odd);
      }
    }//4.2
  }
}


  //-------------------------------------------------------------------------------------------------------------

   function ofAMM($num,$year,$even_odd){
      echo ("<br><h2>School of Automobile Mechanical And Mechatronics</h2>");
      //-------------------------------------------------------------------------------------------------------------
      if($year==2 && $even_odd=="Odd"){
        if($num <= 10 && $num >=7){
          echo "<br>AU1491   Electrical and Hybrid Vehicle";
          echo "<br>ME1491   Introduction to Nanotechnology";
        }
        if($num<=10&&$num>=5){
          echo "<br>ME1492   Smart Materials";

        }
        if($num<=10&&$num>=4){
          echo "<br>AU1490   Fundamentals of Automobile Engineering";
          echo "<br>AU1492   Engine Emissions and Control";
        }
        if($num<4){
          echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
        }
      }
      //-------------------------------------------------------------------------------------------------------------
      elseif ($year==2 && $even_odd=="Even") {
          if($num<=10&&$num>=8.5){
            echo "<br>ME1592 Welding Technology";
            echo "<br>AU1690 Vehicle Maintenance and Garage practice";
          }
          if($num<=10&&$num>=6.5){
            echo "<br>ME1593 Modern Manufacturing";
            echo "<br>ME1594 Designing for Automation";
            echo "<br>AU1691 Automotive Safety Systems";
          }
          if($num<=10&&$num>=4){
            echo "<br>ME1595 Industrial Metrology";
            echo "<br>ME1596 Introduction to Computer Graphics";
            echo "<br>AU1692 Autotronics";
          }
          if($num<4){
            echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
          }
      }
      //-------------------------------------------------------------------------------------------------------------
      elseif ($year==3 && $even_odd=="Odd") {
        if($num<=10&&$num>=8.5){
          echo "<br>ME1692 Non-destructive Testing";
        }
        if($num<=10&&$num>=6.5){
          echo "<br>ME1693 Reliability, Availability and Maintenance Engineering";
          echo "<br>ME1695 Theory of Combustion and Emissions";
        }
        if($num<=10&&$num>=4){
          echo "<br>ME1694 Energy Conservation, Audit and Management";
          echo "<br>ME1696 Optimization in Engineering Design";
        }
        if($num<4){
          echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
        }
      }
      //-------------------------------------------------------------------------------------------------------------
      elseif ($year==3 && $even_odd=="Even") {
          echo "<br>NO OPEN ELECTIVE OFFERED";
      }
      //-------------------------------------------------------------------------------------------------------------
      else {
        echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
      }
  }//ofAMM


//-------------------------------------------------------------------------------------------------------------


   function ofCSIT($num,$year,$even_odd)
  {
    echo ("<br><h2>School Of Compute Science And Information Technology</h2>");
    //-------------------------------------------------------------------------------------------------------------
    if($year==2 && $even_odd=="Odd"){
      if ($num<=10&&$num>=8.5) {
        echo "<br>CS1490   Basics of Linux Programming";
        echo "<br>CS1492   Data Structures & Algorithms";
        echo "<br>CS1690   Web Technologies";
      }
      if ($num<=10&&$num>=7.5) {
        echo "<br>CS1491   OOPS using Java";
        echo "<br>CS1691   Soft Computing Techniques";

      }
      if ($num<=10&&$num>=6.5) {
        echo "<br>CS1493   Databases & ERP";
        echo "<br>CS1693   Introduction to Cyber Security";

      }
      if ($num<=10&&$num>=4) {
        echo "<br>CS1692   Numerical Methods in C";
      }
      if($num<4){
        echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
      }
    }
    //-------------------------------------------------------------------------------------------------------------
    elseif ($year==2 && $even_odd=="Even") {
      if($num<=10&&$num>=8.5){
        echo "<br>CS1594 Enterprise Resource Planning";
        echo "<br>IT1591 Introduction to Python Programming";
      }
      if($num<=10&&$num>=6.5){
        echo "<br>CC1590 Introduction to Web Technology";
        echo "<br>CC1591 Software Testing";
      }
      if($num<=10&&$num>=4){
        echo "<br>CS1593 Principles of Programing Languages";
        echo "<br>CC1590 Introduction to Web Technology";
        echo "<br>IT1590 Cryptography";
        echo "<br>CC1591 Software Testing";
      }
      if($num<4){
        echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
      }
    }
    //-------------------------------------------------------------------------------------------------------------
      elseif ($year==3 && $even_odd=="Odd") {
        if($num<=10&&$num>=8.5){
          echo "<br>CS1694 Process Mining";
          echo "<br>CS1698 Android Programming & App Development";
        }
        if($num<=10&&$num>=6.5){
          echo "<br>IT1692 Introduction to Data Science";
          echo "<br>IT1693 Advance Topics in Computing";
        }
        if($num<=10&&$num>=4){
          echo "<br>CC1690 Open Source Techniques";
          echo "<br>CC1691 Soft Computing Techniques";
        }
        if($num<4){
          echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
        }
      }
      //-------------------------------------------------------------------------------------------------------------
      elseif ($year==3 && $even_odd=="Even") {
        if($num<=10&&$num>=8.5){
          echo "<br>CS1790 Introduction to Data Mining";
        }
        if($num<=10&&$num>=6.5){
          echo "<br>CC1791 Introduction to Internet of Things";
        }
        if($num<=10&&$num>=4){
          echo "<br>IT1791 Introduction to Real Time System";
          echo "<br>IT1792 Information & Web Security";
        }
        if($num<4){
          echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
        }
      }
      //-------------------------------------------------------------------------------------------------------------
      else {
        echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
      }
  }//ofCSIT


//-------------------------------------------------------------------------------------------------------------


 function ofECEE($num,$year,$even_odd)
{
  echo ("<br><h2>School Of Electrical Electronics And Communication Engineering</h2>");
  //-------------------------------------------------------------------------------------------------------------
  if($year==2 && $even_odd=="Odd"){
    if($num<=10&&$num>=9){
      echo"<br>EE1491    Renewable Energy Sources";
    }
    if($num<=10&&$num>=8.5){
      echo"<br>EE1490    Energy Conversion Technologies";
    }
    if ($num<=10&&$num>=7.5) {
      echo"<br>EC1490   Introduction to Communication Systems";

    }
    if ($num<=10&&$num>=6.5) {
      echo"<br>EC1491   Transducers and Instrumentation";
      echo"<br>EC1493   Introduction to Microprocessors ";
      echo"<br>EE1492   Analog& Digital Circuits";

    }
    if ($num<=10&&$num>=4) {
      echo"<br>EC1492   Consumer Electronics";
      echo"<br>EE1493   Electrical Energy Systems";
    }
    if($num<4){
      echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
    }
  }
  //-------------------------------------------------------------------------------------------------------------
  elseif ($year==2 && $even_odd=="Even") {
    if($num<=10&&$num>=8.5){
      echo "<br>EC1590 Electronic Measurement & Measuring Instruments";
      echo "<br>EE1690 Electric Drives";
    }
    if($num<=10&&$num>=6.5){
      echo "<br>EC1591 Electronic Product Design& Packaging";
      echo "<br>EE1691 Industrial Automation & Control";

    }
    if($num<=10&&$num>=4){
      echo "<br>EC1592 Fundamentals of Image Processing";
      echo "<br>EE1692 Energy Auditing & Management";
      echo "<br>EE1693 Microprocessors & Microcontrollers";
    }
    if($num<4){
      echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
    }
  }
  //-------------------------------------------------------------------------------------------------------------
  elseif ($year==3 && $even_odd=="Odd") {
    if($num<=10&&$num>=8.5){
      echo "<br>EC1690 MEMS Technology";
      echo "<br>EC1694 Non- Conventional Energy Sources";
    }
    if($num<=10&&$num>=6.5){
      echo "<br>EC1691 Microcontrollers and Applications";
      echo "<br>EC1695 Audio and Video Systems";
    }
    if($num<=10&&$num>=4){
      echo "<br>EC1692 Electronic Product Design and Packaging";
      echo "<br>EC1693 Neural Network and Fuzzy Logic";
      echo "<br>EC1696 Optical Fiber Technology";
    }
    if($num<4){
      echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
    }
  }
  //-------------------------------------------------------------------------------------------------------------
  elseif ($year==3 && $even_odd=="Even") {
    echo "<br>NO OPEN ELECTIVE OFFERED";
  }
  //-------------------------------------------------------------------------------------------------------------
  else {
    echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
  }
}  //ofECEE


//-------------------------------------------------------------------------------------------------------------


 function ofCC($num,$year,$even_odd){
  echo ("<br><h2>School of Civil and Chemical Engineering</h2>");
  //-------------------------------------------------------------------------------------------------------------
  if($year==2 && $even_odd=="Odd"){
    if ($num<=10&&$num>=4) {
    echo "<br>CE1407   Heat Transfer Operations";
    echo "<br>CY1440 Physical and Analytical Chemistry Lab";
    }
    if($num<4){
      echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
    }
  }
  //-------------------------------------------------------------------------------------------------------------
  elseif ($year==2 && $even_odd=="Even") {
    if ($num<=10&&$num>=4) {
    echo "<br>CE1531 Transport Phenomena Lab";
    echo "<br>CE1532 Process Modeling and Simulation Lab";
    }
    if($num<4){
      echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
    }
  }
  //-------------------------------------------------------------------------------------------------------------
  elseif ($year==3 && $even_odd=="Odd") {
    if ($num<=10&&$num>=4) {
    echo "<br>CE1631 Transport Phenomena Lab II";
  }
    if($num<4){
      echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
    }
  }
  //-------------------------------------------------------------------------------------------------------------
  elseif ($year==3 && $even_odd=="Even") {
    echo "<br>NO OPEN ELECTIVE OFFERED";
  }
  //-------------------------------------------------------------------------------------------------------------
  else {
    echo "<br></h1>NOT ELIGIBLE FOR OPEN ELECTIVE</h1>";
  }
}//ofCC


//-------------------------------------------------------------------------------------------------------------
$temp = rno_if_valid($rNo);
$temp1= getyear($rNo);
$temp2= getschool($rNo);

if ($GLOBALS['isvalid']==0) {
echo "<br><h1>INVALID REGISTRATION NUMBER</h1>";}
else{
 got_the_school(getyear($rNo),$even_odd,getschool($rNo),$is_cgpa);
}
?>
</div>
</body>
</html>
