<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/custom.css">
</head>
<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= get_site_url();?>">Simple Template</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="/work">Our work</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

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
                <h1>Sidebar</h1>
                <div class="block">
                    <img src="http://dummyimage.com/400x400/333/eee">
                </div>
                <div class="block">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="block">
                    <a href="#">Link</a>
                    <p>ASDASD ASD ASD AS DASD AS D</p>
                    <div>
                        <img src="http://dummyimage.com/400x400/333/eee">
                    </div>
                    <p>ASDASD ASD ASD AS DASD AS D</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        Copyrights &copy; 2015
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>