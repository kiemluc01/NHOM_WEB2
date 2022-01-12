// var cmtMem = document.getElementsByClassName('cmt_member');
// var cmtBook = document.getElementById('cmtBook');
// if (cmtMem.length == 0) {
//     cmtBook.classList.add("empty-comment")
// } else {
//     cmtBook.classList.remove("empty-comment");
// }
// ------------------
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()