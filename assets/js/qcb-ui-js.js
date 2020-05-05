// qcb UI jQuery
jQuery(function ($) {

    // Animation Slide
    var qcb_panel = $('#qcb-container'),
        qcb_panel_w = qcb_panel.width(),
        sbb_display_margin = 50,
        window_width = jQuery(window).width();

    qcb_panel.css('z-index', qcb_ui_data.z_index);

    if (qcb_panel.hasClass('qcb-btns-left') && (qcb_panel.hasClass('qcb-anim-slide') || qcb_panel.hasClass('qcb-anim-icons'))) {

        qcb_panel.css('left', '-' + (qcb_panel_w - sbb_display_margin) + 'px');

    } else if (qcb_panel.hasClass('qcb-btns-right') && (qcb_panel.hasClass('qcb-anim-slide') || qcb_panel.hasClass('qcb-anim-icons'))) {

        qcb_panel.css('right', '-' + (qcb_panel_w - sbb_display_margin) + 'px');

    }

    // Slide when hover
    if (window_width >= 768) {
        qcb_panel.hover(function () {

            if (qcb_panel.hasClass('qcb-btns-left') && qcb_panel.hasClass('qcb-anim-slide')) {

                qcb_panel.stop().animate({'left': 0}, 300);

            } else if (qcb_panel.hasClass('qcb-btns-right') && qcb_panel.hasClass('qcb-anim-slide')) {

                qcb_panel.stop().animate({'right': 0}, 300);

            }

        }, function () {

            if (qcb_panel.hasClass('qcb-btns-left') && qcb_panel.hasClass('qcb-anim-slide')) {

                qcb_panel.animate({'left': '-' + (qcb_panel_w - sbb_display_margin) + 'px'}, 300);

            } else if (qcb_panel.hasClass('qcb-btns-right') && qcb_panel.hasClass('qcb-anim-slide')) {

                qcb_panel.animate({'right': '-' + (qcb_panel_w - sbb_display_margin) + 'px'}, 300);

            }

        });

    } else {
        qcb_panel.click(function (e) {

            if (jQuery(this).hasClass('qcb-open')) {
                jQuery(this).removeClass('qcb-open');
                if (qcb_panel.hasClass('qcb-btns-left') && qcb_panel.hasClass('qcb-anim-slide')) {

                    qcb_panel.animate({'left': '-' + (qcb_panel_w - sbb_display_margin) + 'px'}, 300);

                } else if (qcb_panel.hasClass('qcb-btns-right') && qcb_panel.hasClass('qcb-anim-slide')) {

                    qcb_panel.animate({'right': '-' + (qcb_panel_w - sbb_display_margin) + 'px'}, 300);

                }
            } else {
                e.preventDefault();
                jQuery(this).addClass('qcb-open');

                if (qcb_panel.hasClass('qcb-btns-left') && qcb_panel.hasClass('qcb-anim-slide')) {

                    qcb_panel.stop().animate({'left': 0}, 300);

                } else if (qcb_panel.hasClass('qcb-btns-right') && qcb_panel.hasClass('qcb-anim-slide')) {

                    qcb_panel.stop().animate({'right': 0}, 300);

                }
            }

        });
    }


});