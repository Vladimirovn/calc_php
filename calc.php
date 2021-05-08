<?php

    if ($_POST['submit']) {
        $a = (int)$_POST['first_value'];
        $b = (int)$_POST['second_value'];
        $action = $_POST['operation'];
        $result;
        if($action==='+')
            $result = $a + $b;
        elseif ($action==='-')
            $result = $a - $b;
        elseif ($action==='*')
            $result = $a * $b;
        elseif ($action==='/') {
            if ($b===0)
                echo "На ноль не делится";
            else $result = $a / $b;
        }  
    }
?>

<form method="post" action="">
    <input type="textbox" name="first_value" required>

    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="textbox" name="second_value" required>

    <input type="submit" name="submit">
</form>
<?php
       echo $result; 
?>    