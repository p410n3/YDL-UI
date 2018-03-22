var btn = document.getElementById("dlBtn");

btn.addEventListener("click", function () {
    document.getElementById("loading").classList.remove("hidden");
    document.getElementById("loading").classList.add("visible");
});