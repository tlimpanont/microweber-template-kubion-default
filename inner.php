<?php

/*

  type: layout
  content_type: static
  name: Post
  description: Post layout

*/

?>
<?php include TEMPLATE_DIR. "header.php"; ?>

<div class="container">
	<h1 class="post-title edit" rel="content" field="title">Welcome to my post</h1>
	<div class="blog-post edit" field="content" rel="content">
		<p>My post content</p>
	</div>
	<div class="blog-comments edit" field="post-comments" rel="content">
		<module type="comments" />
	</div>
	<div class="blog-sidebar edit" field="sidebar" rel="inherit"> My sidebar </div>
</div>
<?php include TEMPLATE_DIR. "footer.php"; ?>
