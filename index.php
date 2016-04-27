<?php
    require 'vendor/autoload.php';

    $router = new AltoRouter();
    $router->addRoutes(array(
        array('GET', '/foca/', 'main'),
        array('GET', '/foca/server/', 'server'),
        array('GET', '/foca/client/', 'client'),
    ));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FocaMedia</title>
    <meta name="description" content="FocaMedia a multiplatform media library in streaming" />
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Spain" />
    <meta name="DC.description" content="FocaMedia - Multiplatform Media Library in Streaming" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.identifier" content="https://octal.es" />
    <meta name="DC.publisher" content="octal.es" />
    <meta name="DC.title" content="FocaMedia - Media Libary in Streaming" />
    <meta name="DC.type" content="Text" />

    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-schemes.min.css">
    <link rel="stylesheet" type="text/css" href="/foca/assets/css/app.css">
    <style type="text/css">
        #front-container {
            color: #F1F1F1;
            padding-top: 110px;
            text-align: center;
        }
        .panel {
            text-align: left;
        }
        .panel .content p {
            font-size: 16px;
            margin-top: 0px;
            min-height: 60px;
        }
        #row-donation {
            text-align: center;
        }
        .notify-container {
            top: unset;
            bottom: 8px;
            right: 8px;
        }
        .cell-explain {
            font-size: 18px;
            background-color: rgba(0, 0, 0, 0.42);
        }
        .cell-explain p {
            margin: 12px;
            text-align: left;
        }
    </style>
</head>
<body>

    <!-- Header -->
    
    <div class="app-bar darcula fixed-top" data-role="appbar">
        <div class="container">
            <a class="app-bar-element" href="/foca/">FocaMedia</a>
            <span class="app-bar-divider"></span>
            <ul class="app-bar-menu">
                <li>
                    <a href="" class="dropdown-toggle">How it works</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="#">Client</a></li>
                        <li><a href="/foca/server/">Server</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->


    <div class="container page-content">

        <?php
            $match = $router->match();

            if ($match && file_exists('views/'.$match['target'].'.php')) {
                include 'views/'.$match['target'].'.php';
            }
            else {
                echo 'Unable to find';
            }
        ?>

    </div>
</body>
</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/js/metro.min.js"></script>

<!-- Inline JS -->

<script type="text/javascript">
    $('a[href="#"]').click(function(event) {
        $.Notify({
            caption: 'Unavailable content',
            content: 'This resource is not ready yet...',
            type: 'warning',
            icon: "<span class='mif-warning'></span>"
        });
    });
</script>