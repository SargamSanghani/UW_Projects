<?php include __DIR__ . '/includes/header.inc.php'; ?>
    <!-- Start of: main  -->
    <main>

        <h1 class="text-center fancy-header"><span>Let us know what you think!</span></h1>

        <!-- Start of: wrapper  -->
        <div id="wrapper">
            <div id="contact_wrapper">

                <!-- Start of: form tag -->
                <form action="http://scott-media.com/test/form_display.php" method="post" id="contactus_form"
                    autocomplete="on">

                    <input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />

                    <p>
                        <input type="text" name="first_name" id="first_name" maxlength="50" size="30"
                            placeholder="Please enter first name *" required="required" />
                    </p>

                    <p>
                        <input type="text" id="last_name" name="last_name" maxlength="50" size="30"
                            placeholder="Please enter last name *" required="required" />
                    </p>

                    <p>
                        <input type="email" name="email_address" id="email_address" size="30"
                            placeholder="Email address *" required="required" />
                    </p>

                    <p>
                        <input type="tel" name="phone" id="phone" placeholder="Mobile number (optional)" />
                    </p>

                    <p>
                        <select id="category" name="category" required="required">
                            <option value="" selected disabled>How can we help you? *</option>
                            <option value="refund">Refund</option>
                            <option value="order_status">Order Status</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </p>

                    <p>
                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Type here... *"
                            required="required">
                        </textarea>
                    </p>

                    <p>
                        <input type="submit" id="sign_up_btn" class="btn" value="Submit" />
                    </p>

                </form>
                <!-- End of: form tag -->

            </div>
        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>