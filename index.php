<?php get_header();?>

    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-md-8 main-content">
            <?php
            while(have_posts()) {
                the_post();
                ?>
                <article>
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large');
                    }
                    ?>
                    <h1><?= get_the_title();?></h1>
                    <div class="date">
                        <?= get_the_date();?>
                    </div>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                    <a href="<?= get_permalink();?>">read more</a>
                </article>
                <?php
            }
            ?>

            </div>
            <!-- Sidebar -->
            <div class="col-md-4 sidebar">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
<?php get_footer();?>