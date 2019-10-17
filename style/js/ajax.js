$(document).ready(function() {

    function filter_data() {
        var color = get_filter('color');
        var category = get_filter('category');

        $.ajax({
            url: 'shop',
            method: 'POST',
            data: {color: color, category: category},
            success: function(data) {
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name) {
        var filter = [];
        $('.'+class_name+':checked').each(function() {
            filter.push($(this).val());
        });

        return filter;
    }

    $('.common_selector').click(function() {
        filter_data();
    });


    $('#search').keyup(function() {
        var search = $('#search').val();

            $.ajax({
                url: 'shop',
                type: 'POST',
                data: {search: search},
                success: function(data) {
                    $('#result').html(data);
                }
            });

    });

});
