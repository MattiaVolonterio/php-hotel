<?php require_once "./main.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- SCRIPT BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>
<div class="container">
    <h1 class="fw-bold text-center mt-3 mb-5">PHP HOTEL</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach($hotels as $hotel): ?>
        <tr>
            <td><?= $hotel["name"] ?></td>
            <td><?= $hotel["description"] ?></td>
            <td><?= $hotel["parking"] ? 'true' : 'false' ?></td>
            <td><?= $hotel["vote"] ?></td>
            <td><?= $hotel["distance_to_center"] . " km" ?></td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
    
</body>
</html>