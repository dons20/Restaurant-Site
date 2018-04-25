var $rform =  $('#registrationForm form'),
    $lform =  $('#loginForm form'),
    $logout = $('#logout');

var session;
$rform.on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type:       "POST",
        cache:      false,
        url:        '/php/registration.php',
        data:       $(this).serialize(),
        success:    function(response) {
            $('#regClose').trigger('click');
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
        success:    function(response) {
            $('#loginClose').trigger('click');
            session = JSON.parse(response);
            startSession(session);
        }
    });
});

function showRegistration() {
    $('#loginForm').modal('hide');
    $('#registrationForm').modal('show');
}

function startSession(session) {
    $('#navbarResponsive > ul > li:nth-child(n+5)').toggle();
    $('#uname').text("Welcome " + session.person + "!").addClass("push");
}

