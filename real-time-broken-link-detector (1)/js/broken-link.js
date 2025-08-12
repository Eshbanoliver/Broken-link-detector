jQuery(document).ready(function($) {
    $('#scan-links').on('click', function() {
        $('#link-status').text('...');
        $.ajax({
            url: brokenLinkAjax.ajaxurl,
            method: 'POST',
            data: {
                action: 'check_broken_links_now'
            },
            success: function(response) {
                if (response.success) {
                    $('#link-status').text('✔');
                    $('#links-checked').text(response.data.total);
                    $('#broken-count').text(response.data.broken);
                    var list = '';
                    response.data.list.forEach(function(link) {
                        list += '<li>' + link + '</li>';
                    });
                    $('#broken-links-list').html(list);
                } else {
                    $('#link-status').text('✖');
                }
            }
        });
    });
});