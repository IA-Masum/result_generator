<?php

function get_result($array, $frtSub){

  $final_result;
  $fail = false;
  $totall_point = 0;
  $point = 0;
  $gpa = "F";

  foreach($array as $sub=>$num){

    if($num<33){
      $final_result[$sub] = "F";
      $sub == $frtSub ? $fail = false: $fail = true;
    }elseif($num>=33 && $num< 40){
      $final_result[$sub] = "D";
      $totall_point += 1;
    }elseif($num>=40 && $num< 50){
      $final_result[$sub] = "C";
      $totall_point += 2;
    }elseif($num>=50 && $num< 60){
      $final_result[$sub] = "B";
      $totall_point += 3;
    }elseif($num>=60 && $num< 70){
      $final_result[$sub] = "A-";
      $totall_point += 3.5;
    }elseif($num>=70 && $num< 80){
      $final_result[$sub] = "A";
      $totall_point += 4;
    }elseif($num>=80){
      $final_result[$sub] = "A+";
      $totall_point += 5;
    }
  }

  if($final_result[$frtSub] == "F"){
    $totall_point -=0;
  }elseif($final_result[$frtSub] == "C"){
    $totall_point -=1;
  }else{
    $totall_point -=2;
  }
  if(!$fail){
    $point = $totall_point / (count($array)  - 1);
    $point >= 5? $point = 5: $point = $point;
  }

  if( $point>=1 && $point < 2){
    $gpa = "D";
  }elseif($point>=2 && $point < 3){
    $gpa = "C";
  }elseif($point>=3 && $point < 3.5){
    $gpa = "B";
  }elseif($point>=3.5 && $point < 4){
    $gpa = "A-";
  }elseif($point>=4 && $point < 5){
    $gpa = "A";
  }elseif($point>5){
    $gpa = "A+";
  }

  $final_result["point"]=$point;
  $final_result["gpa"]=$gpa;

  return $final_result;
}