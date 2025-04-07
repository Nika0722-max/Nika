//завдання1
$a = 7
$b = 9
if ($a>$b) {
    $max = $a;
    $min = $b;
} else{
    $max = $a;
    $min = $b;
}
echo "Максимум: ".$max . "<br>";
echo "Мнімум: ".$min . "<br>"

//завдання 2
$number= [5, 10, 15, 20, 30];
$sum= array_sum($number);
$count = count($number);
$average = $sum / $count;
echo "Середнє арефметичне: ". $average;

//завдання3
$students = ["Антончик Вікторія"=>8, "Бондар Олександр"=>9, "Омельянчук Саша"=>10];
foreach($students as $name => $grade){
    if($grade>4){
        echo "Студент: $name, Середній бал: $grade<br>";
    }
}

//завдання 4
 $num = 12;
 if($num % 3 == 0) {
    echo "Число $num кратне 3. <br>"
 }  
 if($num % 5 == 0) {
    echo "Число $num кратне 5.<br>"
 }
 if($num % 3 !=0 && $num % 5 !=0){
    echo "Число $num не кратне 3 і не кратне 5.<br>"
 }

 //завдання5
 $number = 7
 echo "<table border ='1' cellpadding='5'>";
    for ($i = 1; $i <=10; $i++) {
        echo "<tr>";
        echo "<td>$number * $i<td>";
        echo "<td>" . ($number * $i) . "<td>";
        echo "</tr>";            
    }
    echo "</table>";