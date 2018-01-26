<?php

function generatePage($body, $title="Example", $css=" ", $js= " ") {
    $page = <<<EOPAGE
<!doctype html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>$title</title>
        <link rel="stylesheet" href="$css" type="text/css" />
        <script src="$js"></script>
    </head>
            
    <body>
            $body
    </body>
</html>
EOPAGE;

    return $page;
}
?>