<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forms</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="num1"/>
            <select name="op">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
            <input type="text" name="num2"/>
            <button type="submit" name="submit-btn">=</button>
            <?php
                if (isset($_POST['submit-btn'])) {
                    switch ($_POST['op']) {
                        case '+':
                            echo $_POST['num1'] + $_POST['num2'];
                            break;
                        case '-':
                            echo $_POST['num1'] - $_POST['num2'];
                            break;
                        case '*':
                            echo $_POST['num1'] * $_POST['num2'];
                            break;
                        case '/':
                            echo $_POST['num1'] / $_POST['num2'];
                            break;
                    }
                }
            ?>
        </form>
    </body>
</html>
