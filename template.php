<?php
/**
 * Template Name: test_template;
 * 
 */
get_header(); 
?>
 <div class="container">
        <div class="row">
         <!-- Main content -->
            <div class="col-md-8 main-content">
             <article>
             <img src="http://dummyimage.com/400x400/333/eee">
             <h1>hello</h1>
             	<p>
             		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             	</p>
             </article>

            </div>
            <!-- Sidebar -->
            <div class="col-md-4 sidebar">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
       <?php get_footer();?>