<?php

require_once ("subjects.php");
require_once ("make_result.php");

// Compulsory Subjects NameNum
$ban = "Bangla";
$eng = "English";
$ba1st = "Bangla I";
$en1st = "English I";
$ba2nd = "Bangla II";
$en2nd = "English II";
$gMath = "General Math";
$ict = "ICT";


// Compulsory Subjects Number
$bn1stNum = $_REQUEST["bn1stNum"];
$bn2ndNum = $_REQUEST["bn2ndNum"];
$en1stNum = $_REQUEST["en1stNum"];
$en2ndNum = $_REQUEST["en2ndNum"];
$gMathNum = $_REQUEST["gMathNum"];
$ictNum = $_REQUEST["ictNum"];

// Optional Subject Codes 
$opCode1 = $_REQUEST["opCode1"];
$opCode2 = $_REQUEST["opCode2"];
$opCode3 = $_REQUEST["opCode3"];

// Forth Subject Code
$frtCode = $_REQUEST["frtCode"]; 

// Getting Optional Subjects Name
$opSub1 = getSubName($opCode1);
$opSub2 = getSubName($opCode2);
$opSub3 = getSubName($opCode3);

// Getting Fourth Subject Name
$frtSub = getSubName($frtCode);

// Optional Subjects Number
$opNum1 = $_REQUEST["opNum1"];
$opNum2 = $_REQUEST["opNum2"];
$opNum3 = $_REQUEST["opNum3"];

// Fourth Subject Number
$frtNum = $_REQUEST["frtNum"];

// Bangla & English Number
$banNum = ceil(($bn1stNum + $bn2ndNum)/2);
$engNum = ceil(($en1stNum + $en2ndNum)/2);

$num_array = array($ban=>$banNum,
                   $eng=>$engNum,
                   $gMath=>$gMathNum,
                   $ict=>$ictNum,
                   $opSub1=>$opNum1,
                   $opSub2=>$opNum2,
                   $opSub3=>$opNum3,
                   $frtSub=>$frtNum,
                  );

$result = get_result($num_array, $frtSub);

$point = $result["point"];

echo $point."<br>";
printf("%.2f",$point);