<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Confecciones Ramos</title>

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!-- START CSS -->
        {% include "layouts/header.volt" %}
        <!-- END CSS -->
        <!-- START SCRIPTS -->
        {% include "layouts/footer.volt" %}
        <!-- END SCRIPTS -->
    </head>
    <body>
            {{ content() }}
    </body>
</html>
