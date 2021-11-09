$(function() {
    if ($('#admin-content-edit').hasClass('admin-content-edit-on')) {
        $('body').addClass('admin-content-edit-on');
    }

    $(document).on('click', '#admin-content-edit', function(e) {
        e.preventDefault();
        $(this).add('body').toggleClass('admin-content-edit-on');

        Cookies.set('admin-content-edit-on', $(this).hasClass('admin-content-edit-on') ? 1 : 0);
    });
    $(document).on('click', 'body.admin-content-edit-on .admin-content-edit', function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        var url = $(this).data('url');

        //$.fancybox.open('<div class="admin-content-edit__editor"><iframe src="' + url + '" /></div>');
        $.fancybox.open({
            src  : url,
            type : 'iframe',
            opts : {
                smallBtn: true,
                iframe: {
                    css : {
                        'max-width': '800px',
                        'max-height': '600px'
                    }
                }
            }
        });

        return false;
    });
});