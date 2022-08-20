<?php include __DIR__ . '/includes/header.inc.php'; ?>
<!-- Start of: main  -->
    <main>
        <h1 class="text-center fancy-header"><?=e($title)?></h1>

        <!-- Start of: wrapper  -->
        <div id="wrapper">
           
            <ul class="fl m-10 w50">

                <!-- Showing personal information  -->
                <li class="ptb-10"><strong>Personal information</strong></li>
                <table id="profile_info">
                    <tr>
                        <th>First Name:</th>
                        <td><?=e($result['first_name'])?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?=e($result['last_name'])?></td>
                    </tr>
                    <tr>
                        <th>Email addess:</th>
                        <td><?=e($result['email'])?></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td><?=e($result['phone'])?></td>
                    </tr>
                </table>

                <!-- Showing mailing information  -->
                <li class="ptb-10"><strong>Mailing information</strong></li>
                <table id="profile_info">
                    <tr>
                        <th>Street:</th>
                        <td><?=e($result['street'])?></td>
                    </tr>
                    <tr>
                        <th>City:</th>
                        <td><?=e($result['city'])?></td>
                    </tr>
                    <tr>
                        <th>Province:</th>
                        <td><?=e($result['province'])?></td>
                    </tr>
                    <tr>
                        <th>Country:</th>
                        <td><?=e($result['country'])?></td>
                    </tr>
                    <tr>
                        <th>Postal Code:</th>
                        <td><?=e($result['postal_code'])?></td>
                    </tr>

                </table>
            </ul>

            <!-- Default profile picture  -->
            <div class="m-20">
                <img src="images/default-profile.png" alt="Profile Picture"> </img>
            </div>
        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

<?php include __DIR__ . '/includes/footer.inc.php'; ?> 