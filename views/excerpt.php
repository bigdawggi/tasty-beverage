<article id="post-excerpt-<?php the_ID(); ?>" <?php post_class('excerpt clearfix'); ?>>
	<div class="content"><?php the_excerpt(); ?></div>
	<div class="meta">
<?php
include('taxonomies.php');
?>
		<br />
		<a href="<?php the_permalink(); ?>"><?php the_time(); ?></a>
<?php
edit_post_link(__('Edit', 'rutter'));
?>
	</div>
</article>