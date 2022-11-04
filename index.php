<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <h2><u>Employee Details </u></h2>=
    <form method="get" action="">
        <table>
        <tr>
            <td><label for="employee">Employee ID:</label></td>
            <td><input type="text" name="employee" id="employee" placeholder="Enter your id"></td>
        </tr>

        <tr>
            <td><label for="name">Employee Name:</label></td>
            <td><input type="text" name="name" id="name" placeholder="Enter your name"></td>
        </tr>

        <tr>
            <td><label for="address">Employee Address:</label></td>
            <td><input type="text" name="address" id="address" placeholder="Enter your address"></td>
        </tr>

        <tr>
            <td><label for="email">Employee Email:</label></td>
            <td><input require type="email" name="email" id="email" placeholder="Enter your email"></td>
        </tr>

        <tr>
            <td><label for="contact">Employee Contact NO:</label></td>
            <td><input type="text" name="contact" id="contact" placeholder="Enter your contact no."></td>
        </tr>

        <tr>
            <td><label for="date">Employee DOB:</label></td>
            <td><input type="date" name="employee" id="employee" placeholder="Enter your DOB"></td>
        </tr>

        <tr>
            <td><label for="salary">Employee Salary:</label></td>
            <td><input type="number" max="100000" min="10000" name="salary" id="salary" placeholder="Enter employee salary"></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" id="submit"></td>
        </tr>
        </table>
    </form>
</body>
</html>