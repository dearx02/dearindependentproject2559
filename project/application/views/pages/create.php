<h2>Create a news item</h2>
<?php echo validation_errors(); 
	//echo $error;
?>
<?php //echo form_open_multipart('http://localhost/code/index.php/pages/create') ?>
<!--<form action="" method="post">-->
<form action="http://localhost/code/index.php/pages/create" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<label for="title">Title</label>
	<input type="input" name="title" /><br/>
	<label for="text">Text</label>
	<textarea name="text"></textarea><br/>
	<label for="file">upload file</label>
	<input type="file" name="userfile[]" multiple><br>
	<input type="submit" name="submit" value="Create news item" />
</form>