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
        $name = stripslashes ( $_POST[ 'name' ] );
    }

    // Vérifier que le champs "sujet" n'est pas vide
    if (trim ( $_POST[ 'subject' ] ) === '')
    {
        $subjectError = 'De quoi voulez-vous me parler ?';
        $hasError     = true;
    } else
    {
        $subject = stripslashes ( $_POST[ 'subject' ] );
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

        $emailTo = 'quelumatagne@gmail.com';
        $body    = nl2br ( $content );

        $headers = 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From: ' . $name . ' <' . $email . '>';

        mail ( $emailTo, $subject, $body, $headers );

        $headers = 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From: no-reply <no-reply@luc-matagne.be>';

        if (isset( $_POST[ 'sendCopy' ] ) && $_POST[ 'sendCopy' ] == true)
        {

            mail ( $email, $subject, $body, $headers );
        }

        $emailSent = true;
    }
}

if (isset( $emailSent ) && $emailSent == true)
{
    ?>
    <h2>Merci, <? echo $name ?> !</h2>

    <p>J'ai bien reçu votre email, je vous réponds <abbr title="As Soon As Possible">ASAP</abbr> ;)</p>
<?php
} else
{
    if (isset( $hasError ))
    {
        ?>
        <h2>Ah ! Je pense que vous avez oublié de remplir au moins un des champs correctement.</h2>
    <?php } ?>

    <?php
    if (!isset( $hasError ))
    {
        ?>
        <h2>Besoin d'aide ? Contactez moi !</h2>
    <?php } ?>

    <form action="#contact" class="form" method="post">
        <div class="form--input form--narrow<?php echo ( isset( $nameError ) ) ? ' form--error' : ''
        ?>">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name"
                   value="<?php echo ( isset( $_POST[ 'name' ] ) ) ? $_POST[ 'name' ] : '' ?>">
            <?php if (isset( $nameError )) : ?>
                <span><? echo $nameError ?></span>
            <?php endif ?>
        </div>

        <div class="form--input form--narrow<?php echo ( isset( $emailError ) ) ? ' form--error' : ''
        ?>">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="youremail@domain.com"
                   value="<?php echo ( isset( $_POST[ 'email' ] ) ) ? $_POST[ 'email' ] : '' ?>">
            <?php if (isset( $emailError )) : ?>
                <span><? echo $emailError ?></span>
            <?php endif ?>
        </div>

        <div class="form--input form-large<?php echo ( isset( $subjectError ) ) ? ' form--error' : '' ?>">
            <label for="subject">Sujet</label>
            <input type="text" name="subject" id="subject"
                   value="<?php echo ( isset( $_POST[ 'subject' ] ) ) ? $_POST[ 'subject' ] : '' ?>">
            <?php if (isset( $subjectError )) : ?>
                <span><? echo $subjectError ?></span>
            <?php endif ?>
        </div>

        <div class="form--textarea<?php echo ( isset( $contentError ) ) ? ' form--error' : '' ?>">
            <label for="content">Message</label>
            <textarea name="content" id="content" cols="30" rows="10"><?php echo ( isset( $_POST[ 'content' ] ) )
                    ? stripslashes ( $_POST[ 'content' ] ) : '' ?></textarea>
            <?php if (isset( $contentError )) : ?>
                <span><? echo $contentError ?></span>
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