$(document).ready(function() {
    $('input[type="hidden"][name="tz"]').val(window.btoa(Intl.DateTimeFormat().resolvedOptions().timeZone));
});
