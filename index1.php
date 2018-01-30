<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">        <title>License Registration Page
           </title>
    </head>
    <body>
        <form method="post" action="test.php">

                    <table><tr>
                            <td>APPLICANT FIRST NAME</td>
                            <td><input type="text" name="afirst" required/></td>
                </tr>
                <tr>
                    <td>APPLICANT MIDDLE NAME </td>

                    <td><input type="text" name="amiddle"></td>

                </tr>
                <tr>
                    <td>APPLICANT LAST NAME</td>

                    <td><input type="text" name="alast" required/></td>
                </tr>
        <tr>
            <td>DATE OF BIRTH(B.S)</td>
            <td> <input type="date" name="dob" required></td>
        </tr>
        <tr>
            <td>AGE</td> <td><input type="number" name="age" required></td>
        </tr>
        <tr><td><input type="submit" value="Submit" /></td>
        </tr>
        </table>
        </form>

    </body>
</html>

