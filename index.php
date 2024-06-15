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
?>

<header class="main-header" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('<?php echo get_theme_file_uri('/assets/img/main_image.jpg'); ?>');">
    <div class="container-fluid px-0">
        <div class="row justify-content-center align-items-center h-70">
            <div class="col-12 text-center">
                <!-- Optional content or leave empty -->
            </div>
        </div>
    </div>
</header>

<div class="container px-lg-4">

    <div class="p-2 p-lg-5 rounded-3 text-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Careers and study opportunities</li>
            </ol>
        </nav>

        <div class="m-4 m-lg-5">
            <h1 class="display-5 fw-bold mb-2">Nec accumsan massa pulvinar rhoncus dictum.</h1>
            <p class="fs-4 text-justify">Vel ultrices ornare arcu placerat viverra egestas sit. Cursus commodo vitae faucibus hac. Sem pretium lacus nunc urna commodo feugiat lacus. Quam id molestie sit leo vulputate. Nisi aliquet in quis aenean nisi. Blandit nunc quis pulvinar morbi parturient vitae porttitor in risus. Massa a faucibus porttitor est maecenas aliquet.</p>
            <a class="btn btn-primary px-6 mb-2 mb-lg-0 ms-auto" href="#!">Button</a>
        </div>
    </div>
</div>

<section class="py-5 mb-4">
    <div class="container construct-education-border-bottom">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">

            <div class="col-lg-7">
                <h2 class="fw-normal mb-4">In molestie eros ac elit ac.</h2>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur. Sapien aliquam morbi suspendisse velit commodo. Lacus amet semper aliquet id neque nunc. Risus amet gravida adipiscing netus. Vel ultrices ornare arcu placerat viverra egestas sit. Cursus commodo vitae faucibus hac. Sem pretium lacus nunc urna commodo feugiat lacus. Quam id molestie sit leo vulputate. Nisi aliquet in quis aenean nisi. Blandit nunc quis pulvinar morbi parturient vitae porttitor in risus. Massa a faucibus porttitor est maecenas aliquet.</p>

                <nav class="navbar navbar-light">

                    <p class="fw-bold">Blandit nunc quis pulvinar morbi parturient vitae porttitor in risus.</p>

                    <form role="form">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Placeholder text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><img src="<?php echo get_theme_file_uri('/assets/icons/search.png'); ?>" />
                                </button>
                            </span>
                        </div>
                    </form>
                </nav>

            </div>

            <div class="col-lg-5"><img class="img-fluid mb-4 mb-lg-0" src="<?php echo get_theme_file_uri('/assets/img/image 6.jpg'); ?>" alt="..."></div>
        </div>
    </div>
    </div>

    <section class="py-5 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/img/Frame 448.jpg'); ?>" alt="..."></a>
                        <div class="card-body mt-4">
                            <p class="card-text">Quam id molestie sit leo vulputate. Nisi aliquet in quis aenean nisi. Blandit nunc quis pulvinar morbi parturient vitae porttitor in risus. Massa a faucibus porttitor est maecenas aliquet.</p>

                        </div>

                        <div class="form-check m-3">
                            <input class="form-check-input p-checkbox" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label pl-4 pt-1" for="flexCheckDefault">
                                Nisi aliquet in quis aenean nisi
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/img/Frame 448.jpg'); ?>" alt="..."></a>
                        <div class="card-body mt-4">
                            <p class="card-text">Sapien aliquam morbi suspendisse velit commodo. Lacus amet semper aliquet id neque nunc.</p>
                        </div>

                        <div class="form-check m-3">
                            <input class="form-check-input p-checkbox" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label pl-4 pt-1" for="flexCheckDefault">
                                Nisi aliquet in quis aenean nisi
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/img/Frame 448.jpg'); ?>" alt="..."></a>
                        <div class="card-body mt-4">
                            <p class="card-text">Quam id molestie sit leo vulputate. Nisi aliquet in quis aenean nisi. Blandit nunc quis pulvinar morbi parturient vitae porttitor in risus. Massa a faucibus porttitor est maecenas aliquet.</p>
                        </div>

                        <div class="form-check m-3">
                            <input class="form-check-input p-checkbox" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label pl-4 pt-1" for="flexCheckDefault">
                                Nisi aliquet in quis aenean nisi
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    get_footer();
