<?php
$args = json_decode($_POST['args'], true);

$player = $args['player'];

$eggs = $args['eggs'];

$hatchings = [];

foreach ( $args['hatchings'] as $item ) {
    if ( ! empty($item['target_km_walked']) ) {
        $hatchings[] = $item;
    }
}

$summary = [
    '2' => 0,
    '5' => 0,
    '10' => 0
];

foreach($eggs as $egg) {
    if ( empty($egg['egg_incubator_id']) ) {
        $summary[$egg['egg_km_walked_target']]++;
    }
}
?>

<?php include __DIR__ . '/menu_player.php'; ?>

<h3>
    Hatching eggs
    &dash;
    <small>Hatching <?php echo count($hatchings); ?>, hatched <?php echo $player['eggs_hatched']; ?></small>
</h3>

<div class="list-group">
    <?php foreach ($hatchings as $item): ?>
    <div class="list-group-item">
        <?php
        $km = round($item['target_km_walked'] - $item['start_km_walked']);
        $left = $item['target_km_walked'] - $player['km_walked'];
        ?>
        <em><?php echo $km; ?> km egg</em>
        
        &dash;
        
        <?php echo number_format($left, 2), ' km left'; ?>
    </div>
    <?php endforeach; ?>
</div>

<h3>Eggs</h3>

<div class="row">
    <div class="col-md-4">
        <div class="info-item">
            <label>2km eggs</label>
            <?php echo $summary['2']; ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-item">
            <label>5km eggs</label>
            <?php echo $summary['5']; ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-item">
            <label>10km eggs</label>
            <?php echo $summary['10']; ?>
        </div>
    </div>
</div>