<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください//
function double($max){
  $result = 0;$result += $max * 2; 
  return $result;
  
}
 echo double(4) . "\n";
 
 //2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。//
 function f($a, $b) {
   $sum = $a + $b;return $sum;
   
 }
 $result=f(3,2);
 echo $result . "\n";
 
// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。/
function mul($arr) {
    $ret = 1;
    foreach($arr as $val) {
        $ret *= $val;
    }
    return $ret;
}
echo mul(array(1,3,5,7,9)) . "\n";



//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
 
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach ($arr as $a){
    if($a>$max_number){
      $max_number = $a;
    }
  }
  return $max_number;
}

