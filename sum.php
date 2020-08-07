//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
<?php
function sum($a) {
    $result = $a * 2;
    echo $result;
};
sum(4);
?>

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
<?php
function f($a, $b) {
  return $a + $b;
};

$result = f(1,2);
echo $result;
?>

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
<?php
$arr = array (1,3,5,7,9);
function multiply ($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo multiply($arr);
?>

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
<?php
$arr = array (1,3,5,7,9);
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(1,3,5,7,9));
?>

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//（strip_tags）HTMLタグを含む文字列からタグを取り除くスクリプト
<?php
$str ="<h1>strip_tags関数</h1>"."<p>タグが取り除かれる</p>";
echo strip_tags($str);
?>

//（array_push）配列要素を追加する関数
<?php
$a = array(1,2,3);
array_push($a,4,5);
print_r($a);
?>

<?php
$b = array('A' => 1, 'B' => 2, 'C' => 3);
array_push($b,4,5);
print_r($b);
?>

//（array_merge）配列を結合する
<?php
$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];

$array = array_merge ($array1, $array2, $array3);
print_r($array);
?>

//time
<?php
echo '現在のUnixタイムスタンプ'.time();
?>

<?php
$timestamp = time();
echo date("Y/m/d", $timestamp);
?>

//（mktime）指定した日時のUNIXタイムスタンプを取得する関数
//（date）　日付/時刻フォーマット文字列
<?php
echo date('Y/m/d', mktime(0,0,0, date('m'),date('d')+30,date('Y')));
?>

