<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
//Q1
//a
$foo = 'hello world!';
$upper = strtoupper($foo); 
//b            
$lower = strtolower($foo);     
//c
$cap = ucfirst($foo);     
//d
$cap2 = ucwords($foo);     

echo $upper;
echo '<br>';
echo $lower;
echo '<br>';
echo $cap;
echo '<br>';
echo $cap2;
echo '<br>';
?>

<?php
//Q2
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
echo '<br>';
?>

<?php
//Q3
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
echo '<br>';
?>

<?php
//Q4
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 
echo '<br>';
?>

<?php
//Q5
$mailid  = 'Orange@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
echo '<br>';
?>

<?php
//Q6
$str1 = 'Orange@example.com';
echo substr($str1, -3)."\n";
echo '<br>';
?>

<?php
//Q7
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7)."\n";
echo '<br>';

?>

<?php
//Q8
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
echo '<br>';
?>

<?php
//Q9
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo '<br>';
?>

<?php
//Q10
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
echo '<br>';
?>

<?php
//Q11
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo '<br>';
?>

<?php
//Q12
$sub_string = 'orange@';
$str = 'orange@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";
echo '<br>';
?>

<?php
//Q13
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
echo '<br>';
?>

<?php
//Q14
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";
echo '<br>';
?>

<?php
//Q15
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
echo '<br>';
?>

<?php
//Q16
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
echo '<br>';
?>

<?php
//Q17
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo '<br>';
?>

<?php
//Q18
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
echo '<br>';
?>

<?php
//Q19
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
echo '<br>';
?>

<?php
//Q20
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
echo '<br>';
?>

<?php
//Q21
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
echo '<br>';
?>

<?php
//Q22
for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x);
echo "\n"
?>

</body>
</html>