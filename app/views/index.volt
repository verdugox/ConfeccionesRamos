<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Confecciones Ramos</title>
        <!-- START CSS -->
        {% include "layouts/header.volt" %}
        <!-- END CSS -->
        <!-- START SCRIPTS -->
        {% include "layouts/footer.volt" %}
        <!-- END SCRIPTS -->
    </head>
    <body>
        <div class="container">
            {{ content() }}
        </div>
    </body>
</html>
