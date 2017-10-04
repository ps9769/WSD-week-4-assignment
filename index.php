<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

//1&2
echo "<br></br><hr>";


$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

//3

echo "<br></br><hr>";

$p = strcmp($date,$tar);
if ($p>0)
 { 
  echo "the future";
 }
 elseif ($p<0)
 {
  echo "the past";
 }
elseif ($p=0)
 { 
  echo "Oops";
 }

//4

echo "<br></br><hr>";


$pos = strpos($date, "/");
$pos2  = strpos($date, "/", $pos + 1);
echo "<br />The position of the first and second / was $pos  $pos2";

//5

echo "<br></br><hr>";
echo str_word_count($date);

//6

echo "<br></br><hr>";
echo strlen($date);

//7

echo "<br></br><hr>";
echo ord($date);

//8

echo "<br></br><hr>";
echo substr($date,-2);

//9

echo "<br></br><hr>";
$tag= explode('/',$date);
foreach($tag as $tag)
{  
 echo $tag . " ";  
  }


//10

echo "<br></br><hr>";

foreach($year as $value)
 { 
   for ($i=0; $i<1;$i++)
       switch($value)
            {
                case(($value%4) ==0 and ($value%100)!=0 or ($value%400)==0):
                 echo $value. ' is  TRUE'.'<br>';
		 break;
		 default:
		 echo $value. ' is  FALSE'.'<br>';

	     }

}


?>
