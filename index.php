<?php

/**
 *
 * Default page
 * 
 * @link hhttps://github.com/ndegwamoche/construct-education
 *
 * @package construct-education
 */

get_header();

global $post;
$post_slug = $post->post_name;

if (get_the_post_thumbnail_url(get_the_ID(), 'full')) {
    $page_featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $page_featured_image = get_theme_file_uri('/assets/img/main_image.jpg');
}
?>
<header class="new-header" style="background-image: url('<?php echo  esc_attr($page_featured_image) ?>');">
    <div class="container-fluid px-0">
        <div class="row justify-content-center align-items-center h-70">
            <div class="col-12 text-center">
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html(ucfirst(str_replace("-", " ", $post_slug))); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="custom-section">
    <div class="container">
        <h1 class="display-5 fw-bold text-left text-lg-center">
            <?php esc_html(the_title()); ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p><?php echo esc_html(the_content()); ?></p>
                <button type="button" class="btn btn-primary mt-4">Button</button>
            </div>
        </div>
    </div>
</section>

<?php
//get the In molestie eros ac elit ac. page
$call_page = get_page_by_title('In molestie eros ac elit ac.');

$p = get_page($call_page->ID);

if (get_the_post_thumbnail_url($call_page->ID, 'full')) {
    $call_page_featured_image = get_the_post_thumbnail_url($call_page->ID, 'full');
} else {
    $call_page_featured_image = get_theme_file_uri('/assets/img/image 6.jpg');
}

?>
<section class="mb-4">
    <div class="container construct-education-border-bottom">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">

            <div class="col-lg-5 order-1 order-lg-2 text-right text-lg-right mx-auto mx-lg-0 center-on-small">
                <img class="img-fluid mb-4 mb-lg-0" src="<?php echo  esc_attr($call_page_featured_image) ?>" alt="<?php echo esc_html($p->post_title); ?>">
            </div>

            <div class="col-lg-7 order-2 order-lg-1">
                <h2 class="fw-normal mb-4"><?php echo esc_html($p->post_title); ?></h2>
                <p class="mb-5"><?php echo esc_html($p->post_excerpt); ?></p>

                <nav class="navbar navbar-light">
                    <p class="fw-bold">Blandit nunc quis pulvinar morbi parturient vitae porttitor in risus.</p>
                    <form role="form">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Placeholder text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <img src="<?php echo get_theme_file_uri('/assets/icons/search.png'); ?>" />
                                </button>
                            </span>
                        </div>
                    </form>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mt-4">
    <div class="container">
        <div class="row">

            <?php

            $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => '3',
                'category__in' => array(get_cat_ID('Courses')),
                'order' => 'DESC'
            ));

            while ($wp_query->have_posts()) : $wp_query->the_post();

                if (get_the_post_thumbnail_url(get_the_ID(), 'full')) {
                    $course_featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                } else {
                    $course_featured_image = get_theme_file_uri('/assets/img/image 6.jpg');
                }

            ?>

                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="<?php echo  esc_attr($course_featured_image) ?>" alt="<?php echo esc_html(get_the_title()); ?>"></a>
                        <div class="card-body mt-4">
                            <p class="card-text"><?php echo esc_html(get_the_excerpt()); ?></p>
                        </div>

                        <div class="form-check m-3">
                            <input class="form-check-input p-checkbox" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label pl-4 pt-1" for="flexCheckDefault">
                                Nisi aliquet in quis aenean nisi
                            </label>
                        </div>

                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="py-5 mt-4">
    <div class="container">
        <div class="row">

            <div class="carousel" data-flickity='{ "lazyLoad": false }'>

                <?php

                $wp_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'category__in' => array(get_cat_ID('Slides')),
                    'order' => 'DESC'
                ));

                $count = 1;

                while ($wp_query->have_posts()) : $wp_query->the_post();

                    if (get_the_post_thumbnail_url(get_the_ID(), 'full')) {
                        $slides_featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        $slides_featured_image = get_theme_file_uri('/assets/img/slide-' . $count . '.jpg');
                    }

                ?>

                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="<?php echo  esc_attr($slides_featured_image) ?>" alt="<?php echo esc_html(get_the_title()); ?>" />
                        <div class="caption"><?php echo esc_html(get_the_title()); ?></div>
                    </div>

                <?php
                    $count++;
                endwhile;
                ?>
            </div>

            <div class="button-row mt-4">
                <img class="button button--previous mr-15 " src="<?php echo esc_url(get_theme_file_uri('/assets/icons/left.png')) ?>" alt="left" class="mr-4">
                <img class="button button--next ml-15" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/right.png')) ?>" alt="left" class="mr-4">
            </div>

        </div>
    </div>
</section>

<section class="py-5 mt-4">
    <div class="container">

        <h2 class="fw-normal mb-4">In molestie eros ac elit ac.</h2>

        <div class="accordion accordion-flush" id="accordionFlushExample">

            <?php

            $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'category__in' => array(get_cat_ID('FAQs')),
                'order' => 'DESC'
            ));

            $count = 1;

            while ($wp_query->have_posts()) : $wp_query->the_post();

            ?>
                <div class="accordion-item pt-4 pb-4">
                    <h2 class="accordion-header" id="flush-heading<?php echo $count; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $count; ?>">
                            <?php echo esc_html(get_the_title()); ?>
                        </button>
                    </h2>
                    <div id="flush-collapse<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $count; ?>" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo esc_html(the_content()); ?></div>
                    </div>
                </div>

            <?php
                $count++;
            endwhile;
            ?>

        </div>
    </div>
</section>
<?php

get_footer();
