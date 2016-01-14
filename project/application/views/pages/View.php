<?php 
	echo '<h2>'.$news['title'].'</h2>';
	echo $news['text'];
	
 ?>	
 <?php foreach($img as $name ) : ?>
 	<figure>
		<img src="http://localhost/code/upload/<?php echo $name['img_name'] ; ?>" alt="<?php echo $news['text']; ?> ">
		<figcaption><?php echo $name['img_name']; ?></figcaption>
		
	</figure>
<?php endforeach ?>