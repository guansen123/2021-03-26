<?php
  // print user name
  function name(){
      return "Peter";
  }
//caculate the score level
   function score($num){
      $level =intval($num/10);
         switch ($level){
            case 10:
            case 9:
             $j = "A";
             break;
            case 8:
              $j = "B";
              break;
            case 7:
               $j = "C";
              break;
            case 6:
              $j = "D";
              break;
            default:
              $j = "E";
         }
}

  // run program
  $name = name();
  $score = score(76);
  printf("姓名:%s","成績:%s 級"$name);
?>