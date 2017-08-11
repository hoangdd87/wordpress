<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hestia
 * @since Hestia 1.0
 */


get_header();
?>
</header>
<?php
$anh1 = get_field( 'anh_1' );
$anh2 = get_field( 'anh_2' );
$anh3 = get_field( 'anh_3' );

?>
<div class="wrapper hoangdd-wrapper">
    <div class="container-fluid hoangdd-container-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel slide header header-filter" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item header">
                        <img src=<?php echo $anh1; ?> alt="Awesome Image" class="hoangdd-opacity">

                    </div>
                    <div class="item">
                        <img src=<?php echo $anh2; ?> alt="Awesome Image" class="hoangdd-opacity">

                    </div>
                    <div class="item active">
                        <img class="hoangdd-opacity" src=<?php echo $anh3; ?> alt="Awesome Image">
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <i class="material-icons"></i>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <i class="material-icons"></i>
                </a>

            </div>

        </div>

        <div class="hoangdd-header-text">
            <h1 class="white-color text-center">
				<?php echo get_field( 'heading_1' ); ?>
            </h1>
            <h3 class="white-color text-center">
				<?php echo get_field( 'heading_3' ); ?>
            </h3>
            <a href="#hoangdd-contact-me" class="btn btn-primary content-center">Đăng ký</a>
        </div>

    </div>
    <!--Start section1-->
	<?php
	$category_slug1       = get_field( 'category_slug1' );
	$number_posts_display = get_field( 'number_posts_display' );
	$args                 = array( 'numberposts' => 3, 'category_name' => 'ly-do-lua-chon-chunnam' );
	$postlist1            = get_posts( $args );
	?>
    <div class="section hoangdd-section-white">
        <div class="container">
            <a href="<?php echo get_category_link( get_category_by_slug( $category_slug1 )->term_id ); ?>">
                <h2 class="title text-center hoangdd-h2-title-section"><?php echo get_field( 'section1_name' ) ?></h2>
            </a>
            <div class="row flex-row justify-content-sm-around">
				<?php foreach ( $postlist1 as $post ) :
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hoangdd-thumb');

					?>

                    <div class="col-md-4 hoangdd-col-hoder">
                        <a href="<?php echo $post->guid;
						$descriptions = get_post_custom_values( 'description', $post->ID );
						$description  = $descriptions[0];
						$title        = $post->post_title;
						?>">
                            <div class="hoangdd-picture-holder">
                                <img src="<?php echo $image[0]; ?>" alt="Thumbnail Image"
                                     class="rounded img-fluid img-raised">
                            </div>
                            <div class="hoangdd-textborder">
                                <h4 class="title text-center hoangdd-h4-title-col"><?php echo $title ?></h4>
                                <p class="text-justify"> <?php echo $description; ?></p>
                            </div>
                        </a>
                    </div>

				<?php endforeach; ?>
            </div>
        </div>
    </div>
    <!--End Lý do lựa chọn-->
    <!--Start Thông báo tuyển sinh-->
    <div class="section hoangdd-section-grey">
        <div class="container">
            <h2 class="title text-center hoangdd-h2-title-section">Thông báo tuyển du học sinh</h2>
            <div class="row flex-row justify-content-sm-around">
                <div class="col-md-4 hoangdd-col-hoder">
                    <div class="hoangdd-picture-holder">
                        <img src="assets/img/home-page/tuyensinh1.jpg" alt="Thumbnail Image"
                             class="rounded img-fluid img-raised">
                    </div>
                    <div class="hoangdd-textborder">
                        <h4 class="title text-center hoangdd-h4-title-col">Thông báo tuyển du học sinh VISA</h4>
                        <p class="text-justify"> Chunnam là một trong các trường Đại học hàng đầu Hàn Quốc
                            ... Chunnam là một trong các trường Đại học hàng đầu Hàn Quốc ... Chunnam là một trong các
                            trường Đại học hàng đầu Hàn Quốc ...</p>
                    </div>
                </div>
                <div class="col-md-4 hoangdd-col-hoder">
                    <div class="hoangdd-picture-holder">
                        <img src="assets/img/home-page/tuyensinh2.png" alt="Thumbnail Image"
                             class="rounded img-fluid img-raised">
                    </div>
                    <div class="hoangdd-textborder">
                        <h4 class="title text-center hoangdd-h4-title-col">Thông báo tuyển nghiên cứu sinh VISA</h4>
                        <p class="text-justify"> Chunnam là một trong các trường Đại học hàng đầu Hàn Quốc
                            ... Chunnam là một trong các trường Đại học hàng đầu Hàn Quốc ... Chunnam là một trong các
                            trường Đại học hàng đầu Hàn Quốc ...</p>
                    </div>
                </div>
            </div>
        </div>
        <section id='hoangdd-contact-me' class="contact-me">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="title">Liên hệ với chúng tôi</h2>
                        <h5 class="description">Bạn hãy điền đầy đủ thông tin vào Form dưới đây và gửi lại cho chúng tôi
                            để nhận
                            được tư vấn sớm nhất</h5>
                    </div>
                </div>
                <div class="row">
					<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
                </div>
            </div>
        </section>
    </div>
    <!--End Thông báo tuyển sinh-->


	<?php get_footer(); ?>

</div>

