<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- For  Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- css -->
        <link rel="stylesheet" href="style.css">
        <!-- icon link -->
        <link rel="shortcut icon" type="image" href="img/icon.png">
        <!-- font google Links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Oswald:wght@600&family=Poppins:wght@700&family=Walter+Turncoat&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <title>CFCGI About</title>
    </head>
    <body>
        <?php require 'includes/header.php' ?>
        <?php require 'includes/community.php' ?>
        <!-- Footer -->
        <?php require 'includes/footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                //Modal Init
                $('.modal').modal({});
                // Floating Action Button Init
                $('.fixed-action-btn').floatingActionButton();
                // Dropdown Init
                $('.dropdown-trigger').dropdown({
                    closeOnClick: true,
                    autoTrigger: true,
                    hover: true,
                    outDuration: 1000,
                    inDuration: 800,
                    constrainWidth: true
                });
                // Tooltips Init
                $('.tooltipped').tooltip({
                    isHovered: true,
                    enterDelay: 300
                });
                // Slider Box Init
                $('.slider').slider({
                    indicators: false,
                    height: 580,
                    duration: 500,
                    interval: 5000
                });
                // Sidenav Init
                $('.sidenav').sidenav({
                    edge: 'left',
                    inDuration: 500,
                    outDuration: 1000
                });
                // Material Box Init
                $('.materialboxed').materialbox({
                    inDuration: 1000,
                    outDuration: 1000,
                    interval: 1000,
                    overlayActive: true,
                });
                // Prefilling Text Input
                M.updateTextFields();
            });
        </script>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>