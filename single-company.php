<?php get_header();?>

    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-md-4">
                <?php get_template_part('partials/post', 'thumbnail');?>
                <?php
                $website = get_post_meta(get_the_ID(), 'website', true);
                $address = get_post_meta(get_the_ID(), 'address', true);
                ?>
                <?php if($website && $address):?>
                <div class="information">
                    <h2>Information:</h2>
                    <ul>
                        <?php if($website): ?>
                        <li>Website: <a href="<?= $website;?>" target="_blank"><?= $website;?></a></li>
                        <?php endif; ?>

                        <?php if($address): ?>
                        <li>Address: <?= $address;?></li>
                        <?php endif; ?>
                    </ul>
                    <hr>
                </div>
                <?php endif;?>
            </div>
            <div class="col-md-8 main-content">
            <?php
            while(have_posts()) {
                the_post();
                ?>
                <article>
                    <h1><?= get_the_title();?></h1>
                    <p>
                        <?php the_content();?>
                    </p>
                </article>
                <?php
            }
            ?>

            </div>
        </div>
    </div>
<?php get_footer();?>