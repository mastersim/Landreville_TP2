<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>


	<div class="entry-content">
		<div class="wp-block-media-text alignwide" style="grid-template-columns:30% auto">
			<div class="wp-block-media-text__media">
			<?php
			
				$image = get_field('mon_image');
				$size = 'medium'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>
			</div>
			<div class="wp-block-media-text__content">
				<?php
					the_content();
				?>
			</div>
			<div class="heures">
				<p>Professeurs : <?php the_field('prof')?></p>

				<p>Nombres d'heures : <?php the_field('heure')?></p>
				
			</div>
			<div class ="projets">
				<p>Autres projets :</p>
				<?php
				
					/*$projet1 = get_field('projet1');
					$projet2 = get_field('projet2');
					$projet3 = get_field('projet3');
					$projet4 = get_field('projet4');

					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $projet1 ) {
						echo wp_get_attachment_image( $projet1, $size );
					}*/

					$image = get_field('projet1');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}

					
					$image = get_field('projet2');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}

					
					$image = get_field('projet3');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}

					
					$image = get_field('projet4');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
