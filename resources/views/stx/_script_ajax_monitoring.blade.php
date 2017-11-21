<script>
    setTimeout(function refreshTable() {
        $.ajax({
            url:'{{ '/ajax-monitoring/'.Request::segment(2)  }}',

            dataType:'html',
            data:{
                someparam:'someval'
            },
            success:function(data) {
                $('#monitoring').find('section').empty().append(data);
                setTimeout(refreshTable, 1000);
            }
        });
    }, 1000);

</script>