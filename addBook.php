<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Library Database</h2></center>
    <br>
 
    <?php
        include("libConnector.php");
 
        $bookID=$_POST["bookID"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $published=$_POST["published"];
		$genre=$_POST["genre"];
 
        $query = "INSERT INTO `Book` (`bookID`, `Title`, `Author`, `YearPublished`,`MainGenre`,'status') VALUES
		($bookID, '$title','$author',`$published`, '$genre','1')";
        $result = mysqli_query($db,$query);
    ?>
    <h3> Book added successfully! </h3>
 
    <a href="addMemberForm.php"> To add a member, click here </a>
	<br> <br>
	
 
</body>
</html>