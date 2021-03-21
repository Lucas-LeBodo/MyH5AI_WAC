<html lang="fr">
    <head>
        <title>My_H5AI</title>
        <link href="/Projet/h5ai/Styles/style.css" rel="stylesheet"/>
        <link href="/Projet/h5ai/icon/favicon.ico" rel="icon"/>
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

            $iconArray= array(
                "" => "/Projet/h5ai/icon/dir-icon.png",
            );

            $iconDir = './icon';
            $icon = scandir($iconDir);
            foreach($icon as $img){
                $image = explode('-', $img);
                $iconArray[$image[0]] = "/Projet/h5ai/icon/".$image[0]."-icon.png";
            }

            $dir = scandir($path);
            echo '<table><tr><td></td></td><td>Name</td><td>Size</td><td>Last modification</td><td>Tag</td></tr>';
            for($i = 0; $i < count($dir); $i++) {
                $file = $dir[$i];
                $iconextent = pathinfo($file, PATHINFO_EXTENSION);
                $files = $path . '/' . $file;
                echo '<tr>';
                echo '<td><img src="' . $iconArray[$iconextent] . '" alt="icon"></td>';
                echo '<td><a href="' . $file . '">' . $file . '</a></td>';
                echo '<td>' . filesize($files) . '   octet(s)</td>';
                echo '<td>' . date("d/m/Y H:i:s.", filectime($files)) . '</td>';
                echo '<td><button class="add-tag" onclick="addTag()">+</button><span id="Tags"></span></td>';
                echo '</tr>';
            }
        ?>

        <script>
            function addTag(){
                let addTag = prompt('Quel tag souhaitez-vous ajouter ?');

                //document.getElementById("Tags").innerHTML = addTag;

                var count = <?php echo json_encode(count($dir))?>
                for(var i = 0; i > count; i++ ){
                    document.getElementById("Tags").innerHTML = addTag;
                }
            }
        </script>
    </body>
</html>
