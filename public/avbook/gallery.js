$(document).ready(function() {
    if ($("#star-toggle").attr("class") == "glyphicon glyphicon-minus") {
        $("#star-div").show();
    }else{
		
		$("#star-div").hide();
	}
	
    $('.star-show').click(function() {
        $("#star-toggle").toggleClass("glyphicon-minus glyphicon-plus");
        $("#star-div").slideToggle();
        $.cookie("starinfo", $("#star-toggle").attr("class"), {
            expires: 365,
            path: '/'
        });
    });
    $('#star-hide').click(function() {
        $("#star-toggle").toggleClass("glyphicon-minus glyphicon-plus");
        $("#star-div").slideToggle();
        $.cookie("starinfo", $("#star-toggle").attr("class"), {
            expires: 365,
            path: '/'
        });
    });
    $('#mag-submit-show').click(function() {
        $("#mag-submit-toggle").toggleClass("glyphicon-minus glyphicon-plus");
        $("#mag-submit").slideToggle();
    });
    $('#mag-submit-hide').click(function() {
        $("#mag-submit-toggle").attr("class", "glyphicon glyphicon-plus");
        $("#mag-submit").slideToggle();
    });
	$('#edit-submit-show').click(function() {
		$("#edit-desc").slideToggle();
		$("#edit-director").slideToggle();
        $("#edit-studio").slideToggle();
		$("#edit-label").slideToggle();
		$("#edit-series").slideToggle();
		$("#edit-sample-dmm").slideToggle();
		$("#show_rename_div").slideToggle();
    });
    $('#edit-submit-hide').click(function() {
		$("#edit-desc").slideToggle();
		$("#edit-director").slideToggle();
        $("#edit-studio").slideToggle();
		$("#edit-label").slideToggle();
		$("#edit-series").slideToggle();
		$("#edit-sample-dmm").slideToggle();
		$("#show_rename_div").slideToggle();
		
    });
});
$('#urad1').hover(function() {
    $('.left-urad1').stop().animate({
        width: '55px'
    },
    300)
},
function() {
    $('.left-urad1').stop().animate({
        width: '-0'
    },
    300)
});
$('#urad2').hover(function() {
    $('.left-urad2').stop().animate({
        width: '55px'
    },
    300)
},
function() {
    $('.left-urad2').stop().animate({
        width: '-0'
    },
    300)
});
function hoverdiv(e, starhover) {
    var left = e.clientX + "px";
    var top = e.clientY + "px";
    $("#" + starhover).css('left', left);
    $("#" + starhover).css('top', top);
    $("#" + starhover).css('position', 'fixed');
    $("#" + starhover).toggle();
    return false;
}
function checktxt() {
    var appendedInput = $("#appendedInputButton").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}

function check_edit_desc_data() {
    var appendedInput = $("#edit-desc-data").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}

function check_edit_sample_dmm_data() {
    var appendedInput = $("#edit-sample-dmm-data").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}


function check_edit_director_data() {
    var appendedInput = $("#edit-director-data").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}

function check_edit_studio_data() {
    var appendedInput = $("#edit-studio-data").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}

function check_edit_label_data() {
    var appendedInput = $("#edit-label-data").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}

function check_edit_series_data() {
    var appendedInput = $("#edit-series-data").val();
    var e = "../uncledatoolsbyajax_newmg?gid=" + gid   ;
    $.ajax({
        url: e,
        data: {mgurl : appendedInput},
        type: "GET",
        success: function(e) {
            window.location.href =window.location.href ;
           // $("#magneturlpost").html(e)
        }
    });
}

function uncledatoolsbyajax(){
	var t = "../uncledatoolsbyajax/" +gid +"/"  ;
    $.ajax({
        url: t,
        type: "GET",
        success: function(e) {
            $("#magnet-table").append(e)
        }
    });
}

function uncledatoolsbyajax_nr(){
    var t = "../uncledatoolsbyajax_nr/" +gid +"/"+ gidmg  ;
    $.ajax({
        url: t,
        type: "GET",
        success: function(e) {
            $("#magnet-table2").append(e)
        }
    });
}
