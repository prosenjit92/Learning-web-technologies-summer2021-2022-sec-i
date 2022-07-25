<!DOCTYPE html>
<html>

<head>

    <title>Add Security Member</title>
</head>

<body>
    <style>
        body {
            background-image: url('../picture/img10.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
    <form action="../controller/securityChack.php" method="post" enctype="">
        <fieldset>
            <legend>Add Security Member</legend>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="" /></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age" value="" /></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="p_number" value="" /></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="male">Male</td>
                    <td><input type="radio" name="gender" value="female">Female</td>
                    <td><input type="radio" name="gender" value="other">Other</td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">

                    </td>
                    
                    
                </tr>
                <br>
                <td><a href="home.php">HOME</a></td>
            </table>

        </fieldset>
    </form>


</body>

</html>



