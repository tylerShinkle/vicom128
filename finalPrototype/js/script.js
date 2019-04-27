//array to hold button elements
var buttonArray = [];

// for each element if it has a class of open, 
// set the display of the element which has an 
// id that matches its value to table.
// otherwise close it's parent node.
function openOrClose(el) {
    "use strict";
    var toOpenId, toOpen, toClose;
    if (el.classList.contains("open")) {
        toOpenId = el.value;
        toOpen = document.getElementById(toOpenId);
        toOpen.style.display = "table";
    } else {
        toClose = el.parentNode;
        toClose.style.display = "none";
    }
}

//add event listener to elements of the button array referencing
// thiem with there indices.
function addEars(index) {
    "use strict";
    var el = buttonArray[index];
    el.addEventListener('click', function () {
        openOrClose(el);
    });
}


function init() {
    "use strict";
    var i;
    //load all buttons into array.
    buttonArray = document.getElementsByTagName('button');
    // for each element of array call addEars on it.
    for (i = 0; i < buttonArray.length; i++) {
        addEars(i);
    }
}

init();


