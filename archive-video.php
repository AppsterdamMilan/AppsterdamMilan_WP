<?php get_header(); ?>

			<section id="corpo" class="col-md-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<p class="metadata">
						<small><span class="fa fa-calendar"></span> Scritto il <?php the_time('d F Y'); ?></small>
						<small class="pull-right"><span class="fa fa-comments"> <?php comments_number('0','1','%'); ?></span></small>
					</p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php if ( has_post_thumbnail() ) { ?>
					<figure>
						<?php the_post_thumbnail(array(850,250)); ?>
					</figure>
					<?php } ?>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-default">
						Guarda il video
						<span class="fa fa-chevron-right"></span>
					</a>
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