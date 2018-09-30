<h2><?=$title?></h2>
This is About

<?php foreach ($posts as $post) :?>
<h3><?php echo $post['title'];?></h3>
<small class="post-date">Posted on: <?php echo $post['created_at'];?></small><br>
<?php echo $post['body'];?>b
<?php endforeach;?>
	