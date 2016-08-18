
var initUI = function () {
    $('[data-toggle="tooltip"]').tooltip();

    initToolbar();
};

var initToolbar = function () {
    var self = this;
    $("#toolbar-pan").click(function () {
        window.pokemonMap.setFollow(true);
    });
    $("#toolbar-player").click(function() {
        showInfoWindow("Player info", function() {
            bot.getPlayerInfo(function(info) {
                window.playerInfo = info;
                showPlayerInfo();
            });
        });
    });
};

var showMessage = function (msg, type) {
    if (!type) {
        type = 'info';
    }
    $.notify({
        message: msg
    }, {
        type: type
    });
};

var showInfoWindow = function(title, onShown) {
    $("#info-window .modal-title").text(title);
    $("#info-window .modal-body").html('<div class="modal-loading"><i class="fa fa-spin fa-spinner"></i> Loading ...</div>')
    $("#info-window").off("shown.bs.modal");
    $("#info-window").on("shown.bs.modal", onShown);
    $("#info-window").modal("show");
};

var showWidget = function(widgetName, args) {
    $.post("widgets/" + widgetName + ".php", {args: JSON.stringify(args)}, function(reply) {
        $("#info-window .modal-body").html(reply);
    });
};

var showPlayerInfo = function() {
    showWidget("player_info", window.playerInfo);
};

var showEggs = function() {
    showWidget('eggs', window.playerInfo);
};