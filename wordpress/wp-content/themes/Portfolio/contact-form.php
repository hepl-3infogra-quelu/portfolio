<?php

// Si le formulaire est envoyé
if (isset( $_POST[ 'submitted' ] ))
{


    // Vérifier que le champs "nom" n'est pas vide
    if (trim ( $_POST[ 'name' ] ) === '')
    {
        $nameError = 'Vous avez oublié de me dire votre nom.';
        $hasError  = true;
    } else
    {
        $name = trim ( $_POST[ 'name' ] );
    }

    // Vérifier que le champs "sujet" n'est pas vide
    if (trim ( $_POST[ 'subject' ] ) === '')
    {
        $subjectError = 'De quoi voulez-vous me parler ?';
        $hasError     = true;
    } else
    {
        $subject = trim ( $_POST[ 'subject' ] );
    }

    // Vérifier que l'email entré est correct
    if (trim ( $_POST[ 'email' ] ) === '')
    {
        $emailError = 'Je ne pourrais pas vous répondre si vous ne me donnez pas votre adresse.';
        $hasError   = true;
    } else
    {
        if (!filter_var ( trim ( $_POST[ 'email' ] ), FILTER_VALIDATE_EMAIL ))
        {
            $emailError = 'Adresse e-mail invalide.';
            $hasError   = true;
        } else
        {
            $email = trim ( $_POST[ 'email' ] );
        }
    }

    // Vérifier que le message n'est pas vide
    if (trim ( $_POST[ 'content' ] ) === '')
    {
        $contentError = 'Vous avez oublié ce que vous vouliez me dire ?';
        $hasError     = true;
    } else
    {
        $content = stripslashes ( trim ( $_POST[ 'content' ] ) );
    }

    // Si il n'y a pas d'erreur on envoie l'email
    if (!isset( $hasError ))
    {

        $emailTo  = 'quelumatagne@gmail.com';
        $subject  = $sujet;
        $sendCopy = trim ( $_POST[ 'sendCopy' ] );
        $body     = "Nom: $name \n\nEmail: $email \n\nMessage:\n $content";
        $headers  = 'De : luc-matagne.be <' . $emailTo . '>' . "\r\n" . 'Répondre à : ' . $email;

        mail ( $emailTo, $subject, $body, $headers );

        if ($sendCopy == true)
        {
            mail ( $email, $subject, $body, $headers );
        }
        $headers = 'De : <noreply@luc-matagne.be>';

        $emailSent = true;
    }
}

if (isset( $emailSent ) && $emailSent == true)
{
    ?>
    <h2>Merci, <? echo $name ?></h2>

    <p>Votre e-mail a été envoyé avec succès. Vous recevrez une réponse sous peu.</p>
<?php
} else
{
    if (isset( $hasError ))
    {
        ?>
        <p class="form--error">Ah ! Vous avez du oublier de remplir un des champs correctement.</p>
    <?php } ?>

    <h2>Besoin d'aide ? Contactez moi !</h2>

    <form action="#contact" class="form" method="post">
        <div class="form--input form--narrow">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name"
                   value="<?php echo ( isset( $_POST[ 'name' ] ) ) ? $_POST[ 'name' ] : '' ?>">
            <?php if ($nameError != '') : ?>
                <span class="form--error"><? echo $nameError ?></span>
            <?php endif ?>
        </div>

        <div class="form--input form--narrow">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="youremail@domain.com"
                   value="<?php echo ( isset( $_POST[ 'email' ] ) ) ? $_POST[ 'email' ] : '' ?>">
            <?php if ($emailError != '') : ?>
                <span class="form--error"><? echo $emailError ?></span>
            <?php endif ?>
        </div>

        <div class="form--input form-large">
            <label for="subject">Sujet</label>
            <input type="text" name="subject" id="subject"
                   value="<?php echo ( isset( $_POST[ 'subject' ] ) ) ? $_POST[ 'subject' ] : '' ?>">
            <?php if ($subjectError != '') : ?>
                <span class="form--error"><? echo $subjectError ?></span>
            <?php endif ?>
        </div>

        <div class="form--textarea">
            <label for="content">Message</label>
            <textarea name="content" id="content" cols="30" rows="10"><?php echo ( isset( $_POST[ 'content' ] ) )
                    ? stripslashes ( [ 'content' ] ) : '' ?></textarea>
            <?php if ($contentError != '') : ?>
                <span class="form--error"><? echo $contentError ?></span>
            <?php endif ?>
        </div>

        <div class="form--actions">
            <div>
                <input type="hidden" name="submitted" value="true">
                <input type="checkbox" name="sendCopy" id="sendCopy"
                       value="true"
                    <?php echo ( isset( $_POST[ 'sendCopy' ] ) && $_POST[ 'sendCopy' ] == true ) ? ' checked="checked"'
                        : '' ?>>
                <label for="sendCopy">M'envoyer une copie</label>
            </div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
<?php } ?>