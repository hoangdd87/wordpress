<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?>

<section class="contact-me">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="title">Liên hệ với chúng tôi</h2>
                <h5 class="description">Bạn hãy điền đầy đủ thông tin vào Form dưới đây và gửi lại cho chúng tôi để nhận
                    được tư vấn sớm nhất</h5>
            </div>
        </div>
        <div class="row">
            <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
        </div>
    </div>
</section>
<footer class="footer footer-black footer-big">
    <div class="container">

        <address class="hoangdd-address">
            <div class="hoangdd-address-item"><i class="fa fa-home white-color" aria-hidden="true"></i> CÔNG TY TNHH
                THƯƠNG MẠI DỊCH VỤ ICC PLUS (ICCPLUS CO., LTD)
            </div>
            <div class="hoangdd-address-item">
                <i class="fa fa-mobile" aria-hidden="true"></i> Hotline: <a class="hoangdd-a-item"
                                                                            href="tel:+84989596889">0989596889</a> |
                <i class="fa fa-phone-square white-color" aria-hidden="true"></i> Tel: <a class="hoangdd-a-item"
                                                                                          href="tel:+04 6686 8786">04
                    6686 8786</a> |
                <i class="fa fa-fax" aria-hidden="true"></i> Fax: <a class="hoangdd-a-item" href="fax:+84989596889">0989596889</a>
            </div>
            <div class="hoangdd-address-item"><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Trường Y Tế
                Công Cộng – Số 1A Đức Thắng, Bắc Từ Liêm, Hà Nội
            </div>
            <div class="hoangdd-address-item"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <a
                        class="hoangdd-a-item" href="mailto: duhociccplus@gmail.com">duhociccplus@gmail.com </a></div>
            <div class="hoangdd-address-item"><i class="fa fa-facebook" aria-hidden="true"></i> Fanpage: <a
                        class="hoangdd-a-item" href="https://www.facebook.com/">https://www.facebook.com </a></div>
        </address>

    </div>
</footer>
</div>

</div>

<?php
wp_footer(); ?>
</body>
</html>
