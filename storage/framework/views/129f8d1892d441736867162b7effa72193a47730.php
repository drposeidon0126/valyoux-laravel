<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mailer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
      .smtp-validation-error {
          border: 3px red solid;
      }

      .smtp-check-error {
          border: 3px yellow solid;
      }

      .msg-success {
          color: blue;
      }

      .msg-error {
          color: red;
      }
  </style>
</head>
<body>

<div class="jumbotron text-center pb-3 pt-3" style="">
  <h1>HitMailer</h1>
  <p>Best useful Real-Time Multi Mailer!</p> 
</div>
  
<form id="send_email_form" method="POST" action="<?php echo e(route('send_email')); ?>" class="custom-validation" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="row m-2">
    <div class="col-5">
        <h3>SMTPS</h3>
        <div class="form-inline smtp-list justify-content-center">
            <div id="smtp-info" class="row m-2 smtp-info">
                <input type="text" class="form-control" style="width: 30%" placeholder="Smtp" id="smtp" name="smtp">
                <input type="text" class="form-control" style="width: 10%" placeholder="Port" id="port" name="port">
                <input type="text" class="form-control" style="width: 25%" placeholder="Email" id="email" name="email">
                <input type="text" class="form-control" style="width: 20%" placeholder="Password" id="password" name="password">
                <select class="form-control" id="ssl_tls" style="width: 15%" name="ssl_tls">
                    <option>tls</option>
                    <option>ssl</option>
                </select>
            </div>
            <button type="button" class="btn btn-info add-smtp mb-4">+ Add more smtps</button>
        </div>
        <table class="table table-striped smtp-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Host</th>
                <th scope="col">Port</th>
                <th scope="col">Name</th>
                <th scope="col">Password</th>
                <th scope="col">tls/ssl</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        
        <div class="row">
            <div class="form-group col-12">
                <h3>Sent Logs & Report</h3>
                <div id="sent_log_smtp" style="max-height: 450px; overflow-y: auto; width: 100%;">

                </div>
                <div id="sent_log_result" style="max-height: 300px; overflow-y: auto; width: 100%;">

                </div>
            </div>
        </div>
    </div>
    <div class="col-7">
        <h3>Mail Details</h3>
        <div class="row">
            <div class="form-group col-4">
                <label for="usr">Sender Name:</label>
                <input type="email" class="form-control" id="sender_name" name="sender_name">
            </div>
            <div class="form-group col-4">
                <label for="pwd">Sender Email(use smtp email as default):</label>
                <input type="email" class="form-control" id="sender_email" name="sender_email">
            </div>
            <div class="form-group col-4">
                <label for="pwd">Reply / bounceback email :</label>
                <input type="email" class="form-control" id="reply_email" name="reply_email">
            </div>
        </div>
        <div class="row" style="min-height: 450px;">
            <div class="form-group col-9 d-flex flex-column ">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control mb-3" id="subject" name="subject">
                <div class="btn-group btn-group-sm mb-3">
                    <button type="button" class="btn btn-secondary btn-template" data-template="[-email-]" disabled>[-email-]</button>
                    <button type="button" class="btn btn-secondary btn-template" data-template="[-emailuser-]" disabled>[-emailuser-]</button>
                    <button type="button" class="btn btn-secondary btn-template" data-template="[-emaildomain-]" disabled>[-emaildomain-]</button>
                    <button type="button" class="btn btn-secondary btn-template" data-template="[-time-]" disabled>[-time-]</button>
                    <button type="button" class="btn btn-secondary btn-template" data-template="[-randomstring-]" disabled>[-randomstring-]</button>
                  </div>
                <label for="usr">Message(Text/HTML):</label>
                <textarea class="form-control mb-3" id="message_body" name="message_body" rows="20" style="flex:1"></textarea>
                <label for="usr"> Attachments</label>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="attachments" name="attachments[]" type="file" class="file"  data-show-upload="true" data-show-caption="true" multiple>    
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-danger pull-right cancel-attachments">Cancel Attachments</button>
                    </div>
                </div>
                
                
            </div>
            <div class="form-group col-3 d-flex flex-column">
                <label for="usr">Emails to Send(Line):</label>
                <textarea class="form-control" id="receiver_email_list" name="receiver_email_list" rows="20" style="flex:1"></textarea>
            </div>
        </div>
        <div class="row justify-content-center">
            <button type="button" onclick="send_email()" class="btn btn-primary pull-right w-100 send-email-btn">Send Email</button>
        </div>
        <div class="row justify-content-center">
            <button type="button" onclick="stop_email()" class="btn btn-danger pull-right w-100 stop-email-btn" disabled>Stop Sending Email</button>
        </div>
    </div>
  </div>
