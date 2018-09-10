<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->
  <?php if ( is_front_page() ) : ?>
            <ul class="fixed-menuhome">
<li><a href="#gioi-thieu" data-title="Banner" class="tooltipstered">Giới thiệu</a></li>
<li><a href="#quy-trinh" data-title="Banner" class="tooltipstered">Quy trình</a></li>
<li><a href="#khach-hang" data-title="Banner" class="tooltipstered">Khách hàng</a></li>
<li><a href="#bang-gia" data-title="Banner" class="tooltipstered">Bảng giá</a></li>
<li><a href="#giao-hang" data-title="Banner" class="tooltipstered">Giao hàng</a></li>
<li><a href="#tieu-chi" data-title="Banner" class="tooltipstered">Tiêu chí</a></li>
<li><a href="#lien-he" data-title="Banner" class="tooltipstered">Liên hệ</a></li>
</ul>
        <?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
