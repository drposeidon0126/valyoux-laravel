<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>UPLOAD AUDIO/VIDEO SONG <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Artist <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Uploads <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<style>
    @media (max-width: 525px){
        .card {
            margin-bottom: 0px;
        }
    }

    .card.upload-media {
        margin-bottom: 0px;
    }

    .progress,
    .progress-bar {
        height: 25px;
    }

    .progress-bar {
        background-color: #2ccb5a;
    }
    .audio-type{
        display: none;
    }
    /* .cover-image, */
    .co-owner {
        display: none;
    }

    .form-label {
        font-weight: 600 !important;
    }

    .has-error .form-control {
        border-color: #e73d4a;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    }

    .has-error .control-label {
        color: #e73d4a;
    }

    .has-error .help-block {
        color: #e73d4a;
        margin-top: 5px;
        margin-bottom: 5px;
        display: block;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- <form id="upload_media" method="POST" onsubmit="event.preventDefault();uploadMedia(this)" action="<?php echo e(route('artist.upload')); ?>" class="custom-validation" enctype="multipart/form-data"> -->
            <form id="upload_media" method="POST" action="<?php echo e(route('admin.upload')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label class="control-label">Is this an Music Video or Audio Track?</label>
                        <select name="type" id="type" onchange="checkMediaType(this.value)" class="form-control select2">
                            <option value="2">Music Video</option>
                            <option value="1">Audio Track</option>
                        </select>
                    </div>
                    <div class="form-group cover-image">
                        <label class="control-label">Song Title<span class="required"> * </span></label>
                        <input type="text" id="audio_title" name="audio_title" class="form-control">
                    </div>
                    <div class="form-group cover-image">
                        <label class="control-label">Music Artist Brand Name<span class="required"> * </span></label>
                        <input type="text" id="singer" name="singer" class="form-control">
                    </div>
                    <div class="form-group cover-image">
                        <label class="control-label">Featuring<span class="required"> * </span></label>
                        <input type="text" id="music_by" name="music_by" class="form-control">
                    </div>
                    <div class="form-group cover-image">
                        <label class="control-label">Produced By</label>
                        <input type="text" id="starcast" name="starcast" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label control-label written_by">Song Written By<span class="required"> * </span></label>
                        <input type="text" id="written_by" name="written_by" class="form-control" rows="4" />
                    </div>
                    <div class="form-group">
                        <label class="control-label control-label">Lyrics<span class="required"> * </span></label>
                        <textarea id="lyrics" name="lyrics" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group video-type">
                            <!-- <label class="control-label upload-media-type">Upload Video File<span class="required"> * </span></label> -->
                            <div class="card upload-media">
                                <div class="body ">
                                    <input type="file" id="name" class="dropify upload-media-input form-control" name="video"  data-allowed-file-extensions="mp4" accept=".mp4">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group audio-type">
                            <!-- <label class="control-label upload-media-type">Upload Video File<span class="required"> * </span></label> -->
                            <div class="card upload-media">
                                <div class="body ">
                                    <input type="file" id="name_audio" class="dropify upload-media-input form-control" name="audio"  data-allowed-file-extensions="mp3" accept="audio/mpeg">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 cover form-group">
                            <!-- <label class="control-label upload-img-type">Upload Video Cover Image</label> -->
                            <div class="card">
                                <div class="body">
                                    <input type="file" class="dropify-1" accept=".jpg,.jpeg,.png,.gif" name="cover_image">
                                    <?php $__errorArgs = ['audio_cover_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="mt-3">
                            <label class="control-label">
                                <!-- We take copyrights seriously. Are you entitled to 100 percent of the royalties and ownership of this song?<br/> -->
                                Do you own the song in its entirety and with all of its copyrights; and are you entitled to 100% of earnings?
                            </label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input onclick="checkCopyright(this.value)" class="form-check-input" type="radio" name="copyright" id="copyright1" value="Yes" checked>
                                    <label class="form-check-label" for="copyright1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input onclick="checkCopyright(this.value)" class="form-check-input" type="radio" name="copyright" id="copyright2" value="No">
                                    <label class="form-check-label" for="copyright2">No (Co-Owner)</label>
                                </div>
                            </div>

                            <label class="control-label mt-3 co-owner">
                                    <!-- Who else is entitled to royalties or earnings from the song ? e.g Songwriter, Producer, Band member <br> -->
                                    Who else worked on this song with you and is entitled to royalties or earnings?<br><br><br><br>
                                    <b>Please enter their info if they already have a Valyou X account?</b>
                            </label>
                            <div class="form-group co-owner">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-2 form-group mb-0">
                                        <input type="text" name="co_owner_name" class="form-control" placeholder="Please input co-owner's name in valyou x" />
                                    </div>
                                    <div class="col-md-6 col-sm-12 form-group mb-0">
                                        <input type="number" name="revenue_percent" class="form-control" placeholder="how many percent revenue are they entitled to(%)"/>
                                    </div>
                                </div>
                            </div>
                            <span class="co-owner another-co-owner"> Do you have another Co-Owner? <i class="fas fa-plus-circle" style="cursor: pointer;"></i></span>
                        </div>
                        <div class="form-group co-owner">
                            <label class="control-label mt-5 font-weight-bold">Please invite them to Valyou X to claim their earnings if they don't have a Valyou X account,</label>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-2">
                                    <input type="email" name="invite_email" class="form-control" placeholder="Please input their email address. Please invite them to Valyou X to claim their earnings" />
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                    <input type="number" name="another_revenue_percent" class="form-control" placeholder="how many percent revenue are they entitled to(%)"/>
                                </div>
                            </div>
                            <span class="co-owner another-co-owner-invite mt-2 d-block"> Do you have another Co-Owner to invite? <i class="fas fa-plus-circle" style="cursor: pointer;"></i></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-12">
                                <button style="background-color: #000000; color: #FF4680" type="submit" class="float-right btn btn-primary waves-effect waves-light submit-media">Submit</button>
                            </div>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar"></div>
                        </div>

                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- <script src="<?php echo e(URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script> -->
    <!-- Plugins js -->
    <!-- <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script> -->
    <script src="<?php echo e(URL::asset('assets/js/plugins/jquery-validation/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/plugins/jquery-validation/js/additional-methods.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>

    <script>
        let another_co_owner = 0;
        let another_co_owner_invite = 0;
        $(".another-co-owner").on('click', function(){
            $(this).before($(
                '<div class="row mt-3 mb-2"><div class="col-md-6 col-sm-12 mb-2">'
                +'<input type="text" name="co_owner_name_'+another_co_owner+'" class="form-control" placeholder="Please input co-owner name in valyou x" />'
                +'</div><div class="col-md-6 col-sm-12">'
                +'<input type="number" name="revenue_percent_'+another_co_owner+ '" class="form-control" placeholder="how many percent revenue are they entitled to(%)"/>'
                +'</div></div>'
                )
            );
            another_co_owner++;
        });

        $(".another-co-owner-invite").on('click', function(){
            $(this).before($(
                '<div class="row mt-2"><div class="col-md-6 col-sm-12 mb-2">'+
                    '<input type="email" name="invite_email_'+another_co_owner_invite+'" class="form-control" placeholder="Please input their email address. Please invite them to Valyou X to claim their earnings" />'+
                '</div><div class="col-md-6 col-sm-12 mb-2">'+
                    '<input type="number" name="another_revenue_percent_'+another_co_owner_invite+'" class="form-control" placeholder="how many percent revenue are they entitled to(%)"/>'+
                '</div></div>'
                )
            );
            another_co_owner_invite++;
        });

        let dropify_txt = "Upload Video File";

            $('.dropify').dropify(
                {
                    messages: {
                        'default': dropify_txt,
                        'replace': 'Drag and drop or click to replace',
                        'remove':  'Remove',
                        'error':   'Ooops, something wrong happended.'
                    }
                }
            );


        $(function() {
            $('.dropify-1').dropify(
                {
                    messages: {
                        'default': 'Upload cover image',
                        'replace': 'Drag and drop or click to replace',
                        'remove':  'Remove',
                        'error':   'Ooops, something wrong happended.'
                    }
                }
            );
        });



        function checkMediaType(value) {
            if (value == 1) {
                $('.cover-image').show();
                $('.audio-type').show();
                $('.video-type').hide();
                $('.dropify').parent().find('.file-icon > p').html('Upload Audio File');

                $('.form-group.has-error').removeClass("has-error");
                $('.help-block-error').remove();
                dropify_txt = "Upload Audio Cover Image"
            } else {
                // $('.cover-image').hide();
                $('.audio-type').hide();
                $('.video-type').show();
                $('.dropify-1').parent().find('.file-icon > p').html('Upload Audio File');

                $('.form-group.has-error').removeClass("has-error");
                $('.help-block-error').remove();
                dropify_txt = "Upload Video Cover Image"
            }
        }

        function checkCopyright(type) {
            if (type == 'Yes') {
                $('.co-owner').hide();
            }
            else {
                $('.co-owner').show();
                // $('input[name="co_owner_name"]').rules( "add", {
                //     required: true
                // });
                // $('input[name="revenue_percent"]').rules( "add", {
                //     required: true
                // });
            }
        }



        function uploadMedia(form){
            var url = $("meta[name=app-url]").attr("content");
            var name= $('#name').val();
            var type = $('#type').val();

            var form_data = new FormData(form);

            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            $(".progress").show();
                            $(".progress-bar").width(percentComplete.toFixed(2) + '%');
                            $(".progress-bar").html(percentComplete.toFixed(2)+'%');
                        }
                    }, false);
                    return xhr;
                },
                method: 'post',
                context: this,
                url: url+'/upload',
                data: form_data,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $(".progress-bar").width('0%');
                    $(":submit").attr("disabled", true);
                },
                success: function (response) {
                var data =  JSON.parse(response);
                if(data.status == 1){
                //$('#uploadStatus').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        // js_success("Video is uploaded successfully!");
                        window.location.href=data.href;
                    }
                },
                error: function (status, error) {
                console.log(error, status)
                console.log(JSON.parse(error));
                $.each(responseJSON.errors, function (key, item)
                {
                    $("#errors").append("<li class='alert alert-danger'>"+item+"</li>")
                });
                    $(this).prop("disabled", false);
                    alert('Something went wrong. Please try agian later');
                }
            })
        }

        $("#upload_media").validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                audio_title: {
                    minlength: 1,
                    required: true
                },
                singer: {
                    minlength: 1,
                    required: true
                },
                music_by: {
                    minlength: 1,
                    required: true
                },
                description: {
                    minlength: 1,
                    required: true
                },
                video: {
                    required: true,
                    extension: "mp4"
                },
                audio: {
                    required: true,
                    extension: "mp3"
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit
                console.log(1);
            },

            errorPlacement: function (error, element) { // render error placement for each input type
                $(element).after(error);
                if($(element).closest('.upload-media').length){
                    $(element).closest('.upload-media').after(error);
                }
            },


            highlight: function (element) { // hightlight error inputs
                // console.log(element);
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group

            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label
                    .closest('.form-group.has-error').removeClass('has-error'); // set success class to the control group
            },

            submitHandler: function (form) {
                uploadMedia(form);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/admin/media/upload-media.blade.php ENDPATH**/ ?>