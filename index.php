<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>My_H5AI</title>
        <link href="Styles/style.css" rel="stylesheet">
    </head>
    <body>

        <div class="arrow-bow">
            <span>&#8249;</span>
            <span>&#8250;</span>
        </div

        <?php
            $path = './';
            if(isset($_GET['path'])) {
                $path = $_GET['path'];
            }
            echo $_GET['path'].'<br>';
            $dir = scandir($path);

            $icon= array(
                "dir" => "./img/folder-solid.svg",
                ".php" => "./img/php-brands.svg",
                ".html" => "./img/html5-brands.svg",
                ".txt" => "./img/txt-brands.svg",
            );
            echo '<table><tr><td>Name</td><td>Size</td><td>Last modification</td></tr>';
            foreach ($dir as $path) {
                echo '<tr>';
                echo '<td><a href="'.$path.'">'.$path.'</a></td>';
                echo '<td>'.filesize($path).'   octet(s)</td>';
                echo '<td>'.date("d/m/Y H:i:s.",filectime($path)).'</td>';
                echo '</tr>';
            }
            echo '</table>';

        ?>
    <script src="./Scripts/directionArrow.js"></script>
    </body>
</html>
