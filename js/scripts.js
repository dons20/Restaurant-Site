$(document).ready(function() {
    var $rform =  $('#registrationForm form');
    var $lform =  $('#loginForm form');
    var session;
    $rform.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type:       "POST",
            cache:      false,
            url:        '/php/registration.php',
            data:       $(this).serialize(),
            success:    function(data) {
                $('#regClose').trigger('click');
                console.log(data);
            }
        });
    });
    $lform.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type:       "POST",
            cache:      false,
            url:        '/php/login.php',
            data:       $(this).serialize(),
            success:    function(data) {
                $('#loginClose').trigger('click');
                session = data['username'];
                console.log(session);
            }
        });
    });
});

