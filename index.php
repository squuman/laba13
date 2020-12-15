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
            <div class="col-md-5">
                <p class="lead">
                    <span class="card">
                        Формат входных данных <br>
                        Для работы требуется загрузить файл формата txt, где n - строчка отвечает за данные одного ребра,
                        <a href="/test.txt">пример файла</a>.
                        Стоит учесть, что если нет связи между двумя вершинами, то ставить значение "-".
                    </span>
                </p>
            </div>
            <div class="col-md-5">
                <form enctype="multipart/form-data" action="/functions/loadfile.php" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="userfile" type="file" /> <br> <br>
                    <input type="submit" value="Отправить файл" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>