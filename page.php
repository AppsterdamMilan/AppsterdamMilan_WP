<?php get_header(); ?>

			<section id="corpo" class="col-md-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<p><small>- <?php the_time('d F Y'); ?></small></p>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</article>
				<?php endwhile; else: ?>
				<article>
					<h2>Ops...</h2>
					<p>Qui non ci sono i droidi che state cercando!</p>
				</article>
				<?php endif; ?>

			</section>

<?php get_footer(); ?>