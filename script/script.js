const toggleButton = document.getElementById("toggle-skills");
const skillsList = document.getElementById("skills-list");

toggleButton.addEventListener("click", () => {
  skillsList.classList.toggle("hidden");

  if (skillsList.classList.contains("hidden")) {
    toggleButton.textContent = "Показать навыки";
  } else {
    toggleButton.textContent = "Скрыть навыки";
  }
});

const downloadDiploma = document.getElementById("download-diploma");
const hint = document.querySelector(".hint");
hint.classList.add("hidden");

document.getElementById("download-pdf").addEventListener("click", () => {
  const link = document.createElement("a");
  link.href = "../content/cv.pdf";
  link.download = "резюме_Андрей_Майоров.pdf";
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
