
 <!-- footer -->
 <?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
        <footer>
                <div class="foot">
                <?php if ( have_rows( 'found' ) ) : ?>
			    <?php while ( have_rows( 'found' ) ) : the_row(); ?>
                    <div class="found">
                        <h5><?php the_sub_field( 'h5' ); ?></h5>
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <p><?php the_sub_field( 'p_copy' ); ?></p>
                        <p><?php the_sub_field( 'p_copy2' ); ?></p>
                    </div>
                <?php endwhile; ?>
	         	<?php endif; ?>

                <?php if ( have_rows( 'found1' ) ) : ?>
			    <?php while ( have_rows( 'found1' ) ) : the_row(); ?>
                    <div class="found1">
                        <h5><?php the_sub_field( 'h5' ); ?></h5>
                        <a href="#"><?php the_sub_field( 'link' ); ?></a>
                        <a href="#"><?php the_sub_field( 'link_copy' ); ?></a>
                        <a href="#"><?php the_sub_field( 'link_copy2' ); ?></a>
                    </div>
                <?php endwhile; ?>
	         	<?php endif; ?>

                <?php if ( have_rows( 'found_copy' ) ) : ?>
			    <?php while ( have_rows( 'found_copy' ) ) : the_row(); ?>
                        <div class="found2">
                            <h5><?php the_sub_field( 'h5' ); ?></h5>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <p><?php the_sub_field( 'p_copy' ); ?></p>
                            <p><?php the_sub_field( 'p_copy2' ); ?></p>
                        </div>
                <?php endwhile; ?>
	         	<?php endif; ?>
                </div>
                <div class="me">
                    <img src="<?php $log = get_sub_field( 'log' );echo $log['url']; ?>" class="log" alt="">
                    <img src="<?php $l = get_sub_field( 'l' );echo $l['url']; ?>" alt="" class="l">
                    <p><?php the_sub_field( 'p' ); ?></p>
                </div>
            </footer>
    <?php endwhile; ?>
 <?php endif; ?>

    <?php wp_footer(); ?>
    
    <!-- end footer -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>