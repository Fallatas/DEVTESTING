$(function () {
    $('#art').change(function () {
        if($(this).val() != ""){
            $.get(
                "daten.php",
                {wahl: $(this).val()},
                function (daten) {
                    $('#ausgabe').html(daten);
                }
            )
        }
    })
});
