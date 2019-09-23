<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do List App</title>

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <script>window.Laravel = { csrfToken: '<?php echo e(csrf_token()); ?>' }</script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" id='app'>
            <task-list></task-list>
        </div>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
