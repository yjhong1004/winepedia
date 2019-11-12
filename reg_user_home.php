<?php
	// Get all topics

	$topics = getAllTopics();

?>
<?php foreach ($topics as $topic): ?>
  <a
    href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
    <?php echo $topic['name']; ?>
  </a>
<?php endforeach ?>
