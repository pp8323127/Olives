
<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	#gotop {
	    display: none;
	    position: fixed;
	    right: 20px;
	    bottom: 20px;    
	    padding: 10px 15px;    
	    font-size: 20px;
	    background: #777;
	    color: white;
	    cursor: pointer;
	}



input 
{   
	background: #ffffff;   
	display: block;   
	border: 8px solid #ffffff;   
	/* 邊角圓弧化，不同瀏器覧設定不同　*/
	-moz-border-radius:3px; /*// Firefox*/
	-webkit-border-radius: 3px; /*// Safari 和 Chrome*/
	border-radius: 8px; /*// Opera 10.5+*/
	width: 100%

}   
input[type]
{
	font-size: 14px;
}
  
body
{
	/*padding: 0em 16em 0em 16em;*/
	background: #eeeeee;
}

.form
{
	padding: 0em 16em 0em 16em;

}

</style>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script type="text/javascript" >
$(window).scroll(function(){
    if( $(this).scrollTop() > 300){
        $("#gotop").fadeIn();
    } else {
        $("#gotop").stop().fadeOut();
    }
});

// Scroll TOP
$(function(){
	$("#gotop").click(function(){
		$("html,body").animate({scrollTop:0},800);
		return false;
	});
});


	// dialogUI+buttonOK
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

			height: 350,
			width: 550,
			autoOpen: false

			buttons: {
				"OK": function(){
					$(this).dialog("close");
				}
			}
		});
	});
 </script>


<div id="dialog" title="Olives Dialog">
	<p>
		MO.SHOT Studio Design.
	</p>
</div>
<html>



<body>
	<div id="gotop">^</div>
<div class="form">
	<form method="post">
		<p><label>電子郵件(帳號)</label></p>
		<p><input type="email" name="id" placeholder="olives@gmail.com" required></p>

		<p><label>密碼(4-20位)</label></p>
		<p><input type="password" name="passwd" maxlength="20" required></p>

		<p><label>確認密碼</label></p>
		<p><input type="password" name="chkpasswd" required></p>

		<p><label>暱稱</label></p>
		<p><input type="text" name="name" required></p>

		<p><label>性別</label></p>
		<p><select name="sex">
			<option value="1"><label>男</label></option>
			<option value="0"><label>女</label></select></p>
		
		<p><label>生日</label></p>
		<p><input type="date" name="birth" required></p>

		<p><label>電話</label></p>
		<p><input type="tel" name="tel" placeholder="09xxxxxxxx" pattern="[09]{2}[0-9]{8}" required></p>

		<p><button type="submit">submit</button></p>
		<p><button type="reset">reset</button></p>
	</form>
</div>

<!-- <DIV style="LEFT: 0px; POSITION: absolute; TOP: 0px" align=center> -->
 
<!-- <IFRAME src="http://163.18.109.98/unity/" frameBorder=0 width=1024 style="width1024:px;height:12000px;" scrolling=no height=12000 ALLOWTRANSPARENCY="true"></IFRAME> -->
 
<!-- </DIV> -->

<!-- <iframe src="http://163.18.109.98/unity/" id="frameid" frameBorder=0 scrolling=yes ></iframe> -->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<img src="images/btn_top2.png">
<img src="images/btn_top1.png">
</html>