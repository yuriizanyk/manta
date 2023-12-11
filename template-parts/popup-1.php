<?php



$wcl_popup_1 = get_field('wcl_popup_1', 'option');
$group_1     = $wcl_popup_1['group_1'];
$group_2     = $wcl_popup_1['group_2'];

$title               = $group_1['title'];
$desc                = $group_1['desc'];
$mailchimp_shortcode = $group_1['mailchimp_shortcode'];

$image = $group_2['image'];
$image = wp_get_attachment_image($image, 'full');
?>

<style>
    @import url(https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap);.wcl-popup-1{position:fixed;width:100%;height:100%;top:0;left:0;z-index:1010;visibility:hidden;color:#000;font-family:Lato,sans-serif}.wcl-popup-1.active{visibility:visible}.wcl-popup-1.active .data-overlay{opacity:.8}.wcl-popup-1 .mc4wp-alert,.wcl-popup-1 .mc4wp-notice{text-align:center;max-width:260px;margin:10px auto 0}.wcl-popup-1 .mc4wp-form p{margin-bottom:15px}.wcl-popup-1 .mc4wp-form p:last-child{margin-top:25px;margin-bottom:0}.wcl-popup-1 .mc4wp-form input:not([type=submit]){width:100%;max-width:322px;height:55px;padding:16px;color:#000;font-family:Lato;font-size:19px;font-weight:400;border-radius:5px;border:1px solid #c2c2c2}.wcl-popup-1 .mc4wp-form input:not([type=submit])::-webkit-input-placeholder{-webkit-transition:.25s;transition:.25s;opacity:1;color:#8e9195}.wcl-popup-1 .mc4wp-form input:not([type=submit])::-moz-placeholder{-moz-transition:.25s;transition:.25s;opacity:1;color:#8e9195}.wcl-popup-1 .mc4wp-form input:not([type=submit]):-ms-input-placeholder{-ms-transition:.25s;transition:.25s;opacity:1;color:#8e9195}.wcl-popup-1 .mc4wp-form input:not([type=submit])::-ms-input-placeholder{-ms-transition:.25s;transition:.25s;opacity:1;color:#8e9195}.wcl-popup-1 .mc4wp-form input:not([type=submit])::placeholder{-webkit-transition:.25s;transition:.25s;opacity:1;color:#8e9195}.wcl-popup-1 .mc4wp-form input:not([type=submit]):focus::-webkit-input-placeholder{opacity:0}.wcl-popup-1 .mc4wp-form input:not([type=submit]):focus::-moz-placeholder{opacity:0}.wcl-popup-1 .mc4wp-form input:not([type=submit]):focus:-ms-input-placeholder{opacity:0}.wcl-popup-1 .mc4wp-form input:not([type=submit]):focus::-ms-input-placeholder{opacity:0}.wcl-popup-1 .mc4wp-form input:not([type=submit]):focus::placeholder{opacity:0}.wcl-popup-1 .mc4wp-form input[type=submit]{width:100%;max-width:322px;height:55px;border:none;color:#fff;font-family:Lato;font-size:19px;font-weight:700;border-radius:5px;background:#34abdc}.wcl-popup-1 .data-row{display:-webkit-box;display:-ms-flexbox;display:flex;margin:0 -30px}.wcl-popup-1 .data-col{width:50%;padding:0 30px}.wcl-popup-1 .data-title{color:#000;font-size:48px;font-weight:700;line-height:100%;margin-bottom:25px}.wcl-popup-1 .data-desc{color:#040404;font-size:24px;font-weight:400;line-height:1.1;margin-bottom:30px}.wcl-popup-1 .data-overlay{position:absolute;left:0;top:0;width:100%;height:100%;opacity:0;-webkit-transition:.25s;transition:.25s}.wcl-popup-1 .data-close{position:absolute;top:25px;right:30px;cursor:pointer;width:30px;height:30px;z-index:5}.wcl-popup-1 .data-close img{width:30px;height:30px}.wcl-popup-1 .data-inner{position:relative;padding:40px 50px;width:100%;min-height:565px;max-width:856px;border-radius:25px;background:#fff;-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,.1);box-shadow:0 0 15px 0 rgba(0,0,0,.1);-ms-flex-negative:0;flex-shrink:0;top:0}.wcl-popup-1 .data-inner::after{content:"";position:absolute;right:0;top:0;width:428px;height:100%;background-size:100% 100%;background-position:center;background-repeat:no-repeat;background-image:url("<?php echo get_stylesheet_directory_uri(); ?>/img/wcl_popup_1_el.png");max-width:calc(100% - 400px)}.wcl-popup-1 .data-inner.active{display:block}.wcl-popup-1 .data-inner-out{position:absolute;left:0;top:0;width:100%;height:100%;overflow-y:auto;padding:60px 0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.wcl-popup-1 .data-img img{position:absolute;right:87px;top:50%;z-index:2;-webkit-transform:translateY(-50%);transform:translateY(-50%)}@media(max-width:1025px){.wcl-popup-1 .data-inner{max-width:calc(100% - 100px)}.wcl-popup-1 .data-row{-ms-flex-wrap:wrap;flex-wrap:wrap}.wcl-popup-1 .data-col{width:100%}.wcl-popup-1 .data-img img{max-width:calc(100% - 580px)}}@media(max-width:800px){.wcl-popup-1 .data-img{display:none}}@media(max-width:575px){.wcl-popup-1 .data-inner{max-width:calc(100% - 50px);padding:30px 25px}.wcl-popup-1 .data-close{top:12px;right:14px}}
</style>

<div class="wcl-popup-1">
    <div class="data-overlay"></div>

    <div class="data-inner-out">
        <div class="data-inner">
            <div class="data-close">
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/wcl_popup_1_close.svg'; ?>" alt="img">
            </div>

            <div class="data-container">
                <div class="data-row">
                    <div class="data-col">
                        <?php if (!empty($title)) : ?>
                            <h2 class="data-title">
                                <?php echo $title; ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (!empty($desc)) : ?>
                            <div class="data-desc">
                                <?php echo $desc; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($mailchimp_shortcode)) : ?>
                            <div class="data-form">
                                <?php echo do_shortcode($mailchimp_shortcode); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="data-col">
                        <?php if (!empty($image)) : ?>
                            <div class="data-img">
                                <?php echo $image; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.querySelector('.wcl-popup-1')) {
            let sections = document.querySelectorAll('.wcl-popup-1');

            document.querySelector('header').addEventListener('click', function() {
                document.querySelector('.wcl-popup-1').classList.add('active');
               // document.querySelector('.wcl-popup-1 .data-inner').classList.add('active')
            })

            sections.forEach(element => {
                element.querySelector('.data-close').addEventListener('click', function(e) {
                    element.classList.remove('active')
                })

                element.querySelector('.data-overlay').addEventListener('click', function(e) {
                    element.classList.remove('active')
                })

                element.querySelector('.data-inner-out').addEventListener('click', function(e) {
                    if (!e.target.closest('.data-inner')) {
                        element.classList.remove('active')
                    }
                })
            });
        }
    });
</script>
