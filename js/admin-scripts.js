(function ($) {
    function initializeCollapsibleBlocks() {
        setTimeout(() => {
            $('.wp-block').each(function () {
                var $block = $(this);
                var $blockContent = $block.find('.acf-block-component');

                var toggleCollapse = function () {
                    $blockContent.slideToggle();
                    $block.toggleClass('is-collapsed');
                };

                var $toggleButton = $('<div class="toggle-button"><span class="dashicons dashicons-arrow-down"></span></div>');
                $block.prepend($toggleButton);
                $toggleButton.click(toggleCollapse);
            });
        }, 10);

    }

    $(document).ready(initializeCollapsibleBlocks);
})(jQuery);