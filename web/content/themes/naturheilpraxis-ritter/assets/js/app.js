$(document).ready(function() {
    $("#ailment").select2({
        theme: "bootstrap",
        language: "de",
        placeholder: l10n.ailment_placeholder,
        allowClear: true
    });

    $("#ailment").change(function() {
        var selected_ailment = $( this ).val();
        window.location.href = "/suffering/" + selected_ailment;
    });
});