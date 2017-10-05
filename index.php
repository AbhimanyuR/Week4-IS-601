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

$date = str_replace('-','/',$date);
echo "$date"."<br>"."<hr>";

if (strcmp($date,$tar) > 0)
echo "The future". "<br>"."<hr>";
elseif(strcmp($date,$tar) < 0)
  echo "The past". "<br>"."<hr>";
else
  echo "Oops". "<br>"."<hr>";
 
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

echo str_word_count($date)."<br>"."<hr>";

echo strlen($string)."<br>"."<hr>";

echo ord($string)."<br>"."<hr>";
 
echo substr($date, -2) ."<br>"."<hr>";


$dateArr = explode('/', $date);
$countArr = count ($dateArr);

for ($i = 0; $i < $countArr; $i++) 
    {
        print_r("$dateArr[$i]" . " ");
        echo "<br>"."<hr>";
      }


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
echo "<br>"."<hr>";

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