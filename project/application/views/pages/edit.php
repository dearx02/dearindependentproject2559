<h2>Create a news item</h2>
<?php echo validation_errors(); ?>
<?php //echo form_open('pages/create') ?>
<form action="" method="post">
	<input type="hidden" name="slug" value="<?php echo $news['slug']; ?>">
	<label for="title">Title</label>
	<input type="input" name="title" value="<?php echo $news['title']; ?>" /><br/>
	<label for="text">Text</label>
	<textarea name="text"><?php  echo $news['text']; ?></textarea><br/>
	<input type="submit" name="submit" value="Create news item" />
</form>