window.onload =  function reverseAll(){

    var beads = document.getElementsByClassName("bead");
    for (i = 0; i < beads.size; i++) {
        var bStyle = window.getComputedStyle(beads[i], null);

        if (bStyle.cssFloat=="left"){
            beads[i].style.cssFloat="right";
        }else {
            beads[i].style.cssFloat="left";
        }

    }
};