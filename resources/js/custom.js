var updateid = '';
var selectedstatus = '';
var taskid = '';
$(document).ready(function(){
    $("select#StatusSelect").change(function(){
        selectedstatus = $(this).children("option:selected").val();

    });

    $("#addcard").click(function(){
        $('#updatecarddetail').css('display','none');
        $('#addcard').css('display','block');
        $('.update-card-title').css('display','none');
        $('.add-card-title').css('display','block');
        var newcardid= makeid(5);
        var cardname=$("#cd-cardname").val();
        var d = new Date();
        var strDate = d.getDate() + " " + (d.toLocaleString('default', { month: 'short' })) + ", " + d.getFullYear();
        var carddesc=$("#cd-carddesc").val();
        var newcarddesc='';
        if(carddesc.length > 0) {
            newcarddesc=  "<ul class='pl-3 mb-4 text-muted' id='cd-desc'>"+
                "<li class='py-1'>"+carddesc+"</li>"+
                "</ul>"
        }
        var cardbudget=$("#cd-cardbudget").val();
        var cardassignee = new Array();
        var cardassigneevalue = new Array();
        var src = "";
        $('#cd-cardassignee input[type=checkbox]:checked').each(function() {
            cardassigneevalue.push($(this).attr("id"));
            cardassignee.push($(this).nextAll("img").attr("src"));
        });
        for (i = 0; i < cardassignee.length; i++) {
            src=src+'<a href="#" class="team-member d-inline-block" value="'+cardassigneevalue[i]+'"><img src="'+cardassignee[i]+'" class="rounded-circle avatar-xs m-1" alt=""></a>';
        }
        var statuscolor;
        if(selectedstatus == "Waiting"){
            statuscolor="badge-soft-secondary";
        }
        else if(selectedstatus == "Approved"){
            statuscolor="badge-soft-primary";
        }
        else if(selectedstatus == "Complete"){
            statuscolor="badge-soft-success";
        }
        else if(selectedstatus == "Pending"){
            statuscolor="badge-soft-warning";
        }

        if(cardname.length == 0 || cardbudget.length == 0 || selectedstatus.length == 0 || cardassignee.length == 0) {
            $("#NewcardForm").validate().element("#cd-cardname");
            $("#NewcardForm").validate().element("#StatusSelect");
            $("#NewcardForm").validate().element("#cd-cardbudget");
        } else {
            $(taskid).append("<div class='card task-box' id='"+newcardid+"'>"+
                "<div class='card-body'>"+
                "<div class='dropdown float-right'>"+
                "<a href='#' class='dropdown-toggle arrow-none' data-toggle='dropdown' aria-expanded='false'>"+
                "<i class='mdi mdi-dots-vertical m-0 text-muted h5'></i>"+
                "</a>"+
                "<div class='dropdown-menu dropdown-menu-right'>"+
                "<a class='dropdown-item' href='#' data-toggle='modal' data-target='.bs-example-modal-center' onclick=editcarddeatil('#"+newcardid+"')>Edit</a>"+
                "<a class='dropdown-item' href='#' onclick=detelecard('#"+newcardid+"')>Delete</a>"+
                "</div>"+
                "</div>"+
                "<div class='float-right ml-2'>"+
                "<span class='badge badge-pill font-size-12 "+statuscolor+"' id='cd-status'>"+selectedstatus+"</span>"+
                "</div>"+
                "<div>"+
                "<h5 class='font-size-15'><a href='javascript: void(0);' class='text-dark' id='cd-name'>"+cardname+"</a></h5>"+
                "<p class='text-muted' id='cd-date'>"+strDate+"</p>"+
                "</div>"+
                newcarddesc+
                "<div class='team float-left cd-assigne'>"+src+
                "</div>"+
                "<div class='text-right'>"+
                "<h5 class='font-size-15 mb-1' id='cd-budget'>$ "+cardbudget+"</h5>"+
                "<p class='mb-0 text-muted'>Budget</p>"+
                "</div>"+
                "</div>"+
                "</div>");
            $('#modalForm').modal('toggle');

        }
    });

    $("#updatecarddetail").click(function(){
        var statuscolor ;
        if(selectedstatus == "Waiting"){
            statuscolor="badge-soft-secondary";
        }
        else if(selectedstatus == "Approved"){
            statuscolor="badge-soft-primary";
        }
        else if(selectedstatus == "Complete"){
            statuscolor="badge-soft-success";
        }
        else if(selectedstatus == "Pending"){
            statuscolor="badge-soft-warning";
        }
        var cardname = $('#cd-cardname').val();
        var d = new Date();
        var strDate = d.getDate() + " " + (d.toLocaleString('default', { month: 'short' })) + ", " + d.getFullYear();
        var carddesc=$("#cd-carddesc").val();
        var cardbudget=$("#cd-cardbudget").val();
        var cardassignee = new Array();
        var cardassigneevalue = new Array();

        var src = "";
        $('#cd-cardassignee input[type=checkbox]:checked').each(function() {
            cardassigneevalue.push($(this).attr("id"));
            cardassignee.push($(this).nextAll("img").attr("src"));
        });

        for (i = 0; i < cardassignee.length; i++) {
            src=src+'<a href="#" class="team-member d-inline-block" value="'+cardassigneevalue[i]+'"><img src="'+cardassignee[i]+'" class="rounded-circle avatar-xs m-1" alt=""></a>';
        }
        var newcarddesc='';
        if(carddesc.length > 0) {
            newcarddesc=  "<ul class='pl-3 mb-4 text-muted' id='cd-desc'>"+
                "<li class='py-1'>"+carddesc+"</li>"+
                "</ul>"
        }
        if(cardname.length == 0 || cardbudget.length == 0 || selectedstatus.length == 0 || cardassignee.length == 0) {
            $("#NewcardForm").validate().element("#cd-cardname");
            $("#NewcardForm").validate().element("#StatusSelect");
            $("#NewcardForm").validate().element("#cd-cardbudget");
        } else {
            $(updateid).html("<div class='card-body'>"+
                "<div class='dropdown float-right'>"+
                "<a href='#' class='dropdown-toggle arrow-none' data-toggle='dropdown' aria-expanded='false'>"+
                "<i class='mdi mdi-dots-vertical m-0 text-muted h5'></i>"+
                "</a>"+
                "<div class='dropdown-menu dropdown-menu-right'>"+
                "<a class='dropdown-item' href='#' data-toggle='modal' data-target='.bs-example-modal-center' onclick=editcarddeatil('"+updateid+"')>Edit</a>"+
                "<a class='dropdown-item' href='#' onclick=detelecard('"+updateid+"')>Delete</a>"+
                "</div>"+
                "</div> "+
                "<div class='float-right ml-2'>"+
                "<span class='badge badge-pill font-size-12 "+statuscolor+"' id='cd-status'>"+selectedstatus+"</span>"+
                "</div>"+
                "<div>"+
                "<h5 class='font-size-15'><a href='javascript: void(0);' class='text-dark' id='cd-name'>"+cardname+"</a></h5>"+
                "<p class='text-muted'>"+strDate+"</p>"+
                "</div>"+
                newcarddesc+
                "<div class='team float-left cd-assigne'>"+src+
                "</div>"+
                "<div class='text-right'>"+
                "<h5 class='font-size-15 mb-1' id='cd-budget'>$ "+cardbudget+"</h5>"+
                "<p class='mb-0 text-muted'>Budget</p>"+
                "</div>"+
                "</div>");
        }
    });
});

