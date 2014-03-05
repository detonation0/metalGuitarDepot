<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    MGD
                </h3>
                <a data-role="button" data-theme="e" href="mycart.php" class="ui-btn-right">
                    My Cart
                </a>
                <a data-role="button" data-theme="e" href="customerLogin.php" class="ui-btn-left">
                    Log in
                </a>
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="home.php" data-transition="fade" data-theme="c" data-icon="">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="guitars.php" data-transition="fade" data-theme="c" data-icon="">
                                Guitars
                            </a>
                        </li>
                        <li>
                            <a href="accessories.php" data-transition="fade" data-theme="c" data-icon="">
                                Accessories
                            </a>
                        </li>
                        <li>
                            <a href="aboutus.php" data-transition="fade" data-theme="c" data-icon="">
                                About us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-role="content">
            </div>
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                </h3>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>