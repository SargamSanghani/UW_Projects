<?php include __DIR__ . '/includes/header.inc.php'; ?>

    <!-- Start of: main  -->
    <main>
        <h1 class="text-center fancy-header"><span><?=e($title)?></span></h1>

        <!-- Start of: wrapper  -->
        <div id="wrapper">
            <div id="contact_wrapper">

                <!-- Start of: form tag -->
                <form method="post" id="signup_form" autocomplete="on" class="mt-10">

                    <input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />
                    <fieldset class="fieldset-padd">

                        <legend id="legend_id">
                            <div class="larger-text">Create Your Account</div>
                        </legend>

                        <div class="pt-10">
                            <!-- first name  -->
                            <div class="half-block">
                                <label for="first_name">First Name <span class="mandate">*</span>: </label><span class="error"><?=$errors['first_name'][0] ?? ''?></span>
                                <input type="text" name="first_name" id="first_name" 
                                value="<?=e($post['first_name'] ?? '')?>" placeholder="Please enter first name"/>
                            </div>

                            <!-- last name  -->
                            <div class="half-block">
                                <label for="last_name">Last Name <span class="mandate">*</span>: </label><span class="error"><?=$errors['last_name'][0] ?? ''?></span>
                                <input type="text" id="last_name" name="last_name"
                                    value="<?=e($post['last_name'] ?? '')?>" placeholder="Please enter last name"/>
                        </div>

                        <div>
                            <!-- password  -->
                            <div class="half-block">
                                <label for="password">Password <span class="mandate">*</span>: </label><span class="error"><?=$errors['password'][0] ?? ''?></span>
                                <input type="password" name="password" id="password"
                                   value="<?=e($post['password'] ?? '')?>" placeholder="Must contain at least 8 characters, a number and a special character"/>
                            </div>

                            <!-- confirm password  -->
                            <div class="half-block">
                                <label for="password">Confirm Password <span class="mandate">*</span>: </label><span class="error"><?=$errors['re_password'][0] ?? ''?></span>
                                <input type="password" name="re_password" id="re_password" placeholder="Please re-enter password"/>
                            </div>
                        </div>

                        <div>
                            <!-- email address  -->
                            <div class="half-block">
                                <label for="email">Email Address<span class="mandate">*</span>: </label><span class="error"><?=$errors['email'][0] ?? ''?></span>
                                <input type="text" name="email" id="email" size="30"
                                    value="<?=e($post['email'] ?? '')?>" placeholder="Email address"/>
                            </div>

                            <!-- phone number  -->
                            <div class="half-block">
                                <label for="phone">Phone <span class="mandate">*</span>: </label><span class="error"><?=$errors['phone'][0] ?? ''?></span>
                                <input type="text" name="phone" id="phone" placeholder="Mobile number: xxx-xxx-xxxx"
                                    value="<?=e($post['phone'] ?? '')?>" />
                            </div>
                        </div>

                        <div>
                            <!-- street  -->
                            <div class="half-block">
                                <label for="street">Street <span class="mandate">*</span>: </label><span class="error"><?=$errors['street'][0] ?? ''?></span>
                                <input type="text" name="street" id="street"
                                    value="<?=e($post['street'] ?? '')?>" placeholder="Please enter street" />
                            </div>

                            <!-- city  -->
                            <div class="half-block">
                                <label for="city">City <span class="mandate">*</span>: </label><span class="error"><?=$errors['city'][0] ?? ''?></span>
                                <input type="text" id="city" name="city"
                                    value="<?=e($post['city'] ?? '')?>" placeholder="Please enter city" />
                            </div>
                        </div>

                        <div>
                            <!-- postal code  -->
                            <div class="half-block">
                                <label for="postal_code">Postal Code <span class="mandate">*</span>: </label><span class="error"><?=$errors['postal_code'][0] ?? ''?></span>
                                <input type="text" name="postal_code" id="postal_code"
                                    value="<?=e($post['postal_code'] ?? '')?>" placeholder="Postal code: xxx xxx" />
                            </div>

                            <!-- province  -->
                            <div class="half-block">
                                <label for="province">Province <span class="mandate">*</span>: </label><span class="error"><?=$errors['province'][0] ?? ''?></span>
                                <input type="text" id="province" name="province"
                                    value="<?=e($post['province'] ?? '')?>" placeholder="Please enter province" />
                            </div>
                        </div>

                        <div>
                            <!-- country  -->
                            <div class="half-block">
                                <label for="country">Country <span class="mandate">*</span>: </label><span class="error"><?=$errors['country'][0] ?? ''?></span>
                                <input type="text" name="country" id="country"
                                    value="<?=e($post['country'] ?? '')?>" placeholder="Please enter country" />
                            </div>

                            <!-- subscribe to newsletter  -->
                            <div class="half-block">
                                <br><input class="ml-15" type="checkbox" id="is_subscribed" name="is_subscribed" 
                                <?=isset($post['is_subscribed']) ? 'checked' : ''?>  />
                                <label for="is_subscribed">
                                        Subscribe to newsletter </label>
                            </div>
                        </div>

                    </fieldset>
                    <p>
                        <input type="submit" class="btn" value="Submit" name="submit" /> &nbsp;
                        <input type="reset" class="btn" value="Clear" name="clear" />
                    </p>

                </form>
                <!-- End of: form tag -->

                <p>Already have an account? <a href="?p=sign-up">Login</a></p>
            </div>
        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>