function editcarddeatil(id) {
    updateid = id;
    $('#updatecarddetail').css('display','block');
    $('#addcard').css('display','none');
    $('.update-card-title').css('display','block');
    $('.add-card-title').css('display','none');
    var name = $(id).find('#cd-name').text();
    var desc = $(id).find('#cd-desc').text();
    var budget = parseInt($(id).find('#cd-budget').text().replace(/[^0-9.]/g, ""));
    var status = $(id).find('#cd-status').text();
    $('#cd-cardassignee input').prop("checked", false);
    $(id).find('.cd-assigne a').each(function () {
        var assigneusers = $(this).attr('value');
        $("#"+assigneusers).prop("checked", true);
    });
    $('#cd-cardname').val(name);
    $('#cd-carddesc').val(desc);
    $('#cd-cardbudget').val(budget);
    $('#StatusSelect').val(status);
    selectedstatus=status;
}

//Delete Card
function detelecard(id){
    console.log('Successfully Card Delete');
    $(id).remove();
}

//Generate ID
function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function Addnewcard(id){
    $('#updatecarddetail').css('display','none');
    $('#addcard').css('display','block');
    $('.update-card-title').css('display','none');
    $('.add-card-title').css('display','block');
    $('#cd-cardname').val('');
    $('#cd-carddesc').val('');
    $('#StatusSelect').val('Pending');
    $('#cd-cardbudget').val('');
    $('#cd-cardassignee input').prop("checked", false);
    taskid = id;
}
