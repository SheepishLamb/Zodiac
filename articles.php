
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
	  
	  <td align="right" id="logosend"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"> 发送 </span></td>
	  <td align="left" id="logoclose"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"> 取消 </span></td>
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
 <div class="artclose">X</div>
<div id="fuchsia1">
				  </div>
				  </div>
				  <!-- Fuchsia - end -->
				  
				  <!-- inchworm -->
 <div hidden class="article" id="inchworm" style="color: #44bdac;">
 <h1 class="artcolor">I͓͓ͨn̹͇̻̥̪̭̲͜c̱͍̳̟͊̅̀ͣ̒̊͒ͅh͐҉̤͇w̰̘͈͙̾ͣ̏̏͒͑ͫ͢ő͓͓̞̙̙̃̅͆r̻͓͑͒̑̽ͯ̓͑͢m̟̋ͩ͂́ͬ</h1>
 <div class="artclose">X</div>
<div id="inchworm1">
				  </div>
				  </div>
				  <!-- inchworm - end -->
				  
				  <!-- nightlight -->
 <div hidden class="article" id="nightlight" style="color: orange;">
  <h1 class="artcolor">n̞̺͜ͅig̴͖̻͖͉͈h͇tl̴i͎̖̺̦g͕h̗̞͍͍ͅt͈̱̪̝̀</h1>
 <div class="artclose">X</div>
<div id="nightlight1">
				  </div>
				  </div>
				  <!-- nightlight - end -->
				  
				  <!-- delta -->
 <div hidden class="article" id="delta" style="color: red;">
<h1 class="artcolor">d̸͚̹̖e̹͓̘̼̜̩̪͞l̠̲̭t̩͇̫̜̹a̫</h1>
 <div class="artclose">X</div>
<div id="delta1">
				  </div>
				  </div>
				  <!-- delta - end -->


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

// Get the input field
var input = document.getElementById("logopass");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Cancel the default action, if needed
  event.preventDefault();
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Trigger the button element with a click
    document.getElementById("logosend").click();
  }
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
	  } else if ($("#logopass").val() == "nightlight") {
		  $('#login').css('display', 'none');
		  $('#nightlight').delay(50).fadeIn();
      } else if ($("#logopass").val() == "delta") {
		  $('#login').css('display', 'none');
		  $('#delta').delay(50).fadeIn();
	  } else if ($("#logopass").val() != "green" || $("#logopass").val() != "fuchsia" || $("#logopass").val() != "inchworm" || $("#logopass").val() != "nightlight" || $("#logopass").val() != "delta") {
		  $('#login').css('display', 'none');
		  $('#fail').delay(50).fadeIn();
	  }
    }
	
	$(function() {
	$("#fuchsia1").load("fuchsia.php");
	$("#inchworm1").load("inchworm.php");
	$("#nightlight1").load("nightlight.php");
	$("#delta1").load("delta.php");
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
    top: 0px;
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
	z-index: 3;
    cursor: pointer;
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