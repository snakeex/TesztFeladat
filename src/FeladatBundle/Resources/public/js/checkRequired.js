function checkRequired($formClass) {
    var myChildren = document.getElementById($formClass).childNodes;
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


