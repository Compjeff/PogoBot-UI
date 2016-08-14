
var initUI = function () {
    $('[data-toggle="tooltip"]').tooltip();

    initToolbar();
};

var initToolbar = function () {
    $("#toolbar-pan").click(function () {
        window.pokemonMap.setFollow(true);
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