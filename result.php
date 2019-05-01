<?php

require_once ("subjects.php");
require_once ("make_result.php");

// Compulsory Subjects Name
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

// Religion Subject Code;
$rlgnCode = $_REQUEST["rlgnCode"];

// Optional Subject Codes 
$opCode1 = $_REQUEST["opCode1"];
$opCode2 = $_REQUEST["opCode2"];
$opCode3 = $_REQUEST["opCode3"];

// Forth Subject Code
$frtCode = $_REQUEST["frtCode"];

// Getting Religion Subect Name;
$rlgnSub = getSubName($rlgnCode);

// Getting Optional Subjects Name
$opSub1 = getSubName($opCode1);
$opSub2 = getSubName($opCode2);
$opSub3 = getSubName($opCode3);

// Getting Fourth Subject Name
$frtSub = getSubName($frtCode);

// Religion Subect Number
$rlgnNum = $_REQUEST["rlgnNum"];

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
                   $rlgnSub=>$rlgnNum,
                   $opSub1=>$opNum1,
                   $opSub2=>$opNum2,
                   $opSub3=>$opNum3,
                   $frtSub=>$frtNum,
                  );

$result = get_result($num_array, $frtSub);
$sub_size = count($result) - 2;

$point = $result["point"];

?>

<!-- Result Page -->

<?php require_once("header.php")?>
<div class="container bg-dark text-white text-center py-4">
  <h2 class="display-4">Your Result</h2>
</div>
<div class="container py-4">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-dark text-white">
        <th scope="col">Subject</th>
        <th scope="col">Result</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $count = 0;
        foreach ($result as $sub => $grade) {
          if($count == $sub_size) break;
          $count++;
          ?>
      <tr class="<?php $grade == 'F' ? print "bg-danger text-white": print "" ?>">
        <th scope="row"><?php echo $sub ?></th>
        <td><?php echo $grade ?></td>
      </tr>

      <?php }?>
      <tr class="<?php $result['gpa'] == 'F' ? print "bg-danger": print "bg-dark" ?> text-white">
        <th scope="row">Final Result</th>
        <td><?php echo $result["gpa"]." "; printf("( %.2f )",$result["point"]); ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php require_once("footer.php")?>