<?php
$a=5;

if($a===5) {
echo "\$aは5です";
}
echo "<br />";
?>

<?php
$a=7;

if($a===5) {
echo "\$aは５です";
}else{
echo "\$aは5以外です";
}
echo "<br />";
?>

<?php
$a=7;

if($a===5) {
echo "\$aは５です";
}elseif ($a===7){
echo "\$aは７です";
}else {
echo "\$aは５と７以外です";
}
echo "<br />";
?>

<?php
$people= "Saburo";

switch($people) {
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}
echo "<br />";
?>

<?php
$a=7;
$b = ($a>5) ? "TRUE" : "FALSE";
echo $b;
echo "<br />";
?>