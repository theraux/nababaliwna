document.addEventListener("DOMContentLoaded", () => {
    const resetForms = document.getElementById("resetForms");
    const continueBtn = document.getElementById("continueReset");

    if (!resetForms || !continueBtn) return;

    continueBtn.addEventListener("click", (e) => {
    e.preventDefault();
    resetForms.classList.add("show-reset");
});

});