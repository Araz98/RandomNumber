<?php

error_reporting(0);

$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 

?>

<html>
<form action="BOU.php" method="POST" >
    Value 1: <input type="text" name="num1" value = "<?php echo $num1 ?>" ><p>
    Value 2: <input type="text" name="num2" value = "<?php echo $num2 ?>" ><p>   
    <input type="submit" value="Randomize">
</form>
 
</html> 

<?php

$random = rand(1,10);

echo "The Random Number is : $random";

?>
