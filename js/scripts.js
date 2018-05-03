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
        url:        'php/registration.php',
        data:       $(this).serialize(),
        success:    function(response) {
            if(response) {
                session = JSON.parse(response);
                if (session.error) {
                    showError(session.error, "reg");
                } else {
                    finishRegister(session.location);
                }
            }
        },
        error: function (response, textStatus, errorThrown) {
            console.log("ERROR");
            console.log("Status: " + textStatus);
            console.log(response.responseText);
        }
    });
});
$lform.on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type:       "POST",
        cache:      false,
        url:        'php/login.php',
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
        },
        error: function (response, textStatus, errorThrown) {
            console.log("ERROR");
            console.log("Status: " + textStatus);
            console.log(response.responseText);
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

function finishRegister(location) {
    $signUpBtn.addClass("btn-success").removeClass("btn-primary").text("Successfully Registered!");
    setTimeout(function() {
        $signUpBtn.removeClass("btn-success").addClass("btn-primary").text("Login");
        $('#regClose').trigger('click');
        document.location = location;
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

function populateMenuForm() {
    $.ajax({
        type:       "POST",
        cache:      false,
        url:        '/php/menu.php',
        success:    function(response) {
            if(response) {
                session = JSON.parse(response);
                if (session.error) {
                    showError(session.error, "menu");
                } else {
                    var item, type, container, length = session.menuItems.length, isEmpty = [true, true, true, true];
                    for (var i = 0; i < length; i++) {
                        item = session.menuItems[i].item_name;
                        type = session.menuItems[i].type;
                        switch(type) {
                            case "breakfast":
                                container = $('#menuPanelA');
                                if (isEmpty[0]) { 
                                    container.empty();
                                    isEmpty[0] = false;
                                }

                                container.append(createButton(item));
                                break;
                            case "lunch":
                                container = $('#menuPanelB');
                                if (isEmpty[1]) { 
                                    container.empty();
                                    isEmpty[1] = false;
                                }
                                container.append(createButton(item));
                                break;
                            case "dessert":
                                container = $('#menuPanelC');
                                if (isEmpty[2]) { 
                                    container.empty();
                                    isEmpty[2] = false;
                                }
                                container.append(createButton(item));
                                break;
                            case "beverage":
                                container = $('#menuPanelD');
                                if (isEmpty[3]) { 
                                    container.empty();
                                    isEmpty[3] = false;
                                }
                                container.append(createButton(item));
                                break;
                        }
                    }
                }
            }
        }
    });
}

function populateCRUD() {
    $.ajax({
        type:       "POST",
        cache:      false,
        url:        '/php/items.php',
        success:    function(response) {
            if(response) {
                session = JSON.parse(response);
                if (session.error) {
                    showError(session.error, "menu");
                } else {
                    var item, type, container, length = session.items.length, isEmpty = [true, true, true, true];
                    container = $('#crudForm').find('.modal-body');
                    for (var i = 0; i < length; i++) {
                        var jLength = Object.keys(session.items[i]).length;
                        var row = document.createElement("div"),
                            close = document.createElement("button");
                        row.classList.add("row");
                        container.append($(row));
                        for (var j = 0; j < jLength; j++) {
                            var col = document.createElement("div");
                            col.classList.add("col");
                            col.setAttribute("contentEditable", "");

                            if (j === 0) {
                                col.innerText = session.items[i].id;
                            } else if (j === 1) {
                                col.innerText = session.items[i].item_name;
                            } else if (j === 2) {
                                col.innerText = session.items[i].type;
                            } else if (j === 3) {
                                col.innerText = session.items[i].availability;
                            }
                            
                            $(row).append($(col));
                        }
                        close.classList.add("close", "position-absolute");
                        close.setAttribute("type", "button");
                        close.setAttribute("style", "right: 10%; color: green;");
                        close.onclick = function () {
                            this.parentNode.remove();
                        };
                        close.innerText = '×';
                        $(row).append($(close));
                    }

                    $('#submitChanges').on('click', function() {
                        updateDatabase();
                    });
                }
            }
        }
    });
}

function updateDatabase() {

}

function createButton(text) {
    var btn = document.createElement("button");
    btn.classList.add("btn", "btn-light-blue");
    btn.setAttribute("type", "button");
    btn.setAttribute("aria-pressed", "false");
    btn.setAttribute("autocomplete", "off");
    btn.innerText = text;
    return btn;
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

