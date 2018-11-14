$(document).ready(function()
{
    $('#services_tab').on('click', function() {
        document.getElementById("loader").style.display = "block";
        var organizations_id = $('#organizations_id').val();
        // console.log(organizations_id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        
        $.ajax({
            type: 'POST',
            url: '/organizationservice_'+organizations_id,
            contentType: false,
            cache: false, // To unable request pages to be cached
            processData: false,
            success: function(data) {
                $('#loader').hide();
                $('#services').html(data);
            },
            error: function(errResponse) {

            }
        });
        
    });
});