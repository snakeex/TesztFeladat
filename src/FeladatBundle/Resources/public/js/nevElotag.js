$(document).ready(function () {
    checkRequired();
    //initAjaxForm();
 });

function checkRequired() {
    var myChildren = document.getElementById("feladatbundle_nevelotag").childNodes;
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

function initAjaxForm()
{
    $('body').on('submit', '.form-horizontal', function (e) {

        e.preventDefault();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
        .done(function (data) {
            if (typeof data.message !== 'undefined') {
                alert(data.message);
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                if (jqXHR.responseJSON.hasOwnProperty('form')) {
                    $('#feladatbundle_nevelotag').html(jqXHR.responseJSON.form);
                }

                $('.form_error').html(jqXHR.responseJSON.message);

            } else {
                alert(errorThrown);
            }

        });
    });
}


