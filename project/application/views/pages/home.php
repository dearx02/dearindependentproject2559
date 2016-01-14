
<?php 

foreach ($news as $news_item): ?>
	<h2><?php echo $news_item['id']." ".$news_item['title'] ?></h2>
	<div class="main">
		<?php echo $news_item['text']; ?>		
	</div>

	<p><a href="<?php echo base_url()."pages/view/".$news_item['id']; ?>" title="<?php echo $news_item['slug']; ?>">View article</a> | <a href="<?php echo base_url()."pages/edit/".$news_item['slug']; ?>" title="edit news.">edit</a> </p>
	
<?php endforeach ?>

	<nav>
		<?php echo $page_link; ?>
	</nav>