</form>
<script>
    let smtpNumber = 0;
    let smtps = [];
    //to add template string to subject or mail body
    let prevSelect = '';

    let is_sending = 0;

    function ajax_call(receiver_email_list, mail_detail, receiverEmailIndex, attachments){
        
        if (receiver_email_list.length == receiverEmailIndex) {
            console.log("All request finished");
            $('#sent_log_result').append('<h3 style="color: green;">All request finished!!!</h3>');
            $(".send-email-btn").attr("disabled", false);
            return;
        }

        let current_smtp_number=Math.floor(receiverEmailIndex/20);
        if(current_smtp_number >= smtps.length){
            current_smtp_number = current_smtp_number % smtps.length;
        }
        let smtp=smtps[current_smtp_number]; // current smtp to send emails

        let reply_to = receiver_email_list[receiverEmailIndex]; //current receiver's email address

        // 365 smtp
        if(smtps[current_smtp_number].smtp_host == "smtp.office365.com"){
            mail_detail.sender_email = smtps[current_smtp_number].user_name;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: $('#send_email_form').attr('action'),
            type: "POST",
            cache: false,
            data: {mail_detail:mail_detail, smtp:smtp, reply_to:reply_to, attachments: attachments},
            // async:false,
            beforeSend: function() {
                
            },
            success: function(result) {
                if (result) {
                    if (result.success == false) {
                        $('#sent_log_result').append('<p class="msg-error">- '+result.msg+'</p>');
                    } else {
                        $('#sent_log_result').append(
                            '<p class="msg-success">- '+'- Mail was sent successfully'+' (Order: '+(receiverEmailIndex+1)+')</p>'+
                            '<div style="font-size: 80%;">'+
                                '<p>SMTP info</p>'+
                                '<ul>'+
                                    '<li> Host: '+smtp.smtp_host+'</li>'+
                                    '<li> Port: '+smtp.port+'</li>'+
                                    '<li> SSL/TLS: '+smtp.ssl_tls+'</li>'+
                                    '<li> User Name: '+smtp.user_name+'</li>'+
                                    '<li> Password: '+smtp.user_password+'</li>'+
                                '</ul>'+
                                '<p>Receipient\'s Info: '+ reply_to +
                            '</div>'
                        );
                        // $('#sent_log_result').scrollIntoView({behavior: "smooth"});
                        $('#sent_log_result').animate({
                            scrollTop: $('#sent_log_result').get(0).scrollHeight
                        }, 500);
                    }
                }
            },
            complete: function(result){
                if(is_sending == 1){
                    ajax_call(receiver_email_list, mail_detail, ++receiverEmailIndex, attachments);
                }else {
                    $('#sent_log_result').append('<p class="msg-error">- Email Sending Stopped!!!</p>');
                    $(".send-email-btn").attr("disabled", false);
                    $(".stop-email-btn").attr("disabled", true);
                    return 0;
                }
            }
        });

        // is_sending = 0;
    }
    
    function send_email() {
        is_sending = 1;
        let attachments = [];
        $('#sent_log_result').html('');
        if(smtps.length == 0){
            alert("Please add smtps to send emails");
        }else {
            if($('#message_body').val() == ''){
                alert("Please input Messsage Content");
            }else {
                //prepared smtps
                // console.log(smtps);

                // receipients emails
                let receiver_email_list = $('textarea#receiver_email_list').val().split('\n');
                if(receiver_email_list.length == 0) {
                    alert("Please input receipient's emails");
                } else {
                    $(".send-email-btn").attr("disabled", true);
                    $(".stop-email-btn").attr("disabled", false);

                    // if there are attachments, upload to the server, get public path
                    let formData = new FormData();
                    let TotalFiles = $('#attachments')[0].files.length; //Total files
                    // Check file selected or not
                    if(TotalFiles > 0 ){
                        let files = $('#attachments')[0];
                        for (let i = 0; i < TotalFiles; i++) {
                            formData.append('files' + i, files.files[i]);
                        }
                        formData.append('TotalFiles', TotalFiles);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "<?php echo e(url('/attachments-upload')); ?>",
                            type: 'post',
                            data: formData,
                            async: false,
                            contentType: false,
                            processData: false,
                            success: function(result){
                                $('#sent_log_result').append('<p class="msg-success">- '+result.msg+'</p>');
                                attachments = result.attachments;
                            },
                        });
                    }
                    // end ajax upload files

                    let receiver_email_list = $('textarea#receiver_email_list').val().split('\n');
                    let mail_detail = {
                        subject: $('#subject').val(),
                        sender_email: $('#sender_email').val(),
                        sender_name: $('#sender_name').val(),
                        reply_email: $('#reply_email').val(),
                        reply_name: 'Reply Name',
                        msg_body: $('#message_body').val(),
                    };
                    ajax_call(receiver_email_list, mail_detail, 0, attachments);
                }
            }
        }
    }

    function stop_email(){
        is_sending = 0;
    }

    (function ($, undefined) {
            $.fn.getCursorPosition = function () {
                var el = $(this).get(0);
                var pos = 0;
                if ('selectionStart' in el) {
                    pos = el.selectionStart;
                } else if ('selection' in document) {
                    el.focus();
                    var Sel = document.selection.createRange();
                    var SelLength = document.selection.createRange().text.length;
                    Sel.moveStart('character', -el.value.length);
                    pos = Sel.text.length - SelLength;
                }
                return pos;
            }
        })(jQuery);

    $(document).ready(function(){
        $('.cancel-attachments').on('click', function(){
            //clear a file input with jQuery 
            $("#attachments").val(null);
        });
        $('.btn-template').on('click', function(){
            if(prevSelect != ''){
                let position = prevSelect.getCursorPosition();
                let content = prevSelect.val();
                let newContent = content.substr(0, position) + $(this).data('template') + content.substr(position);
                prevSelect.val(newContent);
                prevSelect.focus();

                // prevSelect.val(prevSelect.val() + $(this).data('template'));
                // prevSelect.focus();
            }
        });

        $("#message_body").on("focus", function(e){
            prevSelect = $(this);
            $('.btn-template').prop('disabled', false);
        });

        $("#message_body").on("focusout", function(e){
            // $('.btn-template').prop('disabled', true);
        });

        $("#subject").on("focus", function(e){
            prevSelect = $(this);
            $('.btn-template').prop('disabled', false);
        });

        $("#subject").on("blur", function(e){
            // $('.btn-template').prop('disabled', true);
        });

        $('.add-smtp').on('click', function(){
            // initialize emtp inputs field
            $('.smtp-info').removeClass('smtp-validation-error');
            $('.smtp-info').removeClass('smtp-check-error');
            
            // input validation
            if($('#smtp').val() == '' || $('#port').val() == '' || $('#email').val() == '' || $('#password').val() == ''){
                $('#smtp-info').addClass('smtp-validation-error');    
                alert('validation error: input smtp info correctly');
            }else {
                // check smtp is normal
                let smtp_info = {
                    smtp_host : $('#smtp').val(),
                    port : $('#port').val(),
                    ssl_tls : $('#ssl_tls').val(),
                    user_name : $('#email').val(),
                    user_password : $('#password').val(),
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $.ajax({
                    url: "<?php echo e(url('/check-smtp')); ?>",
                    type: "POST", //method: 'post',
                    cache: false,
                    // async:false,
                    data: smtp_info,
                    beforeSend: function() {
                        $(".add-smtp").attr("disabled", true);
                    },
                    success: function(result) {
                        if (result) {
                            if (result.success == true) {
                                if(smtpNumber < 20){
                                    smtps.push(smtp_info);
                                    $('#sent_log_smtp').append('<p style="color:#a52a2a;">- new smtp add to send emails. ( current count of smtps: '+(smtpNumber+1)+' )</p>');
                                    $("table tbody").append(
                                        '<tr data-smtpIndex="'+smtpNumber+'">'+
                                            '<th scope="row">'+(smtpNumber+1)+'</th>'+
                                            '<td>'+$('#smtp').val()+'</td>'+
                                            '<td>'+$('#port').val()+'</td>'+
                                            '<td>'+$('#email').val()+'</td>'+
                                            '<td>'+$('#password').val()+'</td>'+
                                            '<td>'+$('#ssl_tls').val()+'</td>'+
                                            '<td><button type="button" class="btn btn-danger del-btn-'+smtpNumber+'">Del</button></td>'+
                                        '</tr>'
                                    );
                                    $('.del-btn-'+smtpNumber).on('click', function(){
                                        let smtpIndex=$(this).closest('tr').data('smtpIndex');
                                        //delete tr
                                        $(this).closest('tr').remove();
                                        //delete from smtps
                                        smtps.splice(smtpIndex, 1);
                                        //
                                        smtpNumber--;
                                        //message box
                                        $('#sent_log_smtp').append('<p style="color: red;">- One smtp deleted from smtp list. ( current count of smtps: '+(smtpNumber)+' )</p>');
                                        //refresh table's number
                                        $('.smtp-table tbody tr').each(function(i) {
                                            // $(this).find("td:first").html(i + 1);
                                            $(this).find("th").html(i + 1);
                                        });
                                    });


                                    smtpNumber++;
                                }else if(smtpNumber >= 20){
                                    alert("The maximum smtps you can add is 20!");
                                }
                            } else {
                                $('#smtp-info').addClass('smtp-check-error');    
                                alert('Error:' + result.msg);
                            }
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert(textStatus);
                    },
                    complete: function(result) {
                        $(".add-smtp").attr("disabled", false);
                    }
                });
            }
        });

    });    
</script>
</body>
</html>
<?php /**PATH /var/www/testvps-main/resources/views/mailer/index.blade.php ENDPATH**/ ?>