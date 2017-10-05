<?php


$date =  date('Y-m-d', time());
echo 'The value of $date: '.$date.'<br>'.'<hr>';

$tar = "2017/05/24";
echo 'The value of $tar: '.$tar.'<br>'.'<hr>';

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of $year: ";
print_r($year);
echo '<br>'.'<hr>';

$string = "Hello Class";

echo 'Replace "-" with "/" in $date'. '<br>' .'<br>';
$date = str_replace('-','/',$date);
echo "$date"."<br>"."<hr>";


echo 'Compare $date with $tar'. '<br>' .'<br>';
if (strcmp($date,$tar) > 0)
echo "The future". "<br>"."<hr>";
elseif(strcmp($date,$tar) < 0)
  echo "The past". "<br>"."<hr>";
else
  echo "Oops". "<br>"."<hr>";
 
echo 'Search for "/" in $date and print out all positions'. '<br>' .'<br>';
$position1 = strpos ($date, '/', 0);
echo $position1 ." ";
$i=1;

while ($i>0)
{ $position2 = strpos ($date, '/', $position1 + 1);
   if ($position2 === false)
       break;
   else
  {       echo $position2. "<br>"."<hr>";
          $position1 = $position2;
  }
}   

echo 'Count the number of words in $date'. '<br>' .'<br>';
echo str_word_count($date)."<br>"."<hr>";

echo 'Return the length of a string'. '<br>' .'<br>';
echo strlen($string)."<br>"."<hr>";

echo 'Return the ASCII value of the first character of a string'. '<br>' .'<br>';
echo ord($string)."<br>"."<hr>";
 
 echo 'Return the last two characters in $date'. '<br>' .'<br>';
echo substr($date, -2) ."<br>"."<hr>";

echo 'Break $date into any array and set separator parameter as "/" and print'. '<br>' .'<br>';
$dateArr = explode('/', $date);
$countArr = count ($dateArr);

for ($i = 0; $i < $countArr; $i++) 
    {
        print_r("$dateArr[$i]" . " ");
        
      }
echo "<br>"."<hr>";


echo 'Loop through $year and identify whether each year is a loop year'. '<br>' .'<br>';
foreach ($year as $value) 
     {
        switch ($value % 4) 
        {
          case 0;
	    if (($value % 100) != 0 || ($value % 400) == 0) 
              {
	      echo 'true' . ' ';
	    } 
              else 
            {
	      echo 'false' . ' ';
	    }
	    break;

	    default;
	    echo 'false' . ' ';
        }
      }
echo "<br>";

$countArr = count($year);
      for ($i = 0; $i < $countArr; $i++) 
     {
        
       switch ($year[$i] % 4) 
     {
       case 0;
                  
	      if (($year[$i] % 100) != 0 || ($year[$i] % 400) == 0) 
            {
	              echo'true' . ' ';
	           } 
       else {
	              echo 'false' . ' ';
	           }
	    break;
	  
     default;
	             echo 'false' . ' ';
        }
      }
 ?>