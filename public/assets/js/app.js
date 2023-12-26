$(document).ready(function(){
    function changeImage(imgthumb) {
        var mainImg = document.getElementById("video");
        mainImg.src = imgthumb.src;
    }

    (function() {
        // const promoteSong = document.querySelectorAll('.promoteSong');
        // Array.from(promoteSong).forEach(function (element) {
        //     element.addEventListener('change', function() {
        //         const id = element.getAttribute('data-id');
        //         const promoteSong = this.value;
        //         let item = '';
        //         if (promoteSong === "valyoux") {
        //             document.getElementById(`else${id}`).style.display = "none";
        //             document.getElementById(`email${id}`).style.display = "none";
        //             document.getElementById(`phone${id}`).style.display = "none";
        //             document.getElementById(`valyoux${id}`).style.display = "block";
        //         } else if (promoteSong === "email") {
        //             document.getElementById(`else${id}`).style.display = "none";
        //             document.getElementById(`valyoux${id}`).style.display = "none";
        //             document.getElementById(`phone${id}`).style.display = "none";
        //             document.getElementById(`email${id}`).style.display = "block";
        //         } else if (promoteSong === "phone") {
        //             document.getElementById(`else${id}`).style.display = "none";
        //             document.getElementById(`valyoux${id}`).style.display = "none";
        //             document.getElementById(`email${id}`).style.display = "none";
        //             document.getElementById(`phone${id}`).style.display = "block";
        //         } else {
        //             $(`#promoteuser${id}`).empty();
        //             document.getElementById(`valyoux${id}`).style.display = "none";
        //             document.getElementById(`email${id}`).style.display = "none";
        //             document.getElementById(`phone${id}`).style.display = "none";
        //             document.getElementById(`else${id}`).style.display = "block";
        //         }
        //     })
        // })

        // // sendStart
        // const sendStart = document.querySelectorAll('.sendStart');
        // Array.from(sendStart).forEach(function (e) {
        //     e.addEventListener('click',function () {
        //         const id = e.getAttribute('data-id');
        //         const quantity = document.getElementById(`quantity${id}`).value;
        //         const quantity2 = document.getElementById(`quantity2${id}`).value;
        //         const promoteSong = document.getElementById(`promoteSong${id}`).value;
        //        // const promoteuser = document.getElementById(`promoteuser${id}`).value;

        //         const selected = document.querySelectorAll(`#promoteuser${id}`+ ' option:checked');
        //         const promoteuser = Array.from(selected).map(el => el.value);

        //         const promoteemail = document.getElementById(`promoteemail${id}`).value;

        //         const promotephone = document.getElementById(`promotephone${id}`).value;
        //         axios({
        //             method: "post",
        //             url: "{{ route('admin.promotesong') }}",
        //             data: {
        //                 id:id,
        //                 quantity:quantity,
        //                 quantity2:quantity2,
        //                 promoteSong:promoteSong,
        //                 promoteuser:promoteuser,
        //                 promoteemail:promoteemail,
        //                 promotephone:promotephone,
        //             }
        //         }).then((res) => {
        //             js_success("You promoted a song");
        //         }).catch((err) => {
        //             throw err;
        //         });
        //     })
        // })

    })();



    // // Valyou Song Start
    // var vid = document.getElementsByClassName("overlay-for-audio");
    // console.log(vid);
    // vid.onplay = function() {
    //     vid.pause();
    //   alert("The video has started to play");
    // };
    // $(document).on('playing','.overlay-for-audio',function () {
    //     console.log(123456);
    //     let id = $(this).data('videoid');
    //     let userId = $(this).data('userid');
    //     let video = $(this).data('video');
    //     if(video == 1){
    //         $(`#video`+id).trigger('play');
    //         $(`#overlay`+id).remove();

    //     }else{

    //         $('#staticBackdropSong').modal('show');
    //         $('button.playsong').attr('id',`${id}`);
    //     }
    // })

    $('audio').on('playing', function() {
        console.log('playback started!');
    });

     // SHARING BUTTONS START
     $(document).on('click','.share-valyou-music',function () {
        let id = $(this).data('valyouid');
        $(`#valyou-music-section-${id}`).css('display','block');
        $(`#comments-section-${id}`).css('display','none');
        $(`#promote-song-section-${id}`).css('display','none');
    })

    $(document).on('click','.share-comments',function () {
        let id = $(this).data('commentid');
        $(`#valyou-music-section-${id}`).css('display','none');
        $(`#comments-section-${id}`).css('display','block');
        $(`#promote-song-section-${id}`).css('display','none');
    })

    $(document).on('click','.share-promote-song',function () {
        let id = $(this).data('promoteid');
        $(`#valyou-music-section-${id}`).css('display','none');
        $(`#comments-section-${id}`).css('display','none');
        $(`#promote-song-section-${id}`).css('display','block');
    })

    // SHARING BUTTONS END
    $('.follow').on('click', function () {

        var user_id = $(this).attr('id');

        if (typeof user_id === "undefined"){
            $('.error_message').show();
        }else{
            $('.error_message').hide();

            $('.follow').hide();
            $('.following').show();

            var token = $("meta[name=csrf-token]").attr("content");
            var url = $("meta[name=app-url]").attr("content");

            $.ajax({
                method: 'post',
                context: this,
                url: url+'/follow',
                data: {
                    user_id: user_id,
                    _token: token
                },
                success: function (response) {
                   var data =  JSON.parse(response);
                    if(data.status == 1){
                        $(this).prop("disabled", true);
                        $('.follow').hide();
                        $('.following').show().prop("disabled", false);
                        $('.following').attr('follower_id',data.id)
                    }
                },
                error: function () {

                    $(this).prop("disabled", false);
                    alert('Something went wrong. Please try agian later');
                }
            })
        }
    })

    $('.following').on('click', function () {
        var follower_id = $(this).attr('follower_id');
        var token = $("meta[name=csrf-token]").attr("content");
            var url = $("meta[name=app-url]").attr("content");
            /* Swal.fire({
                title: 'Are you sure?',
                text: "You eant to unfollow!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
              }).then(() => { */
                $.ajax({
                    method: 'post',
                    context: this,
                    url: url+'/follow',
                    data: {
                        follower_id: follower_id,
                        _token: token
                    },
                    success: function (response) {
                       var data =  JSON.parse(response);
                        if(data.status == 1){
                            $(this).prop("disabled", true);
                            $('.follow').show().prop("disabled", false);
                            $('.following').hide();

                        }
                    },
                    error: function () {

                        $(this).prop("disabled", false);
                        alert('Something went wrong. Please try agian later');
                    }
                })
            //  })

    });


})
function unfollowUser(follower_id){
    var token = $("meta[name=csrf-token]").attr("content");
    var url = $("meta[name=app-url]").attr("content");
     Swal.fire({
                title: 'Are you sure?',
                text: "You want to unfollow!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
              }).then((result) => {
                if (result.value) {
    $.ajax({
        method: 'post',
        context: this,
        url: url+'/follow',
        data: {
            follower_id: follower_id,
            _token: token
        },
        success: function (response) {
           var data =  JSON.parse(response);
            if(data.status == 1){
                $(this).prop("disabled", true);
                $('.follow-'+follower_id).remove();
                if(data.follow_count == 0){
                    loadMoreData(0);
                }

              }
        },
        error: function () {

            $(this).prop("disabled", false);
            alert('Something went wrong. Please try agian later');
            }
        })
     }
    })
}
function followUser(user_id){
   if (typeof user_id === "undefined"){
        $('.error_message').show();
    }else{
        $('.error_message').hide();

        $('.follow').hide();
        $('.following').show();

        var token = $("meta[name=csrf-token]").attr("content");
        var url = $("meta[name=app-url]").attr("content");

        $.ajax({
            method: 'post',
            context: this,
            url: url+'/follow',
            data: {
                user_id: user_id,
                _token: token
            },
            success: function (response) {
               var data =  JSON.parse(response);
                if(data.status == 1){
                    $(this).prop("disabled", true);
                    $('.follow').hide();
                    $('.following').show().prop("disabled", false);
                    $('.following').attr('follower_id',data.id)
                }
            },
            error: function () {

                $(this).prop("disabled", false);
                alert('Something went wrong. Please try agian later');
            }
        })
    }
}
function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

