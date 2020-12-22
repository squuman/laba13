<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Laba13</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">
            <img src="/resource/831.gif" alt="">
        </div>
        <div class="col-md-4">
            <?php
            $uploaddir = __DIR__ . '/../files/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                print_r("<pre>");
                $graphArray = explode("\n",file_get_contents(__DIR__ .'/../files/' . $_FILES['userfile']['name']));
                $graph = [];
                foreach ($graphArray as $item) {
                    $itemArray = explode(' ',$item);
                    for ($i = 0; $i <= strlen($item); $i++) {
                        if ($itemArray[$i] == 0 or $itemArray[$i] == '') {
                            unset($itemArray[$i]);
                        }
                    }
                    $graph[] = $itemArray;
                }

                include __DIR__ .'/Dijkstra.php';
            } else {
                echo "Произошла ошибка, обратитесь к администрации\n";
                die;
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
