<?php get_header(); ?>
    
    <!-- hero -->
    <?php if ( have_rows( 'hero' ) ) : ?>
	<?php while ( have_rows( 'hero' ) ) : the_row(); ?>
    <section class="hero">
        <div class="inner">
            <div class="text">
                <h1><?php the_sub_field( 'h1' ); ?></h1>
                   <div class="bb">
                   <?php if ( have_rows( 'btn' ) ) : ?>
			       <?php while ( have_rows( 'btn' ) ) : the_row(); ?>
                       <a href="#" type="button" class="button"><?php the_sub_field( 'p' ); ?><img src="<?php $img = get_sub_field( 'img' ); echo $img['url']; ?>" alt="" class="arrow"></a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <a href="#" type="button" class="sign"><?php the_sub_field( 'btn1' ); ?></a>
                   </div>
            </div>
            <img src="<?php $path = get_sub_field( 'path' );echo $path['url']; ?>" alt="" class="path">
            <img src="<?php $tex = get_sub_field( 'tex' );echo $tex['url']; ?>" alt="" class="tex">
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end hero -->

    <!-- cards -->
    <?php if ( have_rows( 'cards' ) ) : ?>
	<?php while ( have_rows( 'cards' ) ) : the_row(); ?>
    <section class="cards">
        <h2><?php the_sub_field( 'h2' ); ?></h2>
        <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php $im = get_sub_field( 'im' );echo $im['url']; ?>" class="im" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php $cc = get_sub_field( 'cc' );echo $cc['url']; ?>" class="cc" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end cards -->

    <!-- founders -->
    <?php if ( have_rows( 'founders' ) ) : ?>
	<?php while ( have_rows( 'founders' ) ) : the_row(); ?>
    <section class="founders">
        <h2><?php the_sub_field( 'h2' ); ?></h2>
       <div class="slider">
       <?php if ( have_rows( 'found' ) ) : ?>
	   <?php while ( have_rows( 'found' ) ) : the_row(); ?>
        <div class="found">
            <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" class="img-fluid" alt="">
            <p><?php the_sub_field( 'p' ); ?></p>
            <?php if ( have_rows( 'btn2' ) ) : ?>
	        <?php while ( have_rows( 'btn2' ) ) : the_row(); ?>
                <a href="#" type="button" class="b"><?php the_sub_field( 'p1' ); ?> <img src="<?php $im = get_sub_field( 'im' );echo $im['url']; ?>" alt="" class="left"></a>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
       </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end founders -->

    <!-- join -->
    <?php if ( have_rows( 'join' ) ) : ?>
	<?php while ( have_rows( 'join' ) ) : the_row(); ?>
        <section class="join">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="j">
                    </div>
                    <div class="col-md-6">
                    <?php if ( have_rows( 'text1' ) ) : ?>
			        <?php while ( have_rows( 'text1' ) ) : the_row(); ?>
                        <div class="text1">
                            <h3><?php the_sub_field( 'h3' ); ?></h3>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <?php if ( have_rows( 'btn' ) ) : ?>
			                <?php while ( have_rows( 'btn' ) ) : the_row(); ?>
                                <a href="#" type="button" class="buttons"><?php the_sub_field( 'p' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="arrows"></a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end join -->

    <!-- investor -->
    <?php if ( have_rows( 'investor' ) ) : ?>
	<?php while ( have_rows( 'investor' ) ) : the_row(); ?>
    <section class="investor">  
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <?php if ( have_rows( 'text_2' ) ) : ?>
			    <?php while ( have_rows( 'text_2' ) ) : the_row(); ?>
                    <div class="text2">
                        <h3><?php the_sub_field( 'h3' ); ?></h3>
                    <p><?php the_sub_field( 'p' ); ?></p>
                    <a href="#" type="button" class="inn"><?php the_sub_field( 'btn' ); ?> <img src="<?php $im = get_sub_field( 'im' ); echo $im['url']; ?>" alt="" class="aa"></a>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="pp">
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end investor -->

    <!-- explore -->
    <?php if ( have_rows( 'explore' ) ) : ?>
	<?php while ( have_rows( 'explore' ) ) : the_row(); ?>
    <section class="explore">
        <h2><?php the_sub_field( 'h2' ); ?></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <?php if ( have_rows( 'ask' ) ) : ?>
	                <?php while ( have_rows( 'ask' ) ) : the_row(); ?>
                    <div class="ask">
                        <p><?php the_sub_field( 'p' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="line"></p>
                        <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="rec">
                    </div>
                    <div class="ask">
                        <p class="e"><?php the_sub_field( 'e' ); ?></p>
                        <p><?php the_sub_field( 'p' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="line"></p>
                        <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="rec">
                    </div>
                    <div class="ask">
                    <p><?php the_sub_field( 'p' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="line"></p>
                    <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="rec">
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>

                <div class="col-md-6">
                <?php if ( have_rows( 'ask1' ) ) : ?>
	                <?php while ( have_rows( 'ask1' ) ) : the_row(); ?>
                            <div class="ask1">
                                <p><?php the_sub_field( 'p' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="line"></p>
                                <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="rec">
                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end explore -->

    <!-- open -->
    <?php if ( have_rows( 'open' ) ) : ?>
	<?php while ( have_rows( 'open' ) ) : the_row(); ?>
        <section class="open">
            <div class="open1">
                <h2><?php the_sub_field( 'h2' ); ?></h2>
            <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="rect">
            <div class="slide">
            <?php if ( have_rows( 'icon' ) ) : ?>
	        <?php while ( have_rows( 'icon' ) ) : the_row(); ?>
                <div class="icon">
                    <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="">
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <img src="<?php $im = get_sub_field( 'im' ); echo $im['url']; ?>" alt="" class="a1" id="next1">
            <img src="<?php $im_copy = get_sub_field( 'im_copy' );echo $im_copy['url']; ?>" alt="" class="a2" id="next">
            </div>
            <img src="<?php $im_copy2 = get_sub_field( 'im_copy2' );echo $im_copy2['url']; ?>" alt="" class="ico">
            <img src="<?php $im_copy3 = get_sub_field( 'im_copy3' );echo $im_copy3['url']; ?>" alt="" class="icos">
        </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end open -->

    <?php get_footer(); ?>