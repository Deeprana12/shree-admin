$(document).ready(function(){
            
    // fetchData();

    $("#contactq").click(function(){
        $("#li1").removeClass("active");
        $("#li2").removeClass("active");    
        $("#li3").removeClass("active");
        $("#li4").addClass("active");
        $("#li5").removeClass("active");
        $("#li6").removeClass("active");                    
    });
    $("#imageq").click(function(){
        $("#li1").removeClass("active");
        $("#li2").removeClass("active");    
        $("#li3").removeClass("active");
        $("#li4").removeClass("active");
        $("#li5").addClass("active");
        $("#li6").removeClass("active");                    
    });
    $("#videoq").click(function(){
        $("#li1").removeClass("active");
        $("#li2").removeClass("active");    
        $("#li3").removeClass("active");
        $("#li4").removeClass("active");
        $("#li5").removeClass("active");
        $("#li6").addClass("active");                    
    });
    $("#li2a").click(function(){        
        $("#li1").removeClass("active");
        $("#li2").addClass("active");
        $("#li3").removeClass("active");
        $("#li5").removeClass("active");
        $("#li4").removeClass("active"); 
        $("#li6").removeClass("active");            
    });
    $("#li3a").click(function(){
        $("#li1").removeClass("active");
        $("#li2").removeClass("active");
        $("#li3").addClass("active");
        $("#li4").removeClass("active");
        $("#li5").removeClass("active");
        $("#li6").removeClass("active");            
    });
    $("#li1a").click(function(){
        $("#li2").removeClass("active");
        $("#li3").removeClass("active");
        $("#li1").addClass("active");
        $("#li5").removeClass("active");
        $("#li4").removeClass("active");
        $("#li6").removeClass("active");            
    });
    $("#li5a").click(function(){
        $("#li2").removeClass("active");
        $("#li3").removeClass("active");
        $("#li5").addClass("active");
        $("#li1").removeClass("active");
        $("#li4").removeClass("active");
        $("#li6").removeClass("active");            
    });
    $("#li4a").click(function(){
        $("#li2").removeClass("active");
        $("#li3").removeClass("active");
        $("#li4").addClass("active");
        $("#li1").removeClass("active");
        $("#li5").removeClass("active");
        $("#li6").removeClass("active");            
    });   
    $("#li6a").click(function(){
        $("#li2").removeClass("active");
        $("#li3").removeClass("active");
        $("#li6").addClass("active");
        $("#li1").removeClass("active");
        $("#li5").removeClass("active");    
        $("#li4").removeClass("active");    
    });    

    // For contactus queries
    function loadcontactusquerypage(page){
        $.ajax({
            url : "../Database/contactusquery.php",
            type : "POST",
            data : {page_no : page},
            success:function(data){
                $("#contctusqueries").html(data);
            }
        })
    }
    loadcontactusquerypage();
    $(document).on("click","#contact_pagination a",function(e){
        e.preventDefault();
        var page_id = $(this).attr("id");
        loadcontactusquerypage(page_id);
    })

    // Live search
    $("#search_contact_query").on("keyup",function(){
        var search_item = $(this).val();        
        $.ajax({
            url : "../Database/contactusquery.php",
            type : "POST",
            data : {search : search_item},
            success:function(data){
                $("#contctusqueries").html(data);
            }
        })
    })
    // ---------------------

    // For Image
    function loadimagepage(page){
        $.ajax({
            url : "../Database/imagequery.php",
            type : "POST",
            data : {page_no : page},
            success:function(data){
                $("#imageuploads").html(data);
            }
        })
    }
    loadimagepage();
    $(document).on("click","#image_pagination a",function(e){
        e.preventDefault();
        var page_id = $(this).attr("id");
        loadimagepage(page_id);
    })

    // Live search
    $("#search_image_query").on("keyup",function(){
        var search_item = $(this).val();        
        $.ajax({
            url : "../Database/imagequery.php",
            type : "POST",
            data : {search : search_item},
            success:function(data){
                $("#imageuploads").html(data);
            }
        })
    })
    // ---------

    // For Image
    function loadvideopage(page){
        $.ajax({
            url : "../Database/videoquery.php",
            type : "POST",
            data : {page_no : page},
            success:function(data){
                $("#videouploads").html(data);
            }
        })
    }
    loadvideopage();
    $(document).on("click","#video_pagination a",function(e){
        e.preventDefault();
        var page_id = $(this).attr("id");
        loadvideopage(page_id);
    })

    // Live search
    $("#search_video_query").on("keyup",function(){
        var search_item = $(this).val();        
        $.ajax({
            url : "../Database/videoquery.php",
            type : "POST",
            data : {search : search_item},
            success:function(data){
                $("#videouploads").html(data);
            }
        })
    })
    // ---------

})

