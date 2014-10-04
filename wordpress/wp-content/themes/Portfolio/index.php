<?php
$the_query = new WP_Query( [
                               'p'         => '7',
                               'post_type' => 'misc'
                           ]
);
get_header ();
?>
<section class="home home--dev" data-200-bottom="background-position: 20% 100%"
         data--1000-top="background-position: 20% 50%">
    <div class="container">
        <article>
            <?php while ($the_query->have_posts ()) : $the_query->the_post () ?>
                <h2><?php the_field ( 'title_bloc1' ) ?></h2>
                <?php the_field ( 'content_bloc1' ) ?>
            <?php endwhile ?>
        </article>
    </div>
</section>
<div class="home--divider" title="Photo réalisée par Luc Matagne">
    <img src="<?php echo get_template_directory_uri () ?>/misc/img-home/sep01.jpg" alt="Photo shooting homestuck"
         data-1200-bottom="bottom: 75%" data--1200-top="bottom: 0%">
</div>

<section class="home home--graph container">
    <article>
        <ul>
            <li>
                <figure><img src="<?php echo get_template_directory_uri () ?>/misc/img-home/logo01.png" alt="Logo ECV"
                             class="home--graph-logo"></figure>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri () ?>/misc/img-home/logo02.png"
                             alt="Logo de Library" class="home--graph-logo"></figure>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri () ?>/misc/img-home/logo03.png"
                             alt="Logo de Smily Panda" class="home--graph-logo"></figure>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri () ?>/misc/img-home/logo04.png"
                             alt="Logo de Boldas constructi on" class="home--graph-logo"></figure>
            </li>
        </ul>
        <?php while ($the_query->have_posts ()) : $the_query->the_post () ?>
            <h2><?php the_field ( 'title_bloc2' ) ?></h2>
            <?php the_field ( 'content_bloc2' ) ?>
        <?php endwhile ?>
    </article>
</section>
<div class="home--divider" title="Photo réalisée par Luc Matagne">
    <img src="<?php echo get_template_directory_uri () ?>/misc/img-home/sep02.jpg" alt="Photo shooting couple"
         data-1200-bottom="bottom: 75%" data--1200-top="bottom: 0%">
</div>

<section class="home home--photo">
    <figure>
        <video autoplay loop poster="misc/img-home/poster-video.jpg">
            <source src="<?php echo get_template_directory_uri () ?>/img/vid-home.mp4" type="video/mp4">
        </video>
    </figure>
    <div class="container">
        <article>
            <?php while ($the_query->have_posts ()) : $the_query->the_post () ?>
                <h2><?php the_field ( 'title_bloc3' ) ?></h2>
                <?php the_field ( 'content_bloc3' ) ?>
            <?php endwhile ?>
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
<?php get_footer () ?>
