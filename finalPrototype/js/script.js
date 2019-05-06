/*eslint-env browser*/
//array to hold button elements
var buttonArray = [];

// for each element if it has a class of open, 
// set the display of the element which has an 
// id that matches its value to table.
// otherwise close it's parent node.
function openOrClose(el) {
    "use strict";
    var toOpenId, toOpen, toClose, toHide;
    toHide = document.getElementById("content");
    if (el.classList.contains("open")) {
        toHide.style.display = "none";
        toOpenId = el.value;
        toOpen = document.getElementById(toOpenId);
        toOpen.style.display = "table";
    } else {
        toClose = el.parentNode;
        toClose.style.display = "none";
        toHide.style.display = "block";
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
    var i,j,k,links,overlay,toShow;
    //load all buttons into array.
    buttonArray = document.getElementsByTagName('button');
    // for each element of array call addEars on it.
    for (i = 0; i < buttonArray.length; i += 1) {
        addEars(i);
    }
    
    //section links that dont link to a new page need to hide the overlay, and show the content again.
    overlay=document.getElementsByClassName("overlay");
    for (i = 0; i<overlay.length; i+=1){
        links=overlay[i].getElementsByTagName('a');
        for(j = 0; j<links.length; j++){
            links[j].addEventListener('click', function(){
                for(k = 0 ; k<overlay.length; k+=1){
                    overlay[k].style.display="none";
                }
                toShow=document.getElementById("content");
                toShow.style.display="block";
            })
        }
    }
}

init();


