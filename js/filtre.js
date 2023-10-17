// filter.js
function filterSeances() {
    var selectDifficulty = document.getElementById("difficulte");
    var selectedDifficulty = selectDifficulty.options[selectDifficulty.selectedIndex].value;

    var selectVille = document.getElementById("ville");
    var selectedVille = selectVille.options[selectVille.selectedIndex].value;

    var rows = document.querySelectorAll(".table-fill tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        var difficultyCell = row.querySelector("td:nth-child(3)"); // La cellule contenant la difficulté
        var villeCell = row.querySelector("td:nth-child(7"); // La cellule contenant la ville

        // Vérifiez si la ligne correspond aux filtres de difficulté et de ville
        if ((selectedDifficulty === "Toutes" || selectedDifficulty === difficultyCell.textContent) &&
            (selectedVille === "Toutes" || selectedVille === villeCell.textContent)) {
            row.style.display = ""; // Afficher la ligne
        } else {
            row.style.display = "none"; // Masquer la ligne
        }
    }
}
