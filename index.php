<?php get_header(); ?>

			<section id="corpo" class="col-md-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<button class="btn btn-default">
						Leggi tutto
						<span class="glyphicon glyphicon-chevron-right"></span>
					</button>
				</article>
				<?php endwhile; else: ?>
				<article>
					<h2>Ops...</h2>
					<p>Qui non ci sono i droidi che state cercando!</p>
				</article>
				<?php endif; ?>

				<section class="paginate">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					Pagina <?php echo($page); ?> di <?php echo($wp_query->max_num_pages); ?>
				</section>
			</section>

<?php get_footer(); ?>