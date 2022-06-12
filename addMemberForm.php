<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Library Database</h2></center>

    <form action="addMember.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
         
            <tr>
            <td> Enter Name :</td>
            <td> <input type="text" name="name" size="48"> </td>
            </tr>
            <tr>
            <td> Enter date today :</td>
            <td> <input type="text" name="date" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Address: </td>
            <td> <input type="text" name="address" size="48"> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>