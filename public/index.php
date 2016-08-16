<?php
$config = require '../config.php';

require '../autoloader.php';
?>
<!doctype html>
<html>
    <head>
        <title>OpenPokemonGo Web UI</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
              crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" 
              rel="stylesheet" 
              integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" 
              crossorigin="anonymous">
        <link href="css/main.css"
              rel="stylesheet">

        <script type="text/javascript" 
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $config['gmapkey']; ?>&libraries=drawing"></script>
        <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
        <script type="text/javascript" 
        src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>

        <script src="js/event_dispatcher.js"></script>
        <script src="js/map.js"></script>
        <script src="js/bot.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="container-fluid" style="padding: 0;">
            <div id="map"></div>
            <div class="btn-group btn-group-sm"
                 id="toolbar">
                <button type="button" 
                        class="btn btn-default"
                        id="toolbar-pan"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Auto pan">
                    <i class="fa fa-blind"></i>
                </button>
                <button type="button" 
                        class="btn btn-default"
                        id="toolbar-search"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Search location">
                    <i class="fa fa-search"></i>
                </button>
                <button type="button"
                        class="btn btn-default"
                        id="toolbar-player"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Player info">
                    <i class="fa fa-info-circle"></i>
                </button>
            </div>
            <div class="modal fade"
                 id="info-window"
                 tabindex="-1" 
                 role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <script>
            $(function () {
                initUI();

                window.pokemonMap = new PokemonMap('map');
                window.bot = new PokemonBot('<?php echo $config['bot']['ip']; ?>', <?php echo $config['bot']['port']; ?>, '<?php echo $config['bot']['account']; ?>');
                bot.connect();
            });
        </script>
    </body>
</html>