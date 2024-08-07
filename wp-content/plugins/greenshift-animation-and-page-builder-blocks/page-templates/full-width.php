<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Greenshift Full Width
 *
 * @package greenshift
 * @since v.1.0
 *
 */
?>
<?php if (wp_is_block_theme()) : ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php if ( ! current_theme_supports( 'title-tag' ) ) : ?>
            <title><?php echo wp_get_document_title(); ?></title>
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_footer(); ?>
    </body>
</html>
<?php else : ?>
	<?php 
	get_header();
	while (have_posts()) : the_post();
		the_content();
	endwhile; // End of the loop.
	get_footer();
	?>
<?php endif; ?>