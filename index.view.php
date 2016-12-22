<!DOCTYPE html>
<html>
    <head>
        <title>Laracasts</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Photo</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
        <div class="container">
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->isCompleted()) : ?>
                        <strike><?= $task->getDescription(); ?></strike>
                    <?php else: ?>
                        <?= $task->getDescription(); ?>
                    <?endif; ?>
                </li>
            <?php endforeach; ?>
        </div>
    </body>
</html>
