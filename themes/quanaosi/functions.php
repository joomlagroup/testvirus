<?php
// Add custom Theme Functions here

//remove_action('woocommerce_single_product_summary','woocommerce_template_single_price',10);	
add_filter( 'woocommerce_product_tabs', 'helloacm_remove_product_review', 99);
function helloacm_remove_product_review($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}
remove_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart',30);	
function view_info_woo() { ?>

	<div class="contactinfo">
		<span style="color: #008000;">Đ/C: </span>
		<span style="color: #0000ff;"> 313 Đường Nguyễn Thị Kiểu , P.Tân Thới Hiệp, Quận 12, TPHCM</span><br>
		<a href="tel:0966653309"><span class="phone"><img title="Điện thoại liên hệ" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Phone-icon.png" alt="lien he happy party" width="40"> 0966 653 309</span></a>
	</div>
	<br />
<?php

}
add_action('woocommerce_single_product_summary','view_info_woo',19);