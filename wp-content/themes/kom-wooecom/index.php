<!DOCTYPE html>
<html <?php language_attributes(  )?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(  ) ?>
</head>
<body <?php body_class(  ) ?>>
	<?php wp_body_open(  ) ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
		<?php the_title(  ) ?>
		<?php the_content(  ) ?>
	
	<?php endwhile; else: ?>
		<p>Записей нет</p>
	<?php endif; ?>

	<?php wp_footer(  ) ?>
</body>
</html>