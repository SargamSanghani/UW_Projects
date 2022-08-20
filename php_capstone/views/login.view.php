<?php include __DIR__ . '/includes/header.inc.php'; ?>

    <!-- Start of: main  -->
    <main>

        <!-- Start of: wrapper  -->
        <div id="wrapper">
            <div id="contact_wrapper">

                <!-- Start of: form tag -->
                <form method="post" id="signup_form" action="?p=process-login" autocomplete="on" class="mt-10">

                    <input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />

                    <fieldset class="fieldset-padd">

                        <legend id="legend_id">
                            <div class="larger-text">Login</div>
                        </legend>

                        <div>
                            <!-- email address  -->
                            <div class="ptb-10">
                                <label for="email">Email Address: </label><span class="error"><?=$errors['email'] ?? ''?></span>
                                <input type="text" name="email" id="email" size="30"
                                    value="<?=e($post['email'] ?? '')?>" placeholder="Please enter email address"/>
                            </div>
                            <!-- password  -->
                            <div class="ptb-10">
                                <label for="password">Password: </label><span class="error"><?=$errors['password'] ?? ''?></span>
                                <input type="password" name="password" id="password"
                                   value="<?=e($post['password'] ?? '')?>" placeholder="Please enter your password"/>
                            </div>

                        </div>

                    </fieldset>
                    <p>
                        <input type="submit" class="btn" value="Login" name="submit" /> &nbsp;
                        <input type="reset" class="btn" value="Clear" name="clear" />
                    </p>

                </form>
                <!-- End of: form tag -->

                <p>New to food corner? <a href="?p=sign-up">Register</a></p>
            </div>
        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>