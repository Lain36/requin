<?php

use JetBrains\PhpStorm\Pure;

require('header.php'); ?>
<?php

$firstname = $name = $email = $phonne = $message = "";
$firstnameError = $nameError = $emailError = $phonneError = $messageError = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonne = $_POST["phone"];
    $message = $_POST["message"];

    if (empty($firstname)) {
        $firstnameError = " où est votre prenom  ";
    }
    if (empty($name)) {
        $nameError = " vous avez oubliez votre nom   ";
    }
    if (empty($phonne)) {
        $messageError = " message d'erreur   ";
    }

    if (empty($message)) {
        $messageError = " message d'erreur   ";
    }
    if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $emailError = " message d'erreur  ";
    }


}

?>

<div class="container">
    <div>
        <div class="divider"></div>
        <div class="heading">
            <h1> contactez moi</h1>
        </div>
        <div class="row bg-dark card ">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="XXXcontact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="text-light" for="firstname">Prenom</label>
                            <input type="text" id="firstname" name="firstname" class="form-control"
                                   placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                            <p class="comments"><?php echo $firstnameError; ?> </p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-light" for="name">Nom</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom"
                                   value="<?php echo $name; ?>">
                            <p class="comments"><?php echo $nameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-light" for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control"
                                   placeholder="Votre email" value="<?php echo $email; ?>">
                            <p class="comments"><?php echo $emailError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-light" for="phone">telephone </label>
                            <input type="text" id="phone" name="phone" class="form-control"
                                   placeholder="votre téléphone" value="<?php echo $phonne; ?>">
                            <p class="comments"><?php echo $phonneError; ?></p>
                        </div>
                        <div class="col-md-12">
                            <label  class="text-light" for="firstname">Message</label>
                            <textarea id="message" name="message" class="form-control"
                                      placeholder="votre message" rows="4">
                                <?php echo $message; ?></textarea>
                            <p class="comments"><?php echo $messageError; ?></p>
                        </div>
                        <div class="col-md-12">

                            <p class="text-info"><strong>* ces informations sont requises</strong></p>
                        </div>
                        <div class=" d-grid gap-2">
                            <button id="button1" class="btn btn-primary" type="submit">envoye ton message</button>
                        </div>
                    </div>
                    <p class="thank-you"> Votre message a bien été envoyé, merci de m'avoir contacté </p>
                </form>


            </div>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>
