
// Scroll TOP
$(window).scroll(function(){
    if( $(this).scrollTop() > 350){
        $("#scrollup").fadeIn();
    } else {
        $("#scrollup").stop().fadeOut();
    }
});

$(function(){
	$("#scrollup").click(function(){
		$("html,body").animate({scrollTop:0},800);
		return false;
	});
});


// 登入dialogUI+buttonOK
$(function() {
	$( "#dialog" ).dialog({ 
		show: {
			effect: "fade", 
			duration: 1000,
		},
		hide: {
			effect: "drop", 
			duration: 1000
		},

		// height: 300,
		width: 550,
		// position:['center','center'],
		autoOpen: true,

		// Dialog 的按鈕
		// buttons: {
		// 	"加入會員": function(){
		// 		$(this).dialog("close");
		// 	},
		// 	"登入": function(){
		// 		// window.location.href="member_login_check.php";
		// 		var id = document.getElementById('dialog_inputID');
		// 		var passwd = document.getElementById('dialog_inputPAS');
				
		// 		alert(id.value);
		// 		alert(passwd.value);

		// 		md5();
		// 		// alert( md5() );
		// 		window.location.href="member_login_check.php";
		// 		$(this).dialog("close");
		// 	}
		// },
	});
});

//JS MD5方法
function md5(){
	var hash=hex_md5(document.getElementById("dialog_inputPAS").value);
	return hash;
}
