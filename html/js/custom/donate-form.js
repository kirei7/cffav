$(document).ready(function () {
    var textInput = $('input[name="amount-custom"]');
    var radioInput = $('input[type="radio"][name="amount"]');

    radioInput.change(function (e) {
        if (!(e.target.id === "d-or")) textInput.val('');
    });

    textInput.focus(function () {
        radioInput.prop('checked', true);
    })
});