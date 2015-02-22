<?php get_header(); ?>

			<section id="corpo" class="col-md-9 talklab">
				<?php
				$args = array (
					'post_type'              => 'talklab',
					'posts_per_page'         => '1',
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				?>
				<article>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<a href="<?php the_permalink(); ?>#disqus_thread" class="btn btn-default btn-block">
						Discussione
						<span class="fa fa-comment"></span>
					</a>
				</article>
				<?php endwhile; else: ?>
				<article>
					<h2>Ops...</h2>
					<p>Qui non ci sono i droidi che state cercando!</p>
				</article>
				<?php 
				endif;
				wp_reset_postdata();
				?>

				<?php 

				$args = array (
					'post_type'              => 'talklab',
					'posts_per_page'         => '5',
					'offset'                 => '1',
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<article>
					<p class="metadata">
						<small><span class="fa fa-calendar"></span> Scritto il <?php the_time('d F Y'); ?></small>
						<small class="pull-right"><span class="fa fa-comments"> <?php comments_number('0','1','%'); ?></span></small>
					</p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-default">
						Slide e giudizi
						<span class="fa fa-chevron-right"></span>
					</a>
				</article>
				<?php endwhile; else: ?>
				<article>
					<h2>Ops...</h2>
					<p>Qui non ci sono i droidi che state cercando!</p>
				</article>
				<?php 
				endif;
				wp_reset_postdata();
				?>

				<section class="paginate">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					Pagina <?php echo($page); ?> di <?php echo($wp_query->max_num_pages); ?>
				</section>
			</section>

<?php get_footer(); ?>