<<<<<<< HEAD

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
=======
/*------------------------------------------------------------------
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-------------------------------------------------------------------*/
// Starter JavaScript for disabling form submissions if there are invalid fields
!function(){"use strict";window.addEventListener("load",function(){var t=document.getElementsByClassName("needs-validation");Array.prototype.filter.call(t,function(t){t.addEventListener("submit",function(e){!1===t.checkValidity()&&(e.preventDefault(),e.stopPropagation()),t.classList.add("was-validated")},!1)})},!1)}();
>>>>>>> 0d0718dd36b1e58e9d31e79365c09abd3ebd96ed
