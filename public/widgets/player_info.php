
<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>User</label>
            <?php echo htmlentities($_POST['username']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Level</label>
            <?php echo $_POST['level']; ?>
            <small>
                <?php echo number_format($_POST['next_level_xp'] - $_POST['experience']); ?>
                to next level
            </small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Stardust</label>
            <?php 
            $amount = 0;
            foreach($_POST['currencies'] as $item) {
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
            foreach($_POST['currencies'] as $item) {
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

<?php

print_r($_POST);
