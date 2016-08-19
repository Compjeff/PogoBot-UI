<?php
$config = require '../../config.php';

require '../../autoloader.php';

$args = json_decode($_POST['args'], true);

$player = $args['player'];
$pokemons = $args['pokemons'];
$totalPokemons = 0;
foreach($pokemons as $pokemonId => $typeItems) {
    $totalPokemons += count($typeItems);
}

include __DIR__ . '/menu_player.php';
?>

<h3>
    Pokemons
    &dash;
    <small>
    <?php echo $totalPokemons; ?> / <?php echo $player['max_pokemon_storage']; ?>
    </small>
</h3>

<?php foreach(Pokemon::getGroupedData() as $groupItem): ?>
<div class="row">
    <?php foreach($groupItem as $pokemon): ?>
    <div class="col-md-4">
        <?php echo $pokemon->getName(); ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endforeach; ?>