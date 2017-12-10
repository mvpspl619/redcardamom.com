<?php $hide_zero_shares = ot_get_option('hide_zero_shares', 'off'); ?>
<footer class="post-links">
	<a href="<?php echo get_comments_link( $post->ID ); ?>" title="<?php the_title_attribute(); ?>" class="post-link comment-link"></a> 
	<aside class="share-article-loop post-link">
		<?php do_action('thb_social_article', $post->ID ); ?>
	</aside>
	<?php if ($hide_zero_shares === 'off' || thb_social_article_totalshares(get_the_ID()) !== '0') { ?>
	<span><?php echo thb_social_article_totalshares(get_the_ID()); ?> <?php _e('Shares', 'thevoux'); ?></span>
	<?php } ?>
</footer>