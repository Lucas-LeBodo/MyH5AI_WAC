<html lang="fr">
    <head>
        <title>My_H5AI</title>
        <link href="/Projet/h5ai/Styles/style.css" rel="stylesheet">
    </head>
    <body>

        <div class="arrow-bow">
            <span>&#8249;</span>
            <span>&#8250;</span>
        </div>

        <?php
            $path = '.';
            if(isset($_GET['path'])) {
                $path = $_GET['path'];
            }

            echo $path.'<br>';

            $icon= array(
                "" => "/Projet/h5ai/icon/dir-icon.png",
                "php" => "/Projet/h5ai/icon/php-icon.png",
                "git" => "/Projet/h5ai/icon/git-icon.png",
                "htaccess" => "/Projet/h5ai/icon/htaccess-icon.png",
                "png" => "/Projet/h5ai/icon/png-icon.png",
                "js" => "/Projet/h5ai/icon/js-icon.png",
                "css" => "/Projet/h5ai/icon/css-icon.png"
            );

            $dir = scandir($path);
            echo '<table><tr><td></td></td><td>Name</td><td>Size</td><td>Last modification</td></tr>';

            foreach ($dir as $path) {
                $iconextent = pathinfo($path, PATHINFO_EXTENSION);
                echo '<tr>';
                echo '<td><img src="'.$icon[$iconextent].'" alt="icon"></td>';
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
