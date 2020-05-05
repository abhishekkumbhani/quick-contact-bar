// Sticky Side Buttons JS
jQuery(function ($) {

    // Buttons accorion + sortable
    $('#qcb-sortable-buttons').accordion({
            active: false,
            collapsible: true,
        })
        .sortable({
            axis: "y",
        });

    // Add new button
    $('.qcb-add-btn').click(function () {

        var li_count = ($('#qcb-sortable-buttons li').length) - 1;
        var new_li = li_count + 1;
        var ul = $('#qcb-sortable-buttons');
        var li = '<li><div class="qcb-field-header">New Button<i class="fa fa-caret-down" aria-hidden="true"></i></div><div class="qcb-field-body"><div class="qcb-field-item"> <label>Button Text / Title</label> <input type="text" class="widefat"> </div><div class="qcb-field-item"> <label>Text</label> <input type="text" class="widefat"> </div><div class="qcb-field-item"> <div class="ssb-iconpicker-container"> <label for="button-icon-<?php echo $btn_id; ?>">Icon</label> <input type="text" class="widefat ssb-iconpicker" data-placement="bottomRight"> <span class="ssb-icon-preview input-group-addon"></span> </div> </div><div class="qcb-field-item"> <label>Link URL</label> <input type="text" class="widefat"> </div><div class="qcb-field-item"> <label>Open link in new tab</label> <input type="checkbox" id="button-opening-1" class="open-new-window" value="1"> </div>';

        ul.prepend(li);

        $('#qcb-sortable-buttons').accordion( "refresh" );

        qcb_action('#qcb-sortable-buttons');

        return false;

    });

    // Icon Picker
    $('.qcb-iconpicker').iconpicker();

    // Color picker
    $('.qcb-colorpicker').wpColorPicker();

});