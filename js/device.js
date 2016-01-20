var region_url = '/device/region';

$(function () {
    $('#datetimepicker').datetimepicker({
        lang: 'ch',
        format: 'Y年m月d日',
        formatDate: 'Y/m/d'
    });

    // 选择省份
    $('#select_province').on('change', function () {
        var id = $(this).val();
        $.get(region_url + '/' + id, function (res) {
            $('#select_city').html(res);
            $('.selectpicker').selectpicker('refresh');
        });
    });

    $('#select_city').on('change', function () {

        var pid = $('#select_province').val();
        var cid = $(this).val();

        $.post('/device/getBase', {
            pid: pid,
            cid: cid
        }, function (result) {
            var html = '';

            $.each(result.base, function (i, b) {
                html += '<option value="' + b.id + '">' + b.name + '</option>';
            });

            if (html == '') {
                html += '<option value="0">该城市没有试驾基地</option>';
            }

            $('#select_base').html(html);
            $('#select_base').selectpicker('refresh');

        }, 'json');
    });
});

//end file