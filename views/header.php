<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" type="text/javascript" defer></script> 
    <title>PHP Hotel</title>
</head>
<body>
    <header class="container text-center my-3 text-uppercase">
        <h1>
           <em>PHP Hotel</em>
        </h1>
        <form action="index.php" method="GET">
            <select name="search">
                <option value="all">All</option>
                <option value="1">parcheggio trovato</option>
                <option value="0">parcheggio non trovato</option>
            </select>
            <button class="btn btn-primary" type="submit">search..</button>
        </form>
    </header>