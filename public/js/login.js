"use strict";

// ELEMENTS

//Alerts
const noLoginMessage = document.querySelector("#no-login-message");
const noLoginDismiss = document.querySelector("#alert-dismiss-login");
const noNameMessage = document.querySelector("#no-name-message");
const noEmailMessage = document.querySelector("#no-email-message");
const noValidEmailMessage = document.querySelector("#no-valid-message");
const noPinMessage = document.querySelector("#no-pin-message");

//Textareas
const textarea = document.getElementById("password");
const pinBar = document.querySelector(".pin-input");

//Buttons
const registerBtn = document.querySelector("#register-next-btn");
const loginBtn = document.querySelector("#login-prev-btn");
const signUp = document.querySelector("#sign-up-btn");
const signIn = document.querySelector("#sign-in-btn");
const cancelInputKeypad = document.querySelector(".cancel");
const cancelAllKeypad = document.querySelector(".cancel-all");
const keyPut = document.querySelectorAll(".num-put");
const dismissRegModal = document.querySelector(".dismiss-modal-btn");

//Forms
const registerForm = document.querySelector("#register-form");
const loginForm = document.querySelector("#login-form");

//Inputs
const emailLog = document.querySelector("#email"); // login email
const emailReg = document.querySelector("#email_address"); // register email
const passwordLog = document.querySelector("#pword"); // login password
const passwordReg = document.querySelector("#password"); // register password
const nameReg = document.querySelector("#name");

//Included Blades
const formIncluded = document.querySelector("#included-form");

//Blade divs
const helloSection = document.querySelector("#hello");

///////////////////////////////////////////////////////////////

// FUNCTIONS

loginBtn.addEventListener("click", function (e) {
    e.preventDefault();
    registerBtn.classList.toggle("hide");
    loginBtn.classList.toggle("hide");
    loginForm.classList.toggle("blur");
    registerForm.classList.toggle("blur");
});

registerBtn.addEventListener("click", function (e) {
    e.preventDefault();
    loginBtn.classList.toggle("hide");
    registerBtn.classList.toggle("hide");
    loginForm.classList.toggle("blur");
    registerForm.classList.toggle("blur");
});

// ALERTS

function alertDisappear(alert) {
    setTimeout(function () {
        alert.classList.remove("hide");
        alert.classList.add("alert-notif");
    }, 1000);

    setTimeout(function () {
        alert.classList.remove("alert-notif");
        alert.classList.add("slide-out");
        setTimeout(function () {
            alert.classList.add("hide");
            alert.classList.remove("slide-out");
        }, 2000);
    }, 12000);
}

function noLoginAlert() {
    alertDisappear(noLoginMessage);
}
function noNameAlert() {
    alertDisappear(noNameMessage);
}
function noEmailAlert() {
    alertDisappear(noEmailMessage);
}
function noValidEmailAlert() {
    alertDisappear(noValidEmailMessage);
}
function noPinAlert() {
    alertDisappear(noPinMessage);
}

// MANUAL DISMISS
noLoginDismiss.addEventListener("click", function () {
    noLoginMessage.classList.remove("alert-notif");
    noLoginMessage.classList.add("slide-out");
    setTimeout(function () {
        noLoginMessage.classList.add("hide");
        noLoginMessage.classList.remove("slide-out");
    }, 1000);
});

// AUTHENTICATION

function authenticatedUser() {
    setTimeout(function () {
        emailReg.value = "";
        nameReg.value = "";
        emailLog.value = "";
        passwordLog.value = "";
        passwordReg.value = "";
    }, 2000);
    formIncluded.classList.add("fade-out");
    // LOAD IN WEB PAGE
    setTimeout(function () {
        helloSection.classList.add("fade-in");
    }, 4000);
}

signUp.addEventListener("click", function () {
    var email = emailReg.value;
    var name = nameReg.value;
    var password = passwordReg.value;
    if (name === "") {
        noNameAlert();
    }
    if (email === "") {
        noEmailAlert();
    }
    if (!email.includes("@")) {
        noValidEmailAlert();
    }
    if (password == "") {
        noPinAlert();
    } else {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/jiant-registration",
            type: "POST",
            data: {
                email: email,
                name: name,
                password: password,
            },
            success: function () {
                authenticatedUser();
            },

            error: function () {
                console.log("user already registered");
            },
        });
    }
});

signIn.addEventListener("click", function () {
    var email = emailLog.value;
    var password = passwordLog.value;
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "/jiant-login",
        type: "POST",
        data: {
            email: email,
            password: password,
        },
        success: function () {
            authenticatedUser();
        },

        error: function () {
            noLoginAlert();
        },
    });
});

// PIN JAVASCRIPT
function flashKey(key) {
    key.classList.add("key-touch");
    setTimeout(function () {
        key.classList.remove("key-touch");
    }, 100);
}

//NUMBER SELECT & COPY TO TEXTAREA
document.querySelector(".keypad-num").addEventListener("click", function (e) {
    e.preventDefault();

    // Matching strategy

    if (e.target.classList.contains("num-put")) {
        flashKey(e.target);
        const id = e.target.getAttribute("data-val");
        textarea.value = textarea.value + id;
        pinBar.value = pinBar.value + id;
    }

    // IF LENGTH = 5
    if (textarea.value.length > 4) {
        // need to cancel clickable buttons
        dismissRegModal.textContent = "Save";
        dismissRegModal.classList.add("pin-okay");
        keyPut.forEach(function (elem) {
            elem.classList.add("disable-key");
        });
    } else {
        dismissRegModal.textContent = "Cancel";
        dismissRegModal.classList.remove("pin-okay");
        keyPut.forEach(function (elem) {
            elem.classList.remove("disable-key");
        });
    }
});

$(cancelInputKeypad).click(function () {
    var inputString = $(textarea).val();
    var shortenedString = inputString.substr(0, inputString.length - 1);
    $(textarea).val(shortenedString);

    var inputStringPin = $(pinBar).val();
    var shortenedStringPin = inputStringPin.substr(
        0,
        inputStringPin.length - 1
    );
    $(pinBar).val(shortenedStringPin);
    flashKey(cancelInputKeypad);
});

$(cancelAllKeypad).click(function () {
    $(textarea).val("");
    $(pinBar).val("");
    flashKey(cancelAllKeypad);
});

$(dismissRegModal).click(function () {
    if (dismissRegModal.textContent === "Cancel") {
        $(textarea).val("");
        $(pinBar).val("");
    } else {
    }
});
