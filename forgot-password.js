document.addEventListener("DOMContentLoaded", () => {
    const resetForms = document.getElementById("resetForms");
    const continueBtn = document.getElementById("continueReset");

    if (!resetForms || !continueBtn) return;

    continueBtn.addEventListener("click", (e) => {
        e.preventDefault();
        resetForms.classList.add("show-reset");
    });

});



const resetPassword = document.getElementById("resetyourPassword");
const confirmResetPassword = document.getElementById("confirmResetPassword");
const confirmMsg = document.getElementById("resetConfirmPasswordMsg");

const hints = document.getElementById("resetPasswordHints");
const lengthHint = document.getElementById("resetLengthHint");
const numberHint = document.getElementById("resetNumberHint");
const specialHint = document.getElementById("resetSpecialHint");

// Safety check
if (resetPassword && hints) {
    // Hide hints and message on load
    hints.style.display = "none";
    
    if (confirmMsg) {
        confirmMsg.style.display = "none";
    }

    // Show hints on focus
    resetPassword.addEventListener("focus", () => {
        hints.style.display = "block";
    });

    // Hide hints on blur
    resetPassword.addEventListener("blur", () => {
        hints.style.display = "none";
    });

    // Live password validation
    resetPassword.addEventListener("input", () => {
        const value = resetPassword.value;

        // Length check
        if (value.length >= 8) {
            lengthHint.textContent = "✔ At least 8 characters";
            lengthHint.classList.add("valid");
        } else {
            lengthHint.textContent = "❌ At least 8 characters";
            lengthHint.classList.remove("valid");
        }

        // Number check
        if (/\d/.test(value)) {
            numberHint.textContent = "✔ Contains a number";
            numberHint.classList.add("valid");
        } else {
            numberHint.textContent = "❌ Contains a number";
            numberHint.classList.remove("valid");
        }

        // Special character check
        if (/[^A-Za-z0-9]/.test(value)) {
            specialHint.textContent = "✔ Contains a special character";
            specialHint.classList.add("valid");
        } else {
            specialHint.textContent = "❌ Contains a special character";
            specialHint.classList.remove("valid");
        }

        // Check password match when main password changes
        checkPasswordMatch();
    });

    // Confirm password check
    if (confirmResetPassword && confirmMsg) {
        confirmResetPassword.addEventListener("input", checkPasswordMatch);
    }

    function checkPasswordMatch() {
        if (!confirmResetPassword.value) {
            confirmMsg.style.display = "none";
            return;
        }

        confirmMsg.style.display = "block";

        const match = resetPassword.value === confirmResetPassword.value;

        confirmMsg.textContent = match
            ? "✔ Passwords match"
            : "❌ Passwords do not match";

        confirmMsg.classList.toggle("valid", match);
    }
}



// reset-password.js or in a <script> tag on the reset page
document.querySelectorAll(".toggle-password").forEach(toggle => {
    toggle.addEventListener("click", function () {
        const input = this.closest(".input-with-icon")
            .querySelector('input[type="password"], input[type="text"]');

        const isPassword = input.type === "password";
        input.type = isPassword ? "text" : "password";

        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
    });
});