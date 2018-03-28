var btn = document.getElementById("dlBtn");
var arrow = document.getElementById("arrow");
var expertDiv = document.getElementById("expertDiv");

btn.addEventListener("click", function () {
    document.getElementById("loading").classList.remove("hidden");
    document.getElementById("loading").classList.add("visible");
});

expertDiv.addEventListener("click", function () {
    if (arrow.classList.contains("arrowNotClicked")) {
        arrow.classList.remove("arrowNotClicked");
        arrow.classList.add("arrowClicked");
    } else {
        arrow.classList.remove("arrowClicked");
        arrow.classList.add("arrowNotClicked");
    }
});

