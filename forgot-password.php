<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/css/user-interface/forgot-password.css">


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
                <div class="authentication-logo-wrapper">
                    <img src="../../assets/images/user-interface/banners-images-logo/logo.png" alt="Clinic Logo" />
                </div>
                <div class="authentication-logo-text">
                    <h3>MAPRU</h3>
                    <h5>Dental Clinic</h5>
                </div>
                <div class="go-home d-flex ms-auto">
                    <a href="../user-interface/index.php"><i class="fa-solid fa-reply"></i> <span>Back to</span> Home</a>
                </div>
            </div>

            <!-- Wrap both forms in a shared container for transitions -->
            <div class="forgot-password-forms" id="resetForms">
                <!-- Sign-In Form -->
                <div class="forgot-password-forms-main-container active" id="forgotPassword">
                    <div class="forgot-password-form-wrapper">
                        <div class="forgot-password-form-inner pt-3">
                            <div class="forgot-password-form-inner-text">
                                <h3>Forgot your password?</h3>
                                <h5>We’ve got you covered. Let’s get you back in.</h5>
                            </div>
                            <form class="py-4">
                                <div class="forgot-password-container">
                                    <div class="forgot-password-wrapper">
                                        <label for="email">EMAIL ADDRESS</label>
                                        <div class="input-with-icon">
                                            <i class="fa-regular fa-envelope input-icon"></i>
                                            <input type="email" id="forgotPasswordEmail" name="email"
                                                placeholder="example@gmail.com" required>
                                        </div>
                                    </div>


                                    <div class="forgot-password-wrapper">
                                        <label for="verificationCode">VERIFICATION CODE</label>
                                        <div class="input-with-icon">
                                            <i class="fa-solid fa-shield-halved input-icon"></i>
                                            <input type="text" id="verificationCode" maxlength="6" inputmode="numeric"
                                                autocomplete="one-time-code" name="verificationCode"
                                                placeholder="Enter 6-digit code" pattern="[0-9]{6}" maxlength="6"
                                                autocomplete="one-time-code" required>

                                        </div>
                                    </div>

                                    <div class="forgot-password-wrapper-verification">
                                        <h6>Verification Code</h6>
                                        <div class="forgot-password  ">
                                            <button type="button" id="sendCodeBtn">
                                                Send <span> Code </span>
                                            </button>
                                            <small id="timerText">
                                                Resend available in <span id="timer">60</span>s
                                            </small>
                                        </div>

                                    </div>

                                    <div class="forgot-password-button">
                                        <a href="#" id="continueReset">
                                            <i class="fa-solid fa-circle-arrow-right"></i> Continue
                                        </a>
                                    </div>
                                </div>
                                <div class="create-account-container">
                                    <div class="back-to-sign-in-wrapper">
                                        <p>Remember <span> your </span> password? <a href="../user-interface/authentication.php">Sign
                                                In</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="reset-password-form-container pt-3" id="resetPassword">
                    <div class="reset-password-form-wrapper ">
                        <div class="reset-password-inner pt-3">
                            <h3>Create a new password</h3>
                            <h5>You’re almost back in. Set your new password.</h5>
                        </div>

                        <form class="py-4">
                            <div class="reset-password-container">
                                <div class="reset-password-wrapper">
                                    <!-- <label for="resetPassword">PASSWORD</label>
                                    <div class="input-with-icon">
                                        <i class="fa-regular fa-envelope input-icon bg-info"></i>
                                        <input type="password" id="resetPassword" name="resetPassword"
                                            placeholder="Password" required>
                                    </div> -->

                                    <label for="resetyourPassword"> NEW PASSWORD</label>
                                    <div class="input-with-icon">
                                        <i class="fa-solid fa-lock input-icon"></i>
                                        <input type="password" id="resetyourPassword" name="resetyourPassword"
                                            placeholder="New Password" required>
                                            <i class="fa-solid fa-eye toggle-password"></i>

                                    </div>


                                    <div class="password-hints pt-3" id="resetPasswordHints">
                                        <div class="hint" id="resetLengthHint">❌ At least 8 characters</div>
                                        <div class="hint" id="resetNumberHint">❌ Contains a number</div>
                                        <div class="hint" id="resetSpecialHint">❌ Contains a special character</div>
                                    </div>

                                </div>





                                <div class="reset-password-wrapper">
                                    <label for="confirmResetPassword">CONFIRM PASSWORD</label>
                                    <div class="input-with-icon">
                                        <i class="fa-solid fa-lock input-icon"></i>
                                        <input type="password" id="confirmResetPassword" name="confirmResetPassword"
                                            placeholder="Confirm Password" required>
                                            <i class="fa-solid fa-eye toggle-password"></i>
                                    </div>
                                    <small class="confirm-password-msg" id="resetConfirmPasswordMsg">

                                        ❌ Passwords do not match
                                    </small>

                                </div>


                                <div class="continue-button">
                                    <button type="submit"><i class="fa-solid fa-circle-arrow-right"></i>
                                        Continue</button>
                                </div>


                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="authentication-logo-container"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/js/user-interface/forgot-password.js"></script>
 
</body>

</html>