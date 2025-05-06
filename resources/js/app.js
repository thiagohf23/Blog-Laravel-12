import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// DARK MODE TOGGLE BUTTON
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
var themeToggleBtn = document.getElementById("theme-toggle");
// Inicializar o tema baseado no armazenamento local ou na preferência do sistema
if (
localStorage.getItem("color-theme") === "dark" ||
(!("color-theme" in localStorage) &&
window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
document.documentElement.classList.add("dark");
themeToggleLightIcon.classList.remove("hidden");
} else {
document.documentElement.classList.remove("dark");
themeToggleDarkIcon.classList.remove("hidden");
}
// Alternar entre temas ao clicar no botão
themeToggleBtn.addEventListener("click", function () {
if (document.documentElement.classList.contains("dark")) {
document.documentElement.classList.remove("dark");
localStorage.setItem("color-theme", "light");
themeToggleDarkIcon.classList.remove("hidden");
themeToggleLightIcon.classList.add("hidden");
} else {
document.documentElement.classList.add("dark");
localStorage.setItem("color-theme", "dark");
themeToggleDarkIcon.classList.add("hidden");
themeToggleLightIcon.classList.remove("hidden");
}
});
