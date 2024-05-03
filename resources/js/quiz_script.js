document.querySelectorAll(".card").forEach(function (card) {
    card.addEventListener("click", function () {
        alert("Card clicked: " + this.querySelector("p").textContent);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var surveyItems = document.querySelectorAll(".survey-item");
    surveyItems.forEach(function (item) {
        item.addEventListener("change", function (e) {
            if (e.target.type === "radio") {
                var labels = item.getElementsByTagName("label");
                for (var i = 0; i < labels.length; i++) {
                    labels[i].style.backgroundColor = ""; // Reset background
                    labels[i].style.borderColor = "transparent"; // Reset border
                }
                var selectedLabel = item.querySelector(
                    'label[for="' + e.target.id + '"]'
                );
                selectedLabel.style.backgroundColor = "#FFC3D7"; // Selected background color
                selectedLabel.style.borderColor = "#FFC3D7"; // Selected border color
            }
        });
    });
});
