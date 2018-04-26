var $rform =  $('#registrationForm form'),
    $lform =  $('#loginForm form'),
    $loginBtn = $('#loginBtn'),
    $signUpBtn = $('#signUpBtn'),
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
            if (response) {
                session = JSON.parse(response);
                if (session.person) {                    
                    startSession(session);
                } else {
                    showError(session.error);
                }
            }
        }
    });
});

function showRegistration() {
    $('#loginForm').modal('hide');
    $('#registrationForm').modal('show');
}

function startSession(session) {
    $loginBtn.addClass("btn-success").removeClass("btn-primary").text("Success!");
    setTimeout(function() {
        $loginBtn.removeClass("btn-success").addClass("btn-primary").text("Login");
        $('#loginClose').trigger('click');
    }, 1250);
    $('#login, #reg, #uname, #logout, #order').parent().toggle();
    $('#uname').text("Welcome " + session.person + "!").addClass("yellow-text");
}

function showError(error) {
    $loginBtn.addClass("btn-danger").removeClass("btn-primary").text(error);
    setTimeout(function() {
        $loginBtn.removeClass("btn-danger").addClass("btn-primary").text("Login");
    }, 2500);
}