$(".update1").click(function (){
    var userid = $(this).attr("data-id");
    // alert('h');
    $.ajax({
        url: "../Database/updateuser.php",
        type: "POST",
        data: { userid: userid },
        async: true,
        dataType: "JSON",
        success: function (data) {
            $("#u-fname").val(data.firstname);
            $("#u-lname").val(data.lastname);
            $("#u-user").val(data.username);
            let role = data.rid;
            role++;
            // alert(role);
            $("#u-role").prop('selectedIndex', role);
            $("#updatetable").modal('show');
        }
    });
});

$("#done1").click(function(){
var ufname = $('#u-fname').val();
var ulname = $('#u-lname').val();
var username = $('#u-user').val();
var urole = $('#u-role').val();
if(ufname==""){
    return false;
}
if(ulname==""){
    return false;
}
if(username==""){
    return false;
}
if(urole==""){
    return false;
}
$.ajax({
    url: "../Database/updateuser.php",
    type: "post",
    data: { ufname: ufname, ulname: ulname, username: username, urole: urole },
    success: function (data) {
        // alert("done");
        $("#updatetable").modal('hide');
        // $('#users').tabs('select', 1);
    }, error: function () {
        alert('error');
    }
});
});

$(".del").click(function(){
    var del = $(this);
    var id = $(this).attr("data-id");
    // alert(id);
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { id: id },
        success: function (d) {
            del.closest("tr").hide();
        }
    });
});

function update(rid){

    let s="";
    $('.get_roles'+rid).each(function(){
        if($(this).is(":checked")){
            s+= $(this).val();
            s+=",";
        }
    });
    s = s.slice(0, -1);
    $.ajax({
        url : "../Database/update.php",
        method:"GET",
        data:{
            roles:s,id:rid
        },
        success:function(data){
            alert('Successfully Updated!!');
        }
    });

}

function newr(i){

    let s="";
    let id=i;
    let r1=$('#rolename').val();
    let r2=$('#roled').val();
    // alert(r1);
    $('.get_roles1'+id).each(function(){
        if($(this).is(":checked")){
            s+="m1-";
            s+= $(this).val();
            s+=",";
        }
    });
    id++;
    $('.get_roles2'+id).each(function(){
        if($(this).is(":checked")){
            s+="m2-";
            s+= $(this).val();
            s+=",";
        }
    });
    id++;
    $('.get_roles3'+id).each(function(){
        if($(this).is(":checked")){
            s+="m3-";
            s+= $(this).val();
            s+=",";
        }
    });
    s = s.slice(0, -1);
    // alert(s);

    if(r1==""){
        return false;
    }
    if(r2==""){
        return false;
    }

    $.ajax({
        url : "../Database/insertNewRecord.php",
        method:"GET",
        data:{
            r1:r1,r2:r2,s:s
        },
        success:function(data){
            alert('Successfully Updated!!');
            $("#newrole").trigger("reset");
            $('#modala').modal('hide');

        }
    });

}

$(".updaterole1").click(function (){
    var roleid = $(this).attr("data-id");
    $.ajax({

        url: "../Database/update.php",
        type: "POST",
        data: { roleid: roleid },
        async: true,
        success: function (data) {
            data = JSON.parse(data);
            $("#pform").trigger("reset");
            // alert(data.role);
            $("#rolename1").val(data.role);
            $("#roleinfo").val(data.roleinfo);
            var permission = data.permisions.split(",");
            $.each(permission, function (index,value) {
                if (value == "m1-0") {
                    $("#m1-u").prop('checked', true);
                }
                if (value == 'm1-1') {
                    $("#m1-v").prop('checked', true);
                }
                if (value == 'm1-2') {
                    $("#m1-d").prop('checked', true);
                }
                if (value == 'm2-0') {
                    $("#m2-u").prop('checked', true);
                }
                if (value == 'm2-1') {
                    $("#m2-v").prop('checked', true);
                }
                if (value == 'm2-2') {
                    $("#m2-d").prop('checked', true);
                }
                if (value == 'm3-0') {
                    $("#m3-u").prop('checked', true);
                }
                if (value == 'm3-1') {
                    $("#m3-v").prop('checked', true);
                }
                if (value == 'm3-2') {
                    $("#m3-d").prop('checked', true);
                }
            });
            $('#updaterole').modal('show');
        }
    });
    $('#datatable').DataTable();

});

