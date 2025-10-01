const toggleSkillsButton = document.getElementById("toggle-skills");
const toggleFavoritesButton = document.getElementById("toggle-favorites");
const skillsList = document.getElementById("skills-list");
const favoritesList = document.getElementById("favorites-list");

toggleSkillsButton.addEventListener("click", () => {
  skillsList.classList.toggle("hidden");

  if (skillsList.classList.contains("hidden")) {
    toggleSkillsButton.textContent = "Показать";
  } else {
    toggleSkillsButton.textContent = "Скрыть";
  }
});

toggleFavoritesButton.addEventListener("click", () => {
  favoritesList.classList.toggle("hidden");

  if (favoritesList.classList.contains("hidden")) {
    toggleFavoritesButton.textContent = "Показать";
  } else {
    toggleFavoritesButton.textContent = "Скрыть";
  }
});

const downloadDiploma = document.getElementById("download-diploma");
const hint = document.querySelector(".hint");
hint.classList.add("hidden");

document.getElementById("download-pdf").addEventListener("click", () => {
  const link = document.createElement("a");
  link.href = "../content/cv.pdf";
  link.download = "Резюме_Андрей_Майоров.pdf";
  link.click();
});

document.getElementById("download-diploma").addEventListener("click", () => {
  const link = document.createElement("a");
  link.href = "../content/diploma.pdf";
  link.download = "Диплом.pdf";
  if (hint.classList.contains("hidden")) {
    hint.classList.remove("hidden");
  } else {
    link.click();
  }
});

const currentYear = new Date().getFullYear();
document.querySelector(
  ".footer p"
).textContent = `© ${currentYear} Андрей Майоров`;
