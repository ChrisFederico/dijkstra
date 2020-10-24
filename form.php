<?php include_once('./data.php'); ?>

<img src="http://localhost/img/dijkstra_example.png">

<form method="POST" action="dijkstra.php">
    <label for="departure">Partenza</label>
    <select id="departure" name="departure">
        <?php foreach($arrayAirports as $airport): ?>
        <option value=<?php echo $airport['codice']?>><?php echo $airport['nome'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="arrival">Arrivo</label>
    <select id="arrival" name="arrival">
        <?php foreach($arrayAirports as $airport): ?>
        <option value=<?php echo $airport['codice']?>><?php echo $airport['nome'] ?></option>
        <?php endforeach; ?>
    </select>

    <input type="submit"></input>
</form>