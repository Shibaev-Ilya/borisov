<pre>
<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		var_dump($_FILES);
		move_uploaded_file($_FILES["userfile"]["tmp_name"], 'uploaded/' . $_FILES["userfile"]["name"]);
	}
?>
<form action='upload.php' method='post' enctype='multipart/form-data'>
<input type='file' name='userfile'>
<input type='submit'>
</form>
