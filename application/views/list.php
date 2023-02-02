<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Consulta Planilha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("") ?>">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">STATION</th>
            <th scope="col">AVAIL</th>
            <th scope="col">ACC CS</th>
            <th scope="col">RET CS</th>
            <th scope="col">CQI CS</th>
            <th scope="col">ACC PS</th>
            <th scope="col">RET PS</th>
            <th scope="col">CQI PS</th>
            
            </tr>
        </thead>
        <?php
            foreach ($data as $key => $value) {
        ?>
        <tbody>
            <tr>
            <th scope="row"></th>
            <td> <?= $value[0] ?></td>
            <td> <?= $value[1] ?></td>
            <td> <?= $value[2] ?></td>
            <td> <?= $value[3] ?></td>
            <td> <?= $value[4] ?></td>
            <td> <?= $value[5] ?></td>
            <td> <?= $value[6] ?></td>
            <td> <?= $value[7] ?></td>
            </tr>
            <tr>
        </tbody>
        <?php
            }
        ?>   
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>