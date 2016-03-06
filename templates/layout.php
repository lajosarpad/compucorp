<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo Project::current()->getCSS();
    echo Project::current()->getJavascript();
    ?>
    </head>
    <body>
    <?php
    $view = Project::current()->getView(URLHandler::get("project", "Weather"), $params);
    $view->display(URLHandler::get("template", "main"));
    ?>
    </body>
</html>