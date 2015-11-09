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
                    <img src="http://dummyimage.com/750x400/000/fff">
                    <h1><?= get_the_title();?></h1>
                    <div class="date">
                        <?= get_the_date();?>
                    </div>
                    <p>
                        <?php the_content();?>
                    </p>
                    <footer>
                        <h3>Related articles:</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="http://dummyimage.com/400x400/00f/fff">
                                <h4>Article name</h4>
                            </div>
                            <div class="col-md-4">
                                <img src="http://dummyimage.com/400x400/00f/fff">
                                <h4>Article name</h4>
                            </div>
                            <div class="col-md-4">
                                <img src="http://dummyimage.com/400x400/00f/fff">
                                <h4>Article name</h4>
                            </div>
                        </div>
                    </footer>
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