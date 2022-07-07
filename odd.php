<html>  
<body>  
<form method="post">  
    Enter a number more than 5: 
    <input type="number" name="number">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php   
    if($_POST){  
        $number = $_POST['number'];   
        if($number <= 5){  
            echo "Please insert number that more than 5";  
        }else{  
            //List all the odd number more than 5
            echo "Odd number that more than 5 are: ";  
            for($i=7;$i<=$number;$i+=2)
            {
                echo " $i ";
            }
        }  
    }  
?>