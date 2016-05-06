// Module function keeps variables local
(function() {

    window.onload = function(){
        var hamButton1 = document.getElementById("hamburger1");
        var hamButton2 = document.getElementById("hamburger2");

        hamButton1.onclick = openHam;
        hamButton2.onclick = closeHam;
    }

    function openHam(){
        document.getElementById("nav").className = "open";
        document.getElementById("hamburger1").className = "close";
    }

    function closeHam(){
        document.getElementById("nav").className = "close";
        document.getElementById("hamburger1").className = "open";
    }

}) ();