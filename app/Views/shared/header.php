<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title> Productgniter </title>

</head>

<body>
    <nav class="navbar navbar-dark bg-dark mb-0">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/'); ?>"> Productgniter </a>

            <span class="navbar-text">
                <span class="">
                    <a class="btn btn-sm btn-primary" href="<?= base_url('/produtos'); ?>">
                        Produtos
                    </a>
                </span>
                <span class="">
                    <a class="btn btn-sm btn-success" href="<?= base_url('/categorias'); ?>">
                        Categorias
                    </a>
                </span>
            </span>
        </div>
    </nav>
    <hr class="mt-0" style="border: 2px solid"/>