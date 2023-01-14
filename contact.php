<?php

require_once "header.php";

require_once "app/classes/Autoload.php";

$contact = new app\classes\Contact();

if(isset($_POST["message_send"])){
    $contact->contactInfo($_POST);
}

?>

<section id="contact" class="py-5" style="background: linear-gradient( rgba(0, 0, 0, 0.8),rgba(0, 0, 0,0.8)), url('img/get_into_tech_image.jpg');background-attachment: fixed;background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="title_main text-white">
            <span class="main_title_section">
                Get In Touch
            </span>
        </div>

        <style>

            .form-control:focus {
                background:transparent;

            }

        </style>

        <form method="POST" action="" class="py-5 full_form">
            <div class="form-row">
                <div class="form-group col-md-6 form_section">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name *">
                </div>
                <div class="form-group col-md-6 form_section">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email *">
                </div>
            </div>
            <div class="form-group form_section">
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject *">
            </div>
            <div class="form-group form_section_textarea">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message *"></textarea>
            </div>
            <div class="">
                <button type="submit" name="message_send" class="buttones">Send</button>
            </div>
        </form>

        <?php

        $profile = new app\classes\Profile();
        $profileAccess = $profile->profileAccess();
        $profileRow = mysqli_fetch_assoc($profileAccess);

        ?>

        <div class="container details_user text-white">
            <div class="row">
                <div class="col-md-6 column col-lg-4 col-xs-12">
                    <h4>Phone</h4>
                    <p><?= $profileRow['phone']; ?></p>
                </div>
                <div class="col-md-6 column col-lg-4 col-xs-12">
                    <h4>Email</h4>
                    <p><?= $profileRow['email']; ?></p>
                </div>
                <div class="col-md-6 column col-lg-4 col-xs-12">
                    <h4>Address</h4>
                    <p><?= $profileRow['address']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "footer.php"; ?>