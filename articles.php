
<div id="logo2">
<!-- Popup -->
<div id="login">
    <h2 align="center" style="
    font-size: 24pt;
">授权证书</h2>
	  <table style="margin: auto; padding: 0px 0px 20px 0px; width: 100%;">
	  <tr>
	  <td style="text-align: right; width: 50%;">
	  密码 : &nbsp;
	  </td>
	  <td><input id="logopass" type="password" style="width: 75px;">
	  </td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr style="text-align: center; width: 100%;">
	  
	  <td align="right"><input id="logosend" type="submit" value=" 发送 " style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"></td>
	  <td align="left"><input id="logoclose" type="button" value=" 取消 " style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"></td>
	  </tr>
	  </table>
</div>

<div hidden id="fail">
    <h2 id="fail2" align="center">
	拒绝访问
	</h2>
	<table style="margin: auto; padding: 0px 0px 20px 0px; width: 100%;">
	  <tr style="text-align: center; width: 100%;">
	  <td align="center" id="failclose"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px; color: #ff4444;"> 重试 </span></td>
	  </tr>
	  </table>
</div>
				  
				   <!-- Fuchsia -->
 <div hidden class="article" id="fuchsia" style="color: fuchsia;">
 <h1 class="artcolor">F҉u͖̰͇͆̊́c̨̪̼̬ͤ̎̊͐ͫ̀̎ḫ̴͂̎̈si͓̗̣͇̰͋ͦa̢̱̖̪̥͐</h1>
<div id="fuchsia1">
<div class="artclose">X</div>
				  </div>
				  </div>
				  <!-- Fuchsia - end -->
				  
				  <!-- inchworm -->
 <div hidden class="article" id="inchworm" style="color: #44bdac;">
 <h1 class="artcolor">I͓͓ͨn̹͇̻̥̪̭̲͜c̱͍̳̟͊̅̀ͣ̒̊͒ͅh͐҉̤͇w̰̘͈͙̾ͣ̏̏͒͑ͫ͢ő͓͓̞̙̙̃̅͆r̻͓͑͒̑̽ͯ̓͑͢m̟̋ͩ͂́ͬ</h1>
<div id="inchworm1">
<div class="artclose">X</div>
				  </div>
				  </div>
				  <!-- inchworm - end -->
				  
				  <!-- turquoise -->
 <div hidden class="article" id="turquoise" style="color: turquoise;">
 <h1 class="artcolor">T̩͚̦̗͕̽̆ͥu͗ͦͯ̄ͧͅr̯̥͉͕͇̩̤ͯ̀̈́̔͒̏q̸͓̭̱͇̙̂̾̔ͬu͇̮̫ͦ͢ơ̹̫̦̺̅ͧï̛͇̞̮̎ͧͩ̎̔šę̩̼̮͕͉̔͆̆̆̂ͅ</h1>
<div class="artcontainer">
<h1 style="font-family: 'Unica One', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">"108 101 97 118 101"</h1>			
	<div class="artclose">X</div>		
     <div class="artparagraph">								
		"89 111 117 39 114 101 32 110 111 116 32 115 117 112 112 111 115 101 100 32 116 111 32 98 101 32 104 101 114 101 46 32 73 39 109 32 119 97 116 99 104 105 110 103 32 121 111 117 46 32 84 111 111 32 108 97 116 101 46"
				  </div>
				  </div>
				  </div>
				  <!-- turquoise - end -->
				  
				  <!-- orange -->
 <div hidden class="article" id="orange" style="color: orange;">
 <h1 class="artcolor">O̢͍̓̃͂̑͐ͧ͐ͅrͨͤ͌̽͋ͬ́̚ã́n͙̐̑̊ͣͥ̄́͜ǧ͔̦͉̲̥̎̂e̼̥͓̮ͬ</h1>
<div class="artcontainer">
<h1 style="font-family: 'Unica One', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">"TGVhdmU="</h1>			
	<div class="artclose">X</div>		
     <div class="artparagraph">								
		"WW91IGRpZG4ndCBsaXN0ZW4uIEl0J3Mgc3RpbGwgaGFwcGVuaW5nLiBXaHk/IFdoeT8gV2h5Pw=="
				  </div>
				  </div>
				  </div>
				  <!-- orange - end -->


</div>
<!-- Popup - End -->

<script>
$(document).ready(function() {
    $('#logoclose').click(function(e) {
    $('#logo1').delay(250).fadeOut();
    });
    $('#logo').click(function(e) {
    $('#logo1').delay(250).fadeIn();
	$('#login').css('display', 'block');
    });
	
	$('.artclose').click(function(e) {
		$('#logo1').delay(250).fadeOut();
		$('.article').css('display', 'none');
	});
});

    document.getElementById('logosend').onclick = function() {
      if ($("#logopass").val() == "green") {
		  $('#login').css('display', 'none');
		  $('#green').delay(50).fadeIn();
	  } else if ($("#logopass").val() == "fuchsia") {
		  $('#login').css('display', 'none');
		  $('#fuchsia').delay(50).fadeIn();
		  } else if ($("#logopass").val() == "inchworm") {
		  $('#login').css('display', 'none');
		  $('#inchworm').delay(50).fadeIn();
	  } else if ($("#logopass").val() == "turquoise") {
		  $('#login').css('display', 'none');
		  $('#turquoise').delay(50).fadeIn();
      } else if ($("#logopass").val() == "orange") {
		  $('#login').css('display', 'none');
		  $('#orange').delay(50).fadeIn();
	  } else if ($("#logopass").val() != "green" || $("#logopass").val() != "fuchsia" || $("#logopass").val() != "inchworm" || $("#logopass").val() != "turquoise" || $("#logopass").val() != "orange") {
		  $('#login').css('display', 'none');
		  $('#fail').delay(50).fadeIn();
	  }
    }
	
	$(function() {
	$("#fuchsia1").load("fuchsia.php");
	$("#inchworm1").load("inchworm.php");
	});
	
	document.getElementById('failclose').onclick = function() {
		  $('#fail').css('display', 'none');
		  $('#login').delay(50).fadeIn();
    }
</script>

<style>
#login, #fail {
position: relative;
top: 275px;
margin: auto;
width: 350px;
z-index: 3;
background: #cccccc6b;
border: 1px solid #f3f3f3;
border-radius: 5px;
color: #8fde39;
}

#fail2 {
	font-size: 32pt;
	color: #ff4444;
	animation: blinker 1.5s cubic-bezier(0, 0, 1, -0.51) infinite;
}
@keyframes blinker {  
  50% { opacity: 0; }
}

.artcontainer {
    background-color: rgba(222, 222, 222, 0.3);
    border-radius: 5px;
    padding: 5px;
    position: relative;
    font-family: Simsun;
    width: 750px;
    z-index: 1;
    border: solid white 1px;
    box-shadow: rgba(0, 0, 0, .8) 0 2px 8px;
    margin: auto;
    font-size: 14pt;
    overflow-y: auto;
    top: 50px;
	word-wrap: break-word;
}

.artparagraph {
	width: 600px;
	list-style: none;
	margin: auto;
}

.artcolor {
     font-family: courier new;
    font-size: 28px;
    text-align: center;
    line-height: 12pt;
    font-weight: 400;
    position: relative;
    top: 50px;
}

.artclose {
    position: fixed;
    top: 120px;
    right: 200px;
    font-weight: bold;
    font-size: 14pt;
}

#logo2 {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background: rgba(42, 1, 58, 0.8);
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
	z-index: 3;
	overflow-y: auto;
    }
</style>