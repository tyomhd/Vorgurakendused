/*old method

window.onload =  function reverseAll(){
    var beads = document.getElementsByClassName("bead");

    for (var i = 0; i < beads.length; i++) {
        var s = getComputedStyle(beads[i], null);
        if (s.cssFloat=="left"){
            beads[i].style.cssFloat="right";
        }else {
            beads[i].style.cssFloat="left";
        }
    }
}
*/

function eventListener(event) {

    var nmb = parseInt(event.target.textContent);
    var beads = document.getElementsByClassName("bead");
    var index =0;
    for (var i = 0; i < beads.length; i++) {if(event.target==beads[i]){index=i;}}

    if (event.target.classList.contains("bead")) {
        if (event.target.style.cssFloat == "left") {


            for (var i = 0; i < 6-nmb; i++) {
                beads[index].style.cssFloat = "right";
                index++;
        }
        } else {

            for (var i = 0; i < 6-nmb; i++) {
                beads[index].style.cssFloat = "left";
                index++;
            }
        }
    }
}
