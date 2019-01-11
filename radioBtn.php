<!DOCTYPE html>
<html>
    <body>
        <?php
            /*
                If the user submitted the form, set the values to the 
                input from post
            */
            $val1 = "";
            $val2 = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                /*
                    'rad' is an array of input from both radio buttons
                    rad[i] is accessed by '$_POST["rad"][i]'
                */
                $val1 = $_POST["rad"][0];
                $val2 = $_POST["rad"][1];
            }
            /*
                If the user entered the page without submitting the form
                first, do nothing, leaving 'val1' and 'val2' as null values
            */
        ?>
        <form method="POST">
            <div id="group1">
                <!-- First group of radio buttons 'rad[0]' -->
                <lable>Group 1</lable>
                <input type="radio" name="rad[0]" value="a">A</input>
                <input type="radio" name="rad[0]" value="b">B</input>
            </div>
            <div id="group2">
                <!-- Second group of radio buttons 'rad[1]' -->
                <lable>Group 2</lable>
                <input type="radio" name="rad[1]" value="c">C</input>
                <input type="radio" name="rad[1]" value="d">D</input>
            </div>
            <input type="submit" value="Submit"></input>
        </form>
        <?php
            echo $val1 . "\n" . $val2;
        ?>
    </body>
</html>