
const password = document.getElementById("password");
const hints = document.getElementById("passwordHints");

const lengthHint = document.getElementById("lengthHint");
const numberHint = document.getElementById("numberHint");
const specialHint = document.getElementById("specialHint");

password.addEventListener("focus", () => {
    hints.style.display = "block";
});

password.addEventListener("blur", () => {
    if (password.value === "") {
        hints.style.display = "none";
    }
});

password.addEventListener("input", () => {
    const value = password.value;

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
});

const cpassword = document.getElementById("signup-password");
const confirmPassword = document.getElementById("confirm-password");
const confirmMsg = document.getElementById("confirmPasswordMsg");

function checkPasswordMatch() {
    if (!confirmPassword.value) {
        confirmMsg.style.display = "none";
        return;
    }

    confirmMsg.style.display = "block";

    if (password.value === confirmPassword.value) {
        confirmMsg.textContent = "✔ Passwords match";
        confirmMsg.classList.add("valid");
    } else {
        confirmMsg.textContent = "❌ Passwords do not match";
        confirmMsg.classList.remove("valid");
    }
}

password.addEventListener("input", checkPasswordMatch);
confirmPassword.addEventListener("input", checkPasswordMatch);


const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";

    passwordInput.type = isPassword ? "text" : "password";
    togglePassword.classList.toggle("fa-eye");
    togglePassword.classList.toggle("fa-eye-slash");
});


const authForms = document.getElementById("authForms");
const signUpLink = document.getElementById("signUpLink"); // Updated to match new ID
const backToSignInLink = document.getElementById("backToSignIn"); // New link for going back

signUpLink.addEventListener("click", (e) => {
    e.preventDefault();
    authForms.classList.add("show-signup");
});

backToSignInLink.addEventListener("click", (e) => {
    e.preventDefault();
    authForms.classList.remove("show-signup");
});