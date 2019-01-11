

<?php
//second draft
  if(isset($_POST['convertTemp']) && isset($_POST['tEmp'])) {
    $convertTemp = $_POST['convertTemp'];
    $tEmp = $_POST['tEmp'];
    switch($convertTemp){
        case 'FtoC':
            $newTemp = (($tEmp - 32)* (5/9));
        	$theFormula = "Formula: (". $tEmp ."°F - 32)  x  (5 / 9) = " . number_format((float)$newTemp, 2, '.', '') . "°C";
            break;
        case 'FtoK':
           	$newTemp = (($tEmp - 32)* (5/9) + 273.15);
        	$theFormula = "Formula: (". $tEmp ."°F - 32)  x  (5 / 9) + 273.15 = " . number_format((float)$newTemp, 2, '.', '') . "K";
            break;
        case 'KtoF':
           	$newTemp = (($tEmp - 273.15)* (9/5) + 32);
        	$theFormula = "Formula: (". $tEmp ."K - 273.15)  x  (9 / 5) + 32 = " . number_format((float)$newTemp, 2, '.', '') . "°F";
            break;
        case 'KtoC':
           	$newTemp = ($tEmp - 273.15);
        	$theFormula = "Formula: ". $tEmp ."K - 273.15 = " . number_format((float)$newTemp, 2, '.', '') . "°C";
            break;
        case 'CtoK':
           	$newTemp = ($tEmp + 273.15);
        	$theFormula = "Formula: ". $tEmp ."°C + 273.15 = " . number_format((float)$newTemp, 2, '.', '') . "°F";
            break;
        case 'CtoF':
           	$newTemp = (($tEmp * 9/5) + 32);
        	$theFormula = "Formula: (". $tEmp ."°C  x (9 / 5)) + 32 = " . number_format((float)$newTemp, 2, '.', '') . "°F";
            break;      
    }
    $message = "<h2 align='center'>The initial temperature was " . $tEmp . " and the converted temperature is: " . number_format((float)$newTemp, 2, '.', '') . "</h2>";
  }
  
?>

<html>
        <body>
          <h1 align="center">Convert a Temperature</h1>
          <form align="center" method="POST">
            Enter the tempurature you wish to convert:<input type="number" name="tEmp"/> 
			
            <select name="convertTemp">
            	<option value="FtoC">Fahrenheit to Celsius</option>
                <option value="FtoK">Fahrenheit to Kelvin</option>
                <option value="KtoF">Kelvin to Fahrenheit</option>
                <option value="KtoC">Kelvin to Celsius</option>
                <option value="CtoK">Celsius to Kelvin</option>
                <option value="CtoF">Celsius to Fahrenheit</option>
			</select>
         
            <br>
            <br>
            <input type="submit" value="Convert Tempurature!">
            <?php echo $message; ?>
            <?php echo $theFormula; ?>
          </form>
          
          
        </body>
      </html>
      
