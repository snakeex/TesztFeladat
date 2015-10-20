$(document).ready(function () {
    toggleFields();
    checkRequired();
    //sendForm();
    $("[id$=tipus]").on('change', function () {
        toggleFields();
        checkRequired();
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

function checkRequired() {
    var myChildren = document.getElementById("feladatbundle_partner").childNodes;
    for (var i = 0; i < myChildren.length - 2; i++) {
        var label = myChildren[i].childNodes[0];
        var input_tag = myChildren[i].childNodes[1].childNodes[0];
        if (input_tag.hasAttribute("required") && label.childNodes.length < 2) {
            var span = document.createElement('span');
            span.textContent = " *";
            label.appendChild(span);
        } else if (!(input_tag.hasAttribute("required")) && label.childNodes.length > 1) {
            label.removeChild(label.childNodes[1]);
        }
    }
}

/*function sendForm(form, callback){
    var values = {};
    $.each(form[0].elements, function(i, field){
        if(field.type != 'checkbox' || (field.type == 'checkbox' && field.checked)){
            values[field.name] = field.value;
        }
    });
    
    $ajax({
        type    : form.attr('method'),
        url     : form.attr('action'),
        data    : values,
        success : function(result){callback( result );}
    });
}

$(function() {
        $('select[id$=_role]') 
            .append($('<option>', {value : 'new', text: 'Add new role'}))
            .on('change', function () {
                    if ($( "select[id$=_role] option:selected").val() === 'new') {
                            $('#new_role').modal('show');
                    }
            });

    $('#save_role').on('click', function( e ){
        e.preventDefault();
        sendForm( $('#new_role').find('form'), function( response ){
            if (typeof response == "object") {
                $('select[id$=_role]')
                    .prepend($('<option>', {value : response.id, text: response.name}))
                    .val(response.id);
                $('#new_role').modal('hide');
            }
            else {
                $('#new_role').find('.modal-body').html(response);
            }
        });
    });
});*/


