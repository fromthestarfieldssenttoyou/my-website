<!-- front-page.php -->
<section class="featured-novels">
    <?php
    $args = array(
        'post_type' => 'novel',
        'posts_per_page' => 5
    );
    $novels = new WP_Query( $args );

    if ( $novels->have_posts() ) :
        while ( $novels->have_posts() ) : $novels->the_post();
            ?>
            <div class="novel">
                <div class="novel-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="novel-info">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
</section>

<section class="library">
    <?php
    $args = array(
        'post_type' => 'novel',
        'posts_per_page' => 6
    );
    $novels = new WP_Query( $args );

    if ( $novels->have_posts() ) :
        echo '<div class="novel-grid">';
        while ( $novels->have_posts() ) : $novels->the_post();
            ?>
            <div class="novel-thumbnail">
                <?php the_post_thumbnail('medium'); ?>
                <h3><?php the_title(); ?></h3>
            </div>
        <?php endwhile; 
        echo '</div>';
    endif; wp_reset_postdata();
    ?>
</section>

<section class="recent-search">
    <?php
    $tags = get_tags();
    foreach ( $tags as $tag ) :
        ?>
        <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="search-button">
            <i class="fa fa-search"></i> <?php echo $tag->name; ?>
        </a>
    <?php endforeach; ?>
</section>