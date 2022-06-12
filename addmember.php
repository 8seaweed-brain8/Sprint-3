<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Library Database</h2></center>
    <br>
 
    <?php
        include("libConnector.php");
 
        $name=$_POST["name"];
        $date=$_POST["date"];
        $address=$_POST["address"];
		$digits = 9;
		$memberID = rand(pow(10, $digits-1), pow(10, $digits)-1);
 
        $query = "INSERT INTO `Member` (`libraryID`, `Name`, `dateJoined`, `Address`) VALUES
		($memberID, '$name','$date', '$address')";
        $result = mysqli_query($db,$query);
    ?>
    <h3> Member added successfully! </h3>
 
    <a href="addBookForm.php"> To add a book, click here </a>
	<br> <br>

 
</body>
</html>