$("#savepermission").click(function(){

    var rname = $('#rolename1').val();
    var rinfo = $('#roleinfo').val();
    if(rname==""){
        return false;
    }
    if(rinfo==""){
        return false;
    }
    var permission = [];
    $('.get_permission').each(function () {
        if ($(this).is(":checked")) {
            permission.push($(this).val());
        }
    });
    permission = permission.toString();
    $.ajax({
        url: "../Database/update.php",
        type: "post",
        data: { rname: rname, rinfo: rinfo, permission: permission},
        success: function (data) {
            // alert("done");
            $(".updaterole").modal('hide');
            $("#pform").trigger("reset");
        }, error: function () {
            alert('error');
        }
    });
});

$(".del1").click(function(){
    var del = $(this);
    var id = $(this).attr("data-id");
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { delid: id,},
        success: function (d) {
            // alert(d);
            if(d=="done") {
                del.closest("tr").hide();
            }
        }
    });
});

$(".view1").click(function(){
    var view = $(this).attr("data-id");
    $.ajax({
        url: "../Database/view.php",
        type: "post",
        data: { view: view,},
        success: function (d) {
            data = JSON.parse(d);
            $("#v-username").text(data.username);
            $("#v-firstname").text(data.firstname);
            $("#v-lastname").text(data.lastname);
            $("#v-role").text(data.rid);
            $("#viewmodal").modal('show');
        }
    });
})


$(".view").click(function(){
    var viewid = $(this).attr("data-id");
    $.ajax({
        url: "../Database/view.php",
        type: "post",
        data: { viewid: viewid,},
        success: function (d) {
            data = JSON.parse(d);
            $("#v-role1").text(data.role);
            $("#v-roleinfo").text(data.roleinfo);
            $("#v-permission").text(data.permisions);
            $("#view-admin").modal('show');
        }
    });
})

$(".viewuserinfo").click(function(){    
    var viewid = $(this).attr("id");
    $.ajax({
        url: "../Database/view.php",
        type: "post",
        data: { viewiduser: viewid},
        success: function (d) {                               
            data = JSON.parse(d);
            $("#spid").text(data.id);
            $("#username").text(data.name);
            $("#useremail").text(data.userEmail);
            $("#userphno").text(data.phone);
            $("#userevent").text(data.event);
            $("#usertime").text(data.time);            
            $("#userbooking").text(data.booking);
            $("#userfromdate").text(data.FromDate);
            $("#usertodate").text(data.ToDate);
            $("#userstatus").text(data.Status);            
            $("#userpostingdate").text(data.PostingDate);            
            $("#fetchDataforUpdate").attr("data-id",data.id);            
            $("#view-userbook").modal('show');
        }
    });
});

$("#fetchDataforUpdate").click(function(){    
    var viewid = $(this).attr("data-id");
    $.ajax({
        url: "../Database/update.php",
        type: "post",
        data: { updatefetch: viewid},
        success: function (d) {      
            data = JSON.parse(d);
            $("#nowchange").attr("data-id",data.id);
            $("#uname").val(data.name);
            $("#uemail").val(data.userEmail);
            $("#uph").val(data.phone);
            $("#uevent").val(data.event);
            $("#utime").val(data.time);            
            $("#ubook").val(data.booking);
            $("#ufdt").val(data.FromDate);
            $("#utdt").val(data.ToDate);
            $("#view-perticuler").modal('show');
        }
    });
});

$("#nowchange").click(function(){    
    var viewid = $(this).attr("data-id");        
    let uname =$("#uname").val();    
    let uemail =$("#uemail").val();
    let uphone =$("#uph").val();
    let uevent =$("#uevent").val();
    let utime =$("#utime").val();
    let ubooking =$("#ubook").val();    
    let ufdt =$("#ufdt").val();
    let utdt =$("#utdt").val();
    $.ajax({
        url: "../Database/updateuser.php",
        type: "post",
        data: { changeupdate: viewid,uname:uname,uemail:uemail,uphone:uphone,
            uevent:uevent,utime:utime,ubooking:ubooking,ufdt:ufdt,utdt:utdt
        },
        success: function (d) {      
            // location.reload();
            header("Location:http://localhost/DC/Views/admin.php");
        }
    });
});

$("#delbo").click(function(){
    // var del = $(this);
    var id = $(this).attr("data-id");
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { delbo: id,},
        success: function (d) {
            // alert(d);
            if(d=="done") {
                // delbo.closest("tr").hide();
            }
        }
    });
});

// $(".chdecision").click(function(){    
//     var id = $(this).attr("data-id");    
//     $.ajax({
//             url: "../Database/update.php",
//             type: "post",
//             data: {changedesid:id},
//             success: function (d) {
//             $("#change_des").modal('show');    
//         }
//     });
// });

$(".viewbo").click(function(){    
    var id = $(this).attr("data-id");
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { delbo: id,},
        success: function (d) {
            // alert(d);
            if(d=="done") {
                del.closest("tr").hide();
            }
        }
    });
});

// $(".updateuserinfo").click(function(){    
//     var id = $(this).attr("id");
//     $.ajax({
//         url: "../Database/updateuser.php",
//         type: "post",
//         data: { updateuserinfo: id,},
//         success: function (d) {
            
//         }
//     });
// });

$("#fdes").click(function(){    
    var des = $('#finaldes :selected').text();
    if(des=="Accept"){
        des=0;
    }else if(des=="Reject"){
        des=1;
    }else{
        des=-1;
    }
    var id=$(this).attr("data-id");
    $.ajax({
        url: "../Database/update.php",
        type: "post",
        data: { changedesid: id,des:des},
        success: function (d) {            
            alert('fine');
        }
    });
});

$(".changethisIddes").click(function(){        
    var id = $(this).attr("id");
    $("#fdes").attr('data-id',id);
    // alert(id);
    $.ajax({
        url: "../Database/view.php",
        type: "post",
        data: { fetchdesofId: id,},
        success: function (d) {
            data = JSON.parse(d);
            $("#change_des").modal('show');
            if(data.Status==0){
                $("#finaldes").val("0");
            }else if(data.Status==1){
                $("#finaldes").val("1");
            }else{
                $("#finaldes").val("-1");
            }
        }
    });
});

$(document).on("click",".viewMessage",function() {
    var msg_id = $(this).attr("data-id");
    $.ajax({
        url: "../Database/view.php",
        type: "post",
        data: { sendmsg : msg_id},
        success: function (d) {       
            var datas = JSON.parse(d)
            $("#msgHeader").html(datas.email);
            $("#msghere").html(datas.msg);
            $("#msgModal").modal('show');
        }
    });
    e.prevenetDefault();
});

$(".deleteMsg").click(function(){    
    var id = $(this).attr("data-id");    
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { msg_id: id },
        success: function (d) {            
            alert('Deleted!!');
        }
    });
});

function accept(id){ 
    var f=0;   
    $.ajax({
        url: "../Database/updateuser.php",
        type: "post",
        data: { adecisioneid: id,f:f},
        success: function () {            
            $('#desac'+id).text('Accepted!!');
            $('#desrj'+id).text('');
            $('#sl'+id).text('');
        }
    });
}


function reject(id){
    var f=1;
    $.ajax({
        url: "../Database/updateuser.php",
        type: "post",
        data: { rdecisioneid: id,f:f},
        success: function () {            
            $('#desrj'+id).text('Rejected!!');
            $('#desac'+id).text('');
            $('#sl'+id).text('');
        }
    });    
}

$(document).on("click",".deleteImg",function() {  
    var id = $(this).attr("data-id");    
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { imgID: id },
        success: function (d) {            
            alert('successfull')
            window.location.reload();
        },error: function () {
            alert('error');
        }
    })
})

function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}

function uploadVideo(){

    var video_name = document.getElementById('video_name').value;
    var video_desc = document.getElementById('video_desc').value;
    var video_link = document.getElementById('video_link').value;    
    var video_id = youtube_parser(video_link);
    var embed_video_link = "https://www.youtube.com/embed/";
    embed_video_link += video_id;
    embed_video_link += "?autoplay=1";    
    $.ajax({
        url: "../Database/uploads_video.php",
        type: "post",
        data: { video_name: video_name,video_desc : video_desc,video_link:embed_video_link },
        success: function (d) {            
            alert(d)
            window.location.reload();
        },error: function () {
            alert('error');
        }
    })
}

$(document).on("click",".deletevideo",function() {  
    var id = $(this).attr("data-id");
    // alert(id);
    $.ajax({
        url: "../Database/deleteuser.php",
        type: "post",
        data: { videoID: id },
        success: function (d) {
            alert('successfull')
            window.location.reload();
        }
    });
});


function openMailbox(){    
    $("#mailtxt").modal('show');        
}

function sendMail(){

    var client = document.getElementById('msgHeader').innerHTML;
    var mailtext = document.getElementById('orgmailtxt').innerHTML;
    $.ajax({
        url: "../Database/sendmail.php",
        type: "post",
        data: { client: client,mailtext:mailtext },
        success: function (d) {
            alert(d);
            window.location.reload();
        }
    });

}