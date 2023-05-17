import 'confirmation';
import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

$(document).ready(function () {
    $('button[data-toggle="confirmation"]').on('confirmation', function (event) {
        var button = $(this);

        event.preventDefault();

        if (confirm(button.data('message'))) {
            button.closest('form').submit();
        }
    });
});
