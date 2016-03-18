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
