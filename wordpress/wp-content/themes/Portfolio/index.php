<?php get_header() ?>
        <section class="home home--dev" data-200-bottom="background-position: 20% 100%" data--1000-top="background-position: 20% 50%">
            <div class="container">
                <article>
                    <h2>Le développement web</h2>
                    <p>Je réalise des sites web de A à Z !</p>
                    <p>Sur base de votre demande je vous crée votre propre site Internet adapté à vos besoins mais aussi et surtout à ceux de vos utilisateurs !</p>
                </article>
            </div>
        </section>
        <div class="home--divider" title="Photo réalisée par Luc Matagne">
            <img src="<?php echo get_template_directory_uri() ?>/misc/img-home/sep01.jpg" alt="Photo shooting homestuck" data-1200-bottom="bottom: 75%" data--1200-top="bottom: 0%">
        </div>

        <section class="home home--graph container">
            <article>
                <ul>
                    <li>
                        <figure><img src="<?php echo get_template_directory_uri() ?>/misc/img-home/logo01.png" alt="Logo ECV" class="home--graph-logo"></figure>
                    </li>
                    <li>
                        <figure><img src="<?php echo get_template_directory_uri() ?>/misc/img-home/logo02.png" alt="Logo de Library" class="home--graph-logo"></figure>
                    </li>
                    <li>
                        <figure><img src="<?php echo get_template_directory_uri() ?>/misc/img-home/logo03.png" alt="Logo de Smily Panda" class="home--graph-logo"></figure>
                    </li>
                    <li>
                        <figure><img src="<?php echo get_template_directory_uri() ?>/misc/img-home/logo04.png" alt="Logo de Boldas constructi on" class="home--graph-logo"></figure>
                    </li>
                </ul>
                <h2>Graphisme</h2>
                <p>Vous avez besoin d'une nouvelle identité graphique ? Un flyer ou une affiche ? </p>
                <p>Je peux également vous aider dans ce domaine ! ;)</p>
            </article>
        </section>
        <div class="home--divider" title="Photo réalisée par Luc Matagne">
            <img src="<?php echo get_template_directory_uri() ?>/misc/img-home/sep02.jpg" alt="Photo shooting couple" data-1200-bottom="bottom: 75%" data--1200-top="bottom: 0%">
        </div>

        <section class="home home--photo">
        <figure>
                <video autoplay loop poster="misc/img-home/poster-video.jpg">
                    <source src="<?php echo get_template_directory_uri() ?>/img/vid-home.mp4" type="video/mp4">
                </video>
        </figure>
            <div class="container">
                <article>
                    <h2>Photographie & vidéo</h2>
                    <p>Vous organisez un meeting, un événement d'entreprise ou vous êtes sur le point de vous marier? Vous avez besoin d'un photographe pour immortaliser ces moments !</p>
                    <p>Ça tombe bien car je peux vous aider !</p>
                    <p>Mais encore mieux, je réalise aussi des vidéos de qualité professionelle de la prise de vue au montage.</p>
                </article>
            </div>
        </section>

        <section class="home home--contact container">
            <article>
                <h2>Besoin d'aide ? Contactez moi !</h2>
                <form action="#" class="form" method="post">
                    <div class="form--input form--narrow">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="form--input form--narrow">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" placeholder="youremail@domain.com">
                    </div>
                    <div class="form--input form-large">
                        <label for="subject">Sujet</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div class="form--textarea">
                        <label for="content">Message</label>
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form--actions">
                        <div>
                            <input type="hidden" name="sendCopy" value="0">
                            <input type="checkbox" name="sendCopy" id="sendCopy" value="1">
                            <label for="sendCopy">M'envoyer une copie</label>
                        </div>
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </article>
        </section>
    <?php get_footer() ?>
