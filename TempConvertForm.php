<?php
  if(isset($_POST['convertTemp']) && isset($_POST['tEmp'])) {
    $convertTemp = $_POST['convertTemp'];
    $tEmp = $_POST['tEmp'];
    switch($convertTemp){
        case 'FtoC':
            $newTemp = (($tEmp - 32)* (5/9));
            break;
        case 'FtoK':
           $newTemp = (($tEmp - 32)* (5/9) + 273.15);
            break;
        case 'KtoF':
           $newTemp = (($tEmp - 273.15)* (9/5) + 32);
            break;
         case 'KtoC':
           $newTemp = ($tEmp - 273.15);
            break;
        case 'CtoK':
           $newTemp = ($tEmp + 273.15);
            break;
        case 'CtoF':
           $newTemp = (($tEmp * 9/5) + 32);
            break;      
    }
    echo "<h2 align='center'>The initial temperature was " . $tEmp . " and the converted temperature is: " . $newTemp . "</h2>";
  }
  else {
    echo'
      <html>
        <body>
          <h1 align="center">Convert a Temperature</h1>
          <form align="center" method="POST">
            Enter the tempurature you wish to convert:<input type="number" name="tEmp">

            <h2>Convert temperature from: </h2>

            <input type="radio" name="convertTemp" value="FtoC"> Farenheit to Celcius <br>
            <input type="radio" name="convertTemp" value="FtoK"> Farenheit to Kelvin <br>
            <input type="radio" name="convertTemp" value="KtoF"> Kelvin to Farenheit <br>
            <input type="radio" name="convertTemp" value="KtoC"> Kelvin to Celcius <br>
            <input type="radio" name="convertTemp" value="CtoK"> Celcius to Kelvin <br>
            <input type="radio" name="convertTemp" value="CtoF"> Celcius to Farenheit <br>

            <input type="submit" value="Convert Tempurature!">
          </form>
        </body>
      </html>
    ';
  }
?>