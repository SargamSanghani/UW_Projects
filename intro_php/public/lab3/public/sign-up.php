<?php

include __DIR__ . '/../includes/functions.php';

$title = "Sign Up";

include __DIR__ . '/../includes/header.inc.php';

?>

    <!-- Start of: main  -->
    <main>
        <h1 class="text-center fancy-header"><?=e($title)?></h1>

        <!-- Start of: wrapper  -->
        <div id="wrapper">
            <div id="contact_wrapper">

                <!-- Start of: form tag -->
                <form action="http://scott-media.com/test/form_display.php" method="post" id="signup_form"
                    autocomplete="on" class="pt-10">

                    <fieldset class="fieldset-padd">

                        <legend id="legend_id">
                            <h2>Create Your Account</h2>
                        </legend>

                        <p>
                            <input type="text" name="first_name" id="first_name" maxlength="50" size="30"
                                placeholder="Please enter first name *" required="required" />
                        </p>

                        <p>
                            <input type="text" id="last_name" name="last_name" maxlength="50" size="30"
                                placeholder="Please enter last name *" required="required" />
                        </p>

                        <p>
                            <input type="password" name="my_pw" id="my_pw" maxlength="16" minlength="8"
                                placeholder="Please enter password *" required="required" />
                        </p>

                        <p>
                            <input type="password" name="re_pw" id="re_pw" maxlength="16" minlength="8"
                                placeholder="Please re-enter password *" required="required" />
                        </p>

                        <p>
                            <input type="email" name="email_address" id="email_address" size="30"
                                placeholder="Email address *" required="required" />
                        </p>

                        <p>
                            <input type="tel" name="phone" id="phone" placeholder="Mobile number (optional)" />
                        </p>

                    </fieldset>

                    <p>
                        <input type="checkbox" id="i_agree" name="i_agree" value="Yes" required />
                        <label for="i_agree">
                            * I agree to the Terms of Services and Privacy Policy. </label>
                    </p>

                    <p>
                        <input type="submit" class="btn" value="Send Form" /> &nbsp;
                        <input type="reset" class="btn" value="Clear Form" />
                    </p>

                </form>
                <!-- End of: form tag -->

                <p>Already have an account? <a href="sign-up.php">Sign In</a></p>
            </div>
        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

<?php  include __DIR__ . '/../includes/footer.inc.php'; ?>