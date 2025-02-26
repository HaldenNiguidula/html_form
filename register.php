<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="action_page.php" method="POST">
    <table border="1" cellpadding="20" cellspacing="5" width="60%">
        <tr>
            <td> <b><i>QUESTION</i></b> </td>
            <td> <b><i>ANSWER</i></b> </td>
        </tr>
        <tr>
            <td> <b><i>Name:</i></b> </td>
            <td> <input type="text" name="name" value="Halden"> </td>
        </tr>
        <tr>
            <td> <b><i>Gender:</i></b> </td>
            <td>
                <input type="radio" name="gender" value="male" checked> <b><i>Male</i></b> <br></br>
                <input type="radio" name="gender" value="female"> <b><i>Female</i></b>
            </td>
        </tr>
        <tr>
            <td> <b><i>Country:</i></b> </td>
            <td>
                <select name="country">
                    <option value="Select Country">--SELECT COUNTRY--</option>
                    <option value="PH" selected>Philippines</option>
                    <option value="AUS">Australia</option>
                    <option value="US">United States</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Save">
            </td>
        </tr>
    </table>
</form>
</body>
</html>