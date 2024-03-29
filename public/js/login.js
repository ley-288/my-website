"use strict";

// ELEMENTS

//ALERTS
const noLoginMessage = document.querySelector("#no-login-message");
const noLoginDismiss = document.querySelector("#alert-dismiss-login");
const noNameMessage = document.querySelector("#no-name-message");
const noEmailMessage = document.querySelector("#no-email-message");
const noPinMessage = document.querySelector("#no-pin-message");
const usedEmailMessage = document.querySelector("#used-email-message");

//BUTTONS
const registerBtn = document.querySelector("#register-next-btn");
const loginBtn = document.querySelector("#login-prev-btn");
const signUp = document.querySelector("#sign-up-btn");
const signIn = document.querySelector("#sign-in-btn");
const cancelInputKeypad = document.querySelector(".cancel");
const cancelAllKeypad = document.querySelector(".cancel-all");
const keyPut = document.querySelectorAll(".num-put");
const dismissRegModal = document.querySelector(".dismiss-numpad-btn");

//FORMS
const registerForm = document.querySelector("#register-form");
const loginForm = document.querySelector("#login-form");

//INPUTS
const emailLog = document.querySelector("#email"); // login email
const emailReg = document.querySelector("#email_address"); // register email
const passwordLog = document.querySelector("#pword"); // login password
const passwordReg = document.querySelector("#password"); // register password
const nameReg = document.querySelector("#name");
const pinBar = document.querySelector(".pin-input");

//INCLUDED BLADES
const formIncluded = document.querySelector("#included-form");

//BLADE DIVS
const helloSection = document.querySelector("#hello");
const welcomeMessage = document.querySelector("#welcome_message");

//WELCOME MESSAGE
const welcome = [
    "Welcome",
    "Wilkommen",
    "Benvenuto",
    "Welkom",
    "أهلا بك",
    "歡迎",
    "欢迎",
    "Dobrodošli",
    "Vítejte",
    "Velkommen",
    "Bonvenon",
    "Tervetuloa",
    "Bienvenu",
    "καλως ΗΡΘΑΤΕ",
    "Welina",
    "ברוך הבא",
    "स्वागत",
    "Velkominn",
    "Selamat datang",
    "いらっしゃいませ",
    "Sugeng rawuh",
    "어서 오십시오",
    "Bi xêr hatî",
    "Grata",
    "സ്വാഗതം",
    "Nau mai haere mai",
    "خوش آمدی",
    "Powitanie",
    "Bem-vindo",
    "ਸੁਆਗਤ ਹੈ",
    "Добродошли",
    "Vitajte",
    "Bienvenidos",
    "Karibu",
    "Välkommen",
    "ยินดีต้อนรับ",
    "Hoş geldin",
    "Ласкаво просимо",
    "خوش آمدید",
    "Chào mừng",
    "ברוכים הבאים",
];

///////////////////////////////////////////////////////////////

// FUNCTIONS
function clearForm() {
    $(passwordReg).val("");
    $(passwordLog).val("");
    $(emailLog).val("");
    $(emailReg).val("");
    $(nameReg).val("");
    $(pinBar).val("");
}

function blurForm() {
    registerBtn.classList.toggle("hide");
    loginBtn.classList.toggle("hide");
    loginForm.classList.toggle("blur");
    registerForm.classList.toggle("blur");
}

loginBtn.addEventListener("click", function (e) {
    e.preventDefault();
    blurForm();
    clearForm();
});

registerBtn.addEventListener("click", function (e) {
    e.preventDefault();
    blurForm();
    clearForm();
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
function noPinAlert() {
    alertDisappear(noPinMessage);
}
function usedEmailAlert() {
    alertDisappear(usedEmailMessage);
}

function blinkWelcomeMessage() {
    let random = Math.floor(Math.random() * welcome.length);
    $(welcomeMessage).fadeOut(1000, function () {
        welcomeMessage.textContent = welcome[random];
    });
    $(welcomeMessage).delay(1000).fadeIn(1000);
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
function authenticatedUser(name) {
    setTimeout(function () {
        clearForm();
    }, 2000);
    formIncluded.classList.add("fade-out");
    // LOAD IN WEB PAGE
    setTimeout(function () {
        if (name) {
            //if registering
            welcomeMessage.textContent = "Welcome";
            const para = document.createElement("h3");
            //return user first name
            para.innerHTML = ", " + name;
            helloSection.appendChild(para);
        } else {
            //logging in
            welcomeMessage.textContent = "Welcome back";
            setInterval(blinkWelcomeMessage, 5000);
        }
        helloSection.classList.add("fade-in");
    }, 4000);
}

function capitalizeFirstLetter(str) {
    str.toLowerCase();
    const splitStr = str.toLowerCase().split(" ");
    for (let i = 0; i < splitStr.length; i++) {
        splitStr[i] =
            splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
    }
    return splitStr.join(" ");
}

//REGISTER
signUp.addEventListener("click", function () {
    const email = emailReg.value.toLowerCase();
    //const name = nameReg.value;
    const name = capitalizeFirstLetter(nameReg.value);
    const password = passwordReg.value;
    if (name === "") {
        noNameAlert();
    }
    if (email === "") {
        noEmailAlert();
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
            url: "/registration/jiant",
            type: "POST",
            data: {
                email: email,
                name: name,
                password: password,
            },
            success: function () {
                authenticatedUser(name);
            },
            error: function () {
                //console.log("user already registered");
                if (!email.includes("@")) {
                    noEmailAlert();
                } else {
                    usedEmailAlert();
                }
            },
        });
    }
});

//LOGIN
signIn.addEventListener("click", function () {
    const email = emailLog.value.toLowerCase();
    const password = passwordLog.value;
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "/login/jiant",
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
        passwordReg.value = passwordReg.value + id;
        passwordLog.value = passwordLog.value + id;
        pinBar.value = pinBar.value + id;
    }

    // IF LENGTH = 5
    if (passwordReg.value.length > 4) {
        // need to cancel clickable buttons
        const saveIcon = "<i class='material-icons-round'>check_circle</i>";
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

function textAreaDelete(textarea) {
    const inputString = $(textarea).val();
    const shortenedString = inputString.substr(0, inputString.length - 1);
    $(textarea).val(shortenedString);
    $(passwordReg).val(shortenedString);
    const inputStringPin = $(pinBar).val();
    const shortenedStringPin = inputStringPin.substr(
        0,
        inputStringPin.length - 1
    );
    $(pinBar).val(shortenedString);
}

//CANCEL AND DISMISS
$(cancelInputKeypad).click(function () {
    textAreaDelete(passwordReg);
    textAreaDelete(passwordLog);
    flashKey(cancelInputKeypad);
});

function clearEmailandPin() {
    $(passwordReg).val("");
    $(passwordLog).val("");
    $(pinBar).val("");
}

$(cancelAllKeypad).click(function () {
    clearEmailandPin();
    flashKey(cancelAllKeypad);
});

$(dismissRegModal).click(function () {
    if (dismissRegModal.textContent === "Cancel") {
        clearEmailandPin();
        flashKey(dismissRegModal);
    } else {
    }
});
