<?php
    $url = explode('/',$_SERVER['REQUEST_URI']);
    $Pkey = $url[3];
    // print_r($url);
    // print $Pkey;
    if ($Pkey) {
        $import = file_get_contents("key-routes.json");
        $keyRoutes = json_decode($import, true)['key-routes'];
        // print_r($keyRoutes);
        foreach ($keyRoutes as $index => $object) {
            if ($object['key'] === $Pkey) {
                // print_r($object['route']);
                header("Location: " . $object['route']); /* Redirect browser */
                exit();
            }
        }
        echo "No Match";
    }
    else {
        echo "No Slug";
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Index.php</h1>
    </body>
</html>