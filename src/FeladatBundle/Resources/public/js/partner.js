$(document).ready(function () {
    toggleFields();
    checkRequired("feladatbundle_partner");
    $("[id$=tipus]").on('change', function () {
        toggleFields();
        checkRequired("feladatbundle_partner");
    });
});

function toggleFields() {
    if ($("[id$=tipus]").val() == 1) {
        $("[id$=cegnev]").attr('required', '');
        $("[id$=nevelotag]").removeAttr('required');
        $("[id$=vezeteknev]").removeAttr('required');
        $("[id$=keresztnev]").removeAttr('required');
        $("[id$=cegbejegyzesiSzam]").parent().parent().show();
        $("[id$=szuletesnap]").parent().parent().hide();
        $("[id$=anyjaNeve]").parent().parent().hide();
        $("[id$=szigSzam]").parent().parent().hide();
    } else {
        $("[id$=nevelotag]").attr('required', '');
        $("[id$=vezeteknev]").attr('required', '');
        $("[id$=keresztnev]").attr('required', '');
        $("[id$=cegnev]").removeAttr('required');
        $("[id$=cegbejegyzesiSzam]").parent().parent().hide();
        $("[id$=szuletesnap]").parent().parent().show();
        $("[id$=anyjaNeve]").parent().parent().show();
        $("[id$=szigSzam]").parent().parent().show();
    }
}


