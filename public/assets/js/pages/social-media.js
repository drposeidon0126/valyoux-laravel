
jQuery(document).ready(function(){

    //////INPUT FIELDS
    $("#plus").click( function(e) {
        e.preventDefault();
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        // Get its current value
        var currentVal = parseInt($(field).val());
        // If is not undefined
        if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
        // Increment
            $(field).val(currentVal + 1);
        }
    });

    // This button will decrement the value till 0
    $("#minus").click( function(e) {
        e.preventDefault();
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        // Get its current value
        var currentVal = parseInt($(field).val());
        // If it isn't undefined or its greater than 0
        if ( !isNaN(currentVal) && currentVal > 1 ) {
        // Decrement one
            $(field).val(currentVal - 1);
        }
    });
    $("#plus2").click( function(e) {
        e.preventDefault();
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        // Get its current value
        var currentVal = parseInt($(field).val());
        // If is not undefined
        if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
        // Increment
            $(field).val(currentVal + 1);
        }
    });

    // This button will decrement the value till 0
    $("#minus2").click( function(e) {
        e.preventDefault();
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        // Get its current value
        var currentVal = parseInt($(field).val());
        // If it isn't undefined or its greater than 0
        if ( !isNaN(currentVal) && currentVal > 1 ) {
        // Decrement one
            $(field).val(currentVal - 1);
        }
    });

    $("#plus3").click( function(e) {
        e.preventDefault();
        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";
        // Get its current value
        var currentVal = parseInt($(field).val());
        // If is not undefined
        if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
        // Increment
            $(field).val(currentVal + 1);
        }
    });


    /*dolalr button selection*/
    $('.dollar-price').on('click', function () {
        $('.dollar-price').removeClass('active');
        $(this).addClass('active');
    });

    /*add value to author */
    var delete_id;
    $(document, this).on('click', '.delete', function () {
        delete_id = $(this).attr('id');
        $('#confirmModal').modal('show');
    });
    $(document).on('click', '#ok_change', function () {
        var url = $("meta[name=app-url]").attr("content");
       redirect_url = url+'/role/switch?role_id=3&url='+window.location.href;
       window.location.href= redirect_url;
    });

    $('.add_value').on('click', function () {
        var media_id = $(this).val();
        user_role = $('#user_role').val();
        if(user_role != 3){
             $('#RoleconfirmModal').modal('show');
            return false;
        }else{
        var amount = $('.dollar-price.active').val();
        if (typeof amount === "undefined"){
            $('.error_message').show();
        }else{
            $('.error_message').hide();

            $(this).html('Thank you for your Valyou');
            $(this).attr('disabled', 'disabled');



            var token = $("meta[name=csrf-token]").attr("content");
            var url = $("meta[name=app-url]").attr("content");

            $.ajax({
                method: 'post',
                context: this,
                url: url+'/valyouartist',
                data: {
                    amount: amount,
                    media_id: media_id,
                    _token: token
                },
                success: function (response) {
                    console.log(response);
                    var data =  JSON.parse(response);
                    if(data.status == 'success'){
                   $('#proceedModal .popup-text b').html(data.artist_name);
                   $('#proceedModal .popup-text .vip_points').html(data.points);
                   $('#proceedModal').modal('toggle');
                    }else{
                        $(this).html('Proceed to Valyou Song');
                        $(this).prop("disabled", false);
                        js_error(data.message);
                    }
                },
                error: function (response) {
                    $(this).html('Proceed to Valyou Song');
                    $(this).prop("disabled", false);
                    alert('Something went wrong. Please try agian later');
                }
            })
        }
    }
    });

    $('.valyou-close-btn').on('click', function(){
        $('.valyou-media').css('display','none');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    });

    $('#proceedModal').on('hidden.bs.modal', function () {
        location.reload();
    });
    $('.comment-btn, mo-comment-send-btn').on('click', function () {

        var media_id = $(this).attr('data-media');
        var comment = $("input[name=comment-"+media_id+"]").val();
        var token = $("meta[name=csrf-token]").attr("content");
        var url = $("meta[name=app-url]").attr("content");
        if(comment.length > 0){
            $.ajax({
                method: 'post',
                context: this,
                url: url+'/valyoucomment',
                data: {
                    comment: comment,
                    media_id: media_id,
                    _token: token
                },
                success: function (response) {
                    $("input[name=comment-"+media_id+"]").val('');
                    $('#comments-section-'+media_id+' ul').append(response);
                   /* $('#proceedModal .popup-text b').html(response);
                    $('#proceedModal').modal('toggle');*/
                },
                error: function () {
                    alert('Something went wrong. Please try agian later');
                }
            })
        }else{
            alert('Please enter your comment');
        }
    });



     $(document).on('click', '.edit_comment', function () {
        var id = $(this).attr('data-id');
        var text = $('li#comment_'+id+' p.sc-comment').text();

        $('#edit_comment .comment_id').val(id);
        $('#edit_comment input.comment_id').val(id);
        $('#edit_comment input.comment').val(text);
        $('#edit_comment').modal('toggle');
    });


    $('.update_comment_form').on('submit', function (e) {
        e.preventDefault();
        var comment =  $('#edit_comment input.comment').val();
        var id =  $('#edit_comment .comment_id').val();
        var token = $("meta[name=csrf-token]").attr("content");
        var url = $("meta[name=app-url]").attr("content");

        $.ajax({
            method: 'post',
            context: this,
            url: url+'/valyou-update-comment',
            data: {
                comment: comment,
                id: id,
                _token: token
            },
            success: function (response) {
               $('li#comment_'+id+' p.sc-comment').text(response);
                $('#edit_comment').modal('toggle');
            },
            error: function () {
                alert('Something went wrong. Please try again later');
            }
        })


    });


    $(document).on('click', '.delete_comment', function () {

        if (!confirm('Are you sure?')) return false;


        var id = $(this).attr('data-id');
        var token = $("meta[name=csrf-token]").attr("content");
        var url = $("meta[name=app-url]").attr("content");

        $.ajax({
            method: 'post',
            context: this,
            url: url+'/valyou-delete-comment',
            data: {
                id: id,
                _token: token
            },
            success: function (response) {
                $('li#comment_'+id).hide();
            },
            error: function () {
                alert('Something went wrong. Please try again later');
            }
        })
    })

    
});

// send comment
function sendComment(input_id) {
    var media_id = $('#media_id').val();
    var comment = $("#"+input_id).val();
    //if(media_id == 0) {alert('Please select media!'); return;}
    if(comment == '') {alert('Please enter your comment'); return;}
    
    $.ajax({
        method: 'post',
        context: this,
        url: app_url+'/valyoucomment',
        data: {
            comment: comment,
            media_id: media_id,
            _token: token
        },
        success: function (response) {
            $('.mo-comments').append(response);
            alert('Sent comment successful');
            $("#"+input_id).val('');
            return true;
        },
        error: function () {
            alert('Something went wrong. Please try agian later');
            return false;
        }
    })
    
}
