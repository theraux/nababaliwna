<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/css/user-interface/authentication.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>

    <div class="authentication-main-container">
        <div class="authentication-main-container-inner">
            <div class="authentication-logo-container">
                <div class="authentication-logo-wrapper ">
                    <img src="../../assets/images/user-interface/banners-images-logo/logo.png" alt="Clinic Logo" />
                </div>
                <div class="authentication-logo-text">
                    <h3>MAPRU</h3>
                    <h5>Dental Clinic</h5>
                </div>
                <div class="go-home d-flex ms-auto">
                    <a href="../user-interface/index.php"><i class="fa-solid fa-reply"></i><span> Back to </span> Home</a>
                </div>
            </div>

            <!-- Wrap both forms in a shared container for transitions -->
            <div class="authentication-forms" id="authForms">
                <!-- Sign-In Form -->
                <div class="authentication-form-main-container " id="signIn">
                    <div class="authentication-form-wrapper">
                        <div class="authentication-form-inner pt-3">
                            <div class="authentication-form-inner-text">
                                <h3>Welcome Back</h3>
                                <h5>Sign in to continue to your account</h5>
                            </div>
                            <form class="py-4">
                                <div class="log-in-container">
                                    <div class="log-in-wrapper">
                                        <label for="email">EMAIL</label>
                                        <div class="input-with-icon">
                                            <i class="fa-regular fa-envelope input-icon"></i>
                                            <input type="email" id="email" name="email" placeholder="example@gmail.com"
                                                required>
                                        </div>
                                    </div>
                                    <div class="log-in-wrapper">
                                        <label for="log-in-password">PASSWORD</label>
                                        <div class="input-with-icon">
                                            <i class="fa-solid fa-lock input-icon"></i>
                                            <input type="password" id="log-in-password" name="password" class="password-input"
                                                placeholder="Password" required>
                                            <i class="fa-solid fa-eye toggle-password" ></i>
                                        </div>
                                    </div>

                                    <div class="forgot-password">
                                        <a href="../user-interface/forgot-password.php" id="ForgotPassword">Forgot Password?</a>
                                    </div>
                                    <div class="log-in-button">
                                        <button><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
                                    </div>
                                </div>
                                <div class="create-account-container">
                                    <div class="create-account-wrapper">
                                        <p>Need an account? <a href="#" id="signUpLink">Sign Up</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sign-Up Form -->
                <div class="sign-up-container" id="signUp">
                    <div class="sign-up-wrapper">
                        <div class="sign-up-wrapper-text">
                        <a href="#" id="backToSignIn" title="Back to Sign In"><i class="fa-solid fa-arrow-left"></i>
                            Back <span> to Sign In </span></a>
                        </div>
                       
                        <div class="sign-up-inner  pt-3">

                            <div class="sign-up-text">
                                <h3>Join Us</h3>
                                <!-- Add your sign-up form fields here (e.g., name, email, password) -->
                                <p>Create an account to start your dental care journey</p>
                            </div>


                            <div class="form-container">
                                <form class="pb-2">
                                    <div class="sign-up-container-form">
                                        <div class="sign-up-wrapper-form">
                                            <label for="last-name">LAST NAME</label>
                                            <div class="input-with-icon">
                                                <i class="fa-regular fa-circle-user input-icon"></i>
                                                <input type="text" id="last-name" name="last-name"
                                                    placeholder="Last Name" required>
                                            </div>
                                        </div>

                                        <div class="sign-up-wrapper-form">
                                            <label for="first-name">FIRST NAME</label>
                                            <div class="input-with-icon">
                                                <i class="fa-regular fa-circle-user input-icon"></i>
                                                <input type="text" id="first-name" name="first-name"
                                                    placeholder="First Name" required>
                                            </div>
                                        </div>


                                        <div class="sign-up-wrapper-form">
                                            <label for="email">EMAIL</label>
                                            <div class="input-with-icon">
                                                <i class="fa-regular fa-envelope input-icon"></i>
                                                <input type="email" id="email" name="email"
                                                    placeholder="example@gmail.com" required>
                                            </div>
                                        </div>



                                        <div class="sign-up-wrapper-form">
                                            <label for="password">PASSWORD</label>
                                            <div class="input-with-icon">
                                                <i class="fa-solid fa-lock input-icon"></i>
                                                <input type="password" id="password" name="password" class="password-input"
                                                    placeholder="Create Password" required>
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                            </div>
                                        </div>

                                        <div class="password-hints" id="passwordHints">
                                            <div class="hint" id="lengthHint">❌ At least 8 characters</div>
                                            <div class="hint" id="numberHint">❌ Contains a number</div>
                                            <div class="hint" id="specialHint">❌ Contains a special character</div>
                                        </div>

                                        <div class="sign-up-wrapper-form">
                                            <label for="confirm-password">CONFIRM PASSWORD</label>
                                            <div class="input-with-icon">
                                                <i class="fa-solid fa-lock input-icon"></i>
                                                <input type="password" id="confirm-password" name="confirm-password" class="password-input"
                                                    placeholder="Confirm Password" required>
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                            </div>
                                            <small class="confirm-password-msg" id="confirmPasswordMsg">
                                                ❌ Passwords do not match
                                            </small>
                                        </div>

                                        <div class="terms-and-condition">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" id="TermsAndCondtionSignUp" required>
                                                <span class="checkmark"></span>

                                                <div class="checkbox-text"><span>I agree to the</span> <a href="#" id="">Terms and
                                                        Conditions</a> </div>
                                            </label>
                                        </div>


                                        <div class="sign-up-button">
                                            <button><i class="fa-solid fa-right-to-bracket"></i> Sign Up</button>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>

            <div class="authentication-logo-container"></div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/user-interface/authentication.js"></script>
</body>

</html>