<?php
$the_query    = new WP_Query( [
                                  'p'         => '7',
                                  'post_type' => 'misc'
                              ]
);
$logos_query  = new WP_Query( [
                                  'post_type'      => 'creation',
                                  'posts_per_page' => 4,
                                  'orderby'        => 'rand',
                                  'type'           => 'logo'
                              ]
);
$photos_query = new WP_Query( [
                                  'post_type' => 'creation',
                                  'posts_per_page' => 2,
                                  'orderby'        => 'rand',
                                  'type'      => 'photographie'
                              ]
);
while ($photos_query->have_posts ())
{
    $photos_query->the_post ();
    $photos[ ] = get_field ( 'creation_file' );
}
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
    <img src="<?php echo $photos[ 0 ][ 'url' ] ?>" alt="<?php echo $photos[ 0 ][ 'title' ] ?>"
         data-1200-bottom="bottom: 75%" data--1200-top="bottom: 0%">
</div>

<section class="home home--graph container">
    <article>
        <ul>
            <?php
            while ($logos_query->have_posts ()): $logos_query->the_post ();
                $logo = get_field ( 'creation_file' );
                ?>
                <li>
                    <figure>
                        <img src="<?php echo $logo[ 'url' ] ?>"
                             alt="<?php echo $logo[ 'title' ] ?>"
                             class="home--graph-logo">
                    </figure>
                </li>
            <?php endwhile ?>
        </ul>
        <?php while ($the_query->have_posts ()) : $the_query->the_post () ?>
            <h2><?php the_field ( 'title_bloc2' ) ?></h2>
            <?php the_field ( 'content_bloc2' ) ?>
        <?php endwhile ?>
    </article>
</section>
<div class="home--divider" title="Photo réalisée par Luc Matagne">
    <img src="<?php echo $photos[ 1 ][ 'url' ] ?>" alt="<?php echo $photos[ 1 ][ 'title' ] ?>"
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
            <span id="contact"></span>
        </article>
    </div>
</section>
<section class="home home--contact container">
    <article>
        <?php include 'contact-form.php' ?>
    </article>
</section>
<?php get_footer () ?>
