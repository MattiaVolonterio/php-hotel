<?php require_once "./main.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>

  <!-- LINK BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- SCRIPT BOOTSRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
    defer></script>
</head>

<body>
  <div class="container">
    <h1 class="fw-bold text-center mt-3 mb-5">PHP HOTEL</h1>

    <!-- FILTER FORM SECTION -->
    <form action="./index.php" method="GET">

      <div class="row mb-3">
        <!-- filtro per parcheggio -->
        <div class="col-6">

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="parking-select" name="parking-select" <?= $parking_filter ? "checked" : "" ?>>
            <label class="form-check-label" for="parking-select">
              Con Parcheggio
            </label>
          </div>

        </div>

        <!-- filtro per voto -->

        <div class="col-12 mt-3">
          <label for="hotel-vote" class="form-label ">Filtra per valutazione hotel</label>
          <input type="number" class="form-control" name="hotel-vote" id="hotel-vote" min="1" max="5"
            value="<?= $vote_filter ?>">
        </div>
      </div>

      <button class="btn btn-primary mb-3">Filtra</button>
    </form>

    <hr>

    <!-- TABLE SECTION -->

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
        <?php foreach ($hotels as $hotel): ?>
          <tr>
            <td>
              <?= $hotel["name"] ?>
            </td>
            <td>
              <?= $hotel["description"] ?>
            </td>
            <td>
              <?= $hotel["parking"] ? 'true' : 'false' ?>
            </td>
            <td>
              <?= $hotel["vote"] ?>
            </td>
            <td>
              <?= $hotel["distance_to_center"] . " km" ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

</body>

</html>