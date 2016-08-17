<?php
$args = json_decode($_POST['args'], true);
$player = $args['player'];
$pokemons = $args['pokemons'];
$totalPokemons = 0;
foreach($pokemons as $pokemonId => $typeItems) {
    $totalPokemons += count($typeItems);
}
$items = $args['items'];
$totalItems = 0;
foreach($items as $itemId => $itemCount) {
    $totalItems += $itemCount;
}
?>
<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>User</label>
            <?php echo htmlentities($player['username']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Level</label>
            <?php echo $player['level']; ?>
            <small>
                <?php echo number_format($player['next_level_xp'] - $player['experience']); ?>
                to next level
            </small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Stardust</label>
            <?php 
            $amount = 0;
            foreach($player['currencies'] as $item) {
                if ( $item['name'] == 'STARDUST' ) {
                    if ( ! empty($item['amount']) ) {
                        $amount = $item['amount'];
                    }
                }
            }
            echo number_format($amount);
            ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Coins</label>
            <?php 
            $amount = 0;
            foreach($player['currencies'] as $item) {
                if ( $item['name'] == 'POKECOIN' ) {
                    if ( ! empty($item['amount']) ) {
                        $amount = $item['amount'];
                    }
                }
            }
            echo number_format($amount);
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Pokemon storage</label>
            <?php echo $totalPokemons, ' / ', $player['max_pokemon_storage']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Item storage</label>
            <?php echo $totalItems, ' / ', $player['max_item_storage']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Walked</label>
            <?php echo floor($player['km_walked']); ?>
            <small>km</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Eggs hatched</label>
            <?php echo $player['eggs_hatched']; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Pokedex</label>
            <?php echo $player['unique_pokedex_entries']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Encountered</label>
            <?php echo number_format($player['pokemons_encountered']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Captured</label>
            <?php echo number_format($player['pokemons_captured']); ?>
            <small>
                <?php
                echo floor($player['pokemons_captured']/$player['pokemons_encountered']*100), '%';
                ?>
            </small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Ball thrown</label>
            <?php echo number_format($player['pokeballs_thrown']); ?>
            <small>
                <?php
                echo floor($player['pokemons_captured']/$player['pokeballs_thrown']*100), '%';
                ?>
            </small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Pokestops visited</label>
            <?php echo number_format($player['poke_stop_visits']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Evolutions</label>
            <?php echo number_format($player['evolutions']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Big magikarp</label>
            <?php echo number_format($player['big_magikarp_caught']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Small rattata</label>
            <?php echo number_format($player['small_rattata_caught']); ?>
        </div>
    </div>
</div>

