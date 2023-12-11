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
