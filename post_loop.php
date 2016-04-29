<div class="deal clear"> 
				<h2>Latest Books</h2>
				<hr />

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
			
				<div class="deal-content">
					<?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?>		   
				   <p class="product-name clear"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				   <p class="product-price clear">Price:<?php echo get_post_meta($post->ID, 'Price', true);?></p>
				   <p class="product-view clear"><a href="#">See More Related Books</a></p>
				</div>
		
	
<?php endwhile; ?>
<?php endif; ?>


	</div> <!--  deal -->