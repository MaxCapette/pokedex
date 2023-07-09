<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKÉDEX</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-red-700">

    <header>
        <nav class="bg-slate-50/80 rounded-2xl mx-4 my-3 px-3 py-2 text-red-700">
            <div class="flex justify-between items-center ">
                <h1>
                    <a class="" href="<?= $_ROUTER->generate('home'); ?>">Pokédex</a>

                </h1>

                <ul class="flex">
                    <li class="m-1 "><a href="<?= $_ROUTER->generate('list'); ?>">Liste</a></li>
                    <li class="m-1 "><a class="" href="">Types</a></li>
                </ul>
            </div>
        </nav>
        
    </header>

    <main class="flex justify-center">
        <div class="">