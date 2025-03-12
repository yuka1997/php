<?php
function outputNumber($a)
{
    echo "引数の値は".$a."です";
    return;
}
outputNumber(2);
echo "<br />";
echo "<br />";
?>

<?php
function outputHello()
{
    echo "Hello world";
}
outputHello();
echo "<br />";
echo "<br />";
?>

<?php
function text($number1, $number2)
{
    $value=$number1+$number2;
    return $value;
}
$total=text(2,4);
echo $total;
echo "<br />";
echo "<br />";
?>

<?php
function addNumber($a, $b)
{
    $add=$a+$b;
    return $add;
}
$total=addNumber(2,3);
print $total;
echo "<br />";
echo "<br />";
?>

<?php
function score($score1, $score2, $score3)
{
    $total=$score1+$score2+$score3;
    if($total>210) {
        echo "合計点は".$total."なので合格です";
    } else {
        echo "合計点は".$total."なので不合格です";
    }
}
echo (score(80,60,90));
echo "<br />";
echo "<br />";
?>

<?php
function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height /2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase +$lowerBase) * $height / 2;
}
echo getSquareArea(5, 5)."\n";
echo getTriangleArea(7, 8)."\n";
echo getTrapezoidArea(4, 5, 4);
echo "<br />";
echo "<br />";
?>