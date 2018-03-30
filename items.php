<div id="itcontainer">

<!-- chimages -->
<div hidden id="itimg1a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg0b" class="itimgb" src="credit.png">
</div>

<div hidden id="itimg1a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg1b" class="itimgb" src="rolactid.png">
</div>

<div hidden id="itimg2a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg2b" class="itimgb" src="smartwatch.png">
</div>

<div hidden id="itimg3a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg3b" class="itimgb" src="dice.png">
</div>

<div hidden id="itimg4a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg4b" class="itimgb" src="usb.png">
</div>

<div hidden id="itimg5a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg5b" class="itimgb" src="rollershoes.png">
</div>


<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">Items</h1>			
		
	
	<div id="itselect">
            <select id="itselecta">
			<option>Item Select</option>
			<option>Credits</option>
			<option>Smartwatch</option>
			<option>Lucky Dice</option>
			<option>USB</option>
			<option>Rollershoes</option>
			</select>
   </div>
   
   <div hidden id="item0" style="text-align: center; margin: 50px 0px;">
   <img id="itimg0" class="itimg" src="credit.png">
				<div class="ittitle">Credits</div>
				<div class="itparagraph">
				<div id="credits1">
				</div>
</div>	
</div>		
				  
				<div hidden id="item1" style="text-align: center; margin: 50px 0px;">
				<img id="itimg1" class="itimg" src="rolactid.png">
				
				<div class="ittitle">15mg Rolactid</div>
				<div class="itparagraph">
				12 count 15mg Rolactid supplemental pills.
				<br/>To be taken once every 24 hours. Player suffers 1 hour headache, -2 Wisdom & Charisma during that time. Headache goes away after 1 hour. +3 to Perception & Sense Motive as long as pill is taken that day.
				</div>
				<div style="text-align: center;">Pill Count:
				<br/><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"></div>
</div>				

<div hidden id="item2" style="text-align: center; margin: 50px 0px;">
<img id="itimg2" class="itimg" src="smartwatch.png">
				
				<div class="ittitle">Smartwatch</div>
				<div class="itparagraph">
				Wrist watch with built-in data storage, social networking, access to news media, and weather apps that adapt and protect the wearer from rainfall, snowfall, and UV rays in the form of translucent and tinted umbrella canopy. +3 to all Knowledge after using Media apps for 1 round. -2 to Dex and Str during use.
				</div>
				<div style="text-align: center;">Battery Life (days):
				<br/><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"></div>
</div>	

<div hidden id="item3" style="text-align: center; margin: 50px 0px;">
<img id="itimg3" class="itimg" src="dice.png">
				
				<div class="ittitle">Lucky Dice</div>
				<div class="itparagraph">
				Gold plated six-sided dice.
				<br/>These give the player an extra 2D6 bonus to any roll of their choice, once per day.
				</div>
				<div style="text-align: center;">Daily Uses:
				<br/><input type="checkbox"></div>
</div>

<div hidden id="item4" style="text-align: center; margin: 50px 0px;">
<img id="itimg4" class="itimg" src="usb.png">
				
				<div class="ittitle">USB</div>
				<div class="itparagraph">
				Engraved USB drive.
				<br/>+3 to Disable Device/Computer Use/electronic-related checks, as long as USB port is present.
				</div>
				<div style="text-align: center;">Codes Unlocked:
				<br/>_______
				<br/>_______
				<br/>_______
				<br/>_______
				<br/>_______
				<br/>_______
				<br/>_______</div>
</div>	

<div hidden id="item5" style="text-align: center; margin: 50px 0px;">
<img id="itimg5" class="itimg" src="rollershoes.png">
				
				<div class="ittitle">Rollershoes</div>
				<div class="itparagraph">
				Sneakers with hidden skate wheels.
				<br/>Light-up Roller shoes that give a bonus of 10ft of movement once per combat, -2 str for one round after activation.
				</div>
				<div style="text-align: center;">LED Colors:
				<br/>Pink
				<br/>Blue
				<br/>Green
				<br/>Yellow
				<br/>White
				<br/>Red
</div>
</div>			
				  



<script>
$(function() {
      $("#itselecta").change(function() {
      if ($(this).val() == "Item1") {
        ($("#item1").prop("hidden", false));
      } else if ($(this).val() != "Item1") {
        ($("#item1").prop("hidden", true));
      }
	  if ($(this).val() == "Smartwatch") {
        $("#item2").prop("hidden", false);
      } else if ($(this).val() != "Smartwatch") {
        $("#item2").prop("hidden", true);
      }
	  if ($(this).val() == "Lucky Dice") {
        $("#item3").prop("hidden", false);
      } else if ($(this).val() != "Lucky Dice") {
        $("#item3").prop("hidden", true);
      }
	  if ($(this).val() == "USB") {
        $("#item4").prop("hidden", false);
      } else if ($(this).val() != "USB") {
        $("#item4").prop("hidden", true);
      }
	  if ($(this).val() == "Rollershoes") {
        $("#item5").prop("hidden", false);
      } else if ($(this).val() != "Rollershoes") {
        $("#item5").prop("hidden", true);
      }
	   if ($(this).val() == "Credits") {
        $("#item0").prop("hidden", false);
      } else if ($(this).val() != "Credits") {
        $("#item0").prop("hidden", true);
      }
    });
	
	$(function() {
	$("#credits1").load("Credits.php");
	});
	
	$('#itimg0').click(function(e) {
		$('#itimg0a').toggle();
	});
	$('#itimg1').click(function(e) {
		$('#itimg1a').toggle();
	});
	$('#itimg2').click(function(e) {
		$('#itimg2a').toggle();
	});
	$('#itimg3').click(function(e) {
		$('#itimg3a').toggle();
	});
	$('#itimg4').click(function(e) {
		$('#itimg4a').toggle();
	});
	$('#itimg5').click(function(e) {
		$('#itimg5a').toggle();
	});
	  $('.itimgclose').click(function(e) {
		$(this).parent('.itimga').css('display', 'none');
	});
});

</script>

<style>

#itcontainer {
    background-color: rgba(222, 222, 222, 0.17);
    color: #fd6293;
    border-radius: 5px;
    padding: 5px;
    position: relative;
    font-family: Simsun;
    width: 850px;
    height: auto;
    z-index: 1;
    border: solid white 1px;
    box-shadow: rgba(0, 0, 0, .8) 0 2px 8px;
    margin: auto;
    font-size: 14pt;
    overflow-y: auto;
    top: 50px;
}

.itparagraph {
	width: 600px;
    margin: auto;
    list-style: none;
    text-align: center;
}

.ittitle {
    text-align: center;
	font-size: 48pt;
	font-family: 'Fredericka the Great', cursive;
}

#itselect {
	text-align: center;
}

#itselecta {
	position: relative;
    top: 0px;
    left: -10px;
    width: auto;
    text-align: center;
    list-style: none;
    background: #00000099;
	font-size: 14pt;
	color: #8edc39;
}

.itimg {
	border: 1px solid;
    height: 250px;
	cursor: pointer;
}


.itimga {
	position: absolute;
    top: 0px;
    left: 0px;
    background: #00000099;
    width: 100%;
    height: -webkit-fill-available;
    z-index: 3;
    text-align: center;
    padding: 100px 0px;
}

.itimgb {
	width: 250px;
}

.itimgclose {
	position: absolute;
    top: 10px;
    right: 10px;
    font-weight: bold;
    font-size: 14pt;
}

</style>