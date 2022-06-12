<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Library Database</h2></center>

    <form action="addBook.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter book ID with 5 characters :</td>
            <td> <input type="number" name="bookID" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <tr>
            <td> Year Published: </td>
            <td> <input type="text" name="published" size="48"> </td>
            </tr>
			<td> Genre: </td>
            <td> <input type="text" name="genre" size="48"> </td>
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