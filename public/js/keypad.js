"use strict";

//ELEMENTS

//INPUT FIELDS
const inputField = document.querySelectorAll("input");

//SPECIAL KEYS
const spaceKey = document.querySelector(".space-key");
const returnKey = document.querySelector(".return-key");
const numKey = document.querySelectorAll(".num-key");
const letterKey = document.querySelector(".letter-key");
const emojiKey = document.querySelector(".emoji-key");
const shiftKey = document.querySelector(".shift-key");
const reverseShiftKey = document.querySelector(".reverse-shift-key");
const symbolKey = document.querySelector(".symbol-key");

//ALL KEYS
const keyValue = document.querySelectorAll(".key-put");

//KEY WINDOWS
const keyWinUpper = document.querySelector("#key-win-uppercase");
const keyWinLower = document.querySelector("#key-win-lowercase");
const keyWinNum = document.querySelector("#key-win-numerals");
const keyWinMath = document.querySelector("#key-win-maths");

//BUTTONS
const dismissKeyModal = document.querySelector(".dismiss-keypad-btn");

///////////////////////////////////////////////////////////////

// FUNCTIONS
function changeKeyWindow(window) {
    window.classList.remove("hide");
    [...window.parentElement.children].forEach(function (el) {
        if (el !== window) el.classList.add("hide");
    });
}

shiftKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinLower);
});
reverseShiftKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinUpper);
});
numKey.forEach(function (elem) {
    elem.addEventListener("click", function (e) {
        changeKeyWindow(keyWinNum);
    });
});
letterKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinLower);
});
symbolKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinMath);
});

function KeyToInput(field) {
    console.log(field.id);
    $("#keyPadModal").modal("show");
    keyValue.forEach(function (el) {
        el.addEventListener("click", function (e) {
            if (e.target.getAttribute("data-val")) {
                flashKey(e.target);
                const inp = el.getAttribute("data-val");
                field.value = field.value + inp;
            } else {
                console.log("no value");
            }
        });
    });
}

inputField.forEach(function (input) {
    input.addEventListener("click", function (e) {
        KeyToInput(e.target);
    });
});

//CANCEL AND DISMISS
$(dismissKeyModal).click(function () {
    flashKey(dismissKeyModal);
    setTimeout(function () {
        changeKeyWindow(keyWinUpper);
    }, 500);
});
