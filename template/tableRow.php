<?php if (isset($hotel)): ?>

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

<?php endif; ?>