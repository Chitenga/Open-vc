<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/font/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <title>Open Vc</title>
</head>
<body>

    <!-- header -->
    <?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) : the_row(); ?>
    <header>
        <img src="<?php $logo = get_sub_field( 'logo' );echo $logo['url']; ?>" alt="" class="logo">
        <div class="hamburger">
            <span></span>
        </div>
        <ul class="menu">
            <li><a href="#"><?php the_sub_field( 'first_link' ); ?></a></li>
            <li><a href="#"><?php the_sub_field( 'first_link_copy' ); ?></a></li>
            <li><a href="#"><?php the_sub_field( 'first_link_copy2' ); ?></a></li>
            <li><a href="#" type="button" class="btn" ><?php the_sub_field( 'button' ); ?></a></li>
        </ul>
    </header>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end header -->