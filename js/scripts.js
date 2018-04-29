var $rform =  $('#registrationForm form'),
    $lform =  $('#loginForm form'),
    $loginBtn = $('#loginBtn'),
    $signUpBtn = $('#signUpBtn'),
    $logout = $('#logout'),
    $intro = $('#intro');

var session, activeElement;
$rform.on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type:       "POST",
        cache:      false,
        url:        '/php/registration.php',
        data:       $(this).serialize(),
        success:    function(response) {
            if(response) {
                session = JSON.parse(response);
                if (session.error) {
                    showError(session.error, "reg");
                } else {
                    finishRegister();
                }
            }
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
                    showError(session.error, "login");
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
    $('#login, #reg').parent().hide();
    $('#uname, #logout, #order').parent().show();
    $('#uname').text("Welcome " + session.person + "!").addClass("yellow-text");
}

function resumeSession(name) {
    $('#login, #reg').parent().hide();
    $('#uname, #logout, #order').parent().show();
    $('#uname').text("Welcome " + name + "!").addClass("yellow-text");
}

function finishRegister() {
    $signUpBtn.addClass("btn-success").removeClass("btn-primary").text("Successfully Registered!");
    setTimeout(function() {
        $signUpBtn.removeClass("btn-success").addClass("btn-primary").text("Login");
        $('#regClose').trigger('click');
    }, 1250);
}

function showError(error, type) {
    if (type === "reg") {
        $signUpBtn.addClass("btn-danger").removeClass("btn-primary").text(error);
        setTimeout(function() {
            $signUpBtn.removeClass("btn-danger").addClass("btn-primary").text("Sign Up");
        }, 2500);
    } else if (type === "login") {
        $loginBtn.addClass("btn-danger").removeClass("btn-primary").text(error);
        setTimeout(function() {
            $loginBtn.removeClass("btn-danger").addClass("btn-primary").text("Login");
        }, 2500);
    }
}

$(document).on('click', '.tabBtn', function() {
    $intro.addClass('scroll');
    $intro.find('#introBG').css({'background': 'url("../img/' + $(this).text().toLowerCase() + '.jpg") repeat', 'background-size': 'auto 150vh'});
});

$(document).on('click', 'a[href^="#"]:not("[role]")', function(e) {
    // target element id
    var id = $(this).attr('href');
    if (activeElement) {
        activeElement.removeClass("active");
    } else {
        activeElement = $(this).parent();
    }
    $(this).parent().addClass("active");
    activeElement = $(this).parent();

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top - 50;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});

