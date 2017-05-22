

<form name="import" method="post" enctype="multipart/form-data">
     <input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
</form>

<?php   
include 'dbh.php';
mysqli_set_charset($conn, "utf8");

if(isset($_POST["submit"]))
{
 $file = $_FILES['file']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 0;
 while(($filesop = fgetcsv($handle, 1000, ";")) !== false)
 {
	 $name = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[0]);
	 $surname = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[1]);
	 $title1 = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[2]);
	 $title2 = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[3]);
	 $ldapLogin = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[4]);
	 $photo = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[5]);
	 $room = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[6]);
	 $phone = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[7]);
	 $department = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[8]);
	 $staffRole = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[9]);
	 $function = iconv('cp1250','utf-8//TRANSLIT//IGNORE',$filesop[10]);

	 
	 $sql = "INSERT INTO zamestnanci (	name, surname, title1, title2, ldapLogin,photo,room,phone,department,staffRole,function)
	VALUES ('$name', '$surname', '$title1', '$title2', '$ldapLogin', '$photo', '$room', '$phone', '$department', '$staffRole', '$function' )";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
 }
}

?>