

(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

!function(){"use strict";window.addEventListener("load",function(){var t=document.getElementsByClassName("needs-validation");Array.prototype.filter.call(t,function(t){t.addEventListener("submit",function(e){!1===t.checkValidity()&&(e.preventDefault(),e.stopPropagation()),t.classList.add("was-validated")},!1)})},!1)}();

