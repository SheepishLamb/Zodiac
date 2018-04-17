<div class="artcontainer" style="font-family: georgia;">
<h1 style="font-family: 'VT323', monospace; font-size: 28px; text-align: center; line-height: 20pt; font-weight: 400;">Track a package</h1>
<div class="artparagraph" style="text-align: center; background: linear-gradient(to bottom, #8880 80%, #0000007a 95%); font-size: 13pt;">
<form>
  <input id="track" placeholder="Enter tracking number" value="" type="text">
  <div id="error" hidden>
    <img src="https://i.imgur.com/BaX8Ipz.png">
    <br/>Can't match this number to a carrier</div>
</form>
<div hidden id="96732487stat">
  Status: Delivered
</div>
<div hidden id="94743899stat">
  Status: Lost
</div>
<div hidden id="95109248stat">
  Status: Hacked
  <br/>Delivery Address: China, Beijing Shi, Dongcheng Qu, DongDan, Wangfujing St, 新东安广场1层130-131、B1层B130-B135 邮政编码: 100006
</div>

<div>
  <br/>Known Packages:
  <br/>96732487
  <br/>95122179
  <br/>95109248
  <br/>94743899
  <br/>92873245
  <br/>92367430

</div>

<script>
$("#track").change(function() {
  if ($(this).val() == "96732487" || $(this).val() == "95122179" || $(this).val() == "92873245") {
    $("#96732487stat").prop("hidden", false);
  } else if ($(this).val() != "96732487" && $(this).val() != "95122179" && $(this).val() != "92873245") {
    $("#96732487stat").prop("hidden", true);
  }
  if ($(this).val() == "94743899" || $(this).val() == "92367430") {
    $("#94743899stat").prop("hidden", false);
  } else if ($(this).val() != "94743899" && $(this).val() != "92367430") {
    $("#94743899stat").prop("hidden", true);
  }
  if ($(this).val() == "95109248") {
    $("#95109248stat").prop("hidden", false);
  } else if ($(this).val() != "95109248") {
    $("#95109248stat").prop("hidden", true);
  }
  if ($(this).val() != "96732487" && $(this).val() != "95122179" && $(this).val() != "92873245" && $(this).val() != "94743899" && $(this).val() != "92367430" && $(this).val() != "95109248") {
    $("#error").prop("hidden", false);
  } else if ($(this).val() == "96732487" || $(this).val() == "95122179" || $(this).val() == "92873245" || $(this).val() == "94743899" || $(this).val() == "92367430" || $(this).val() == "95109248" || $(this).val() == "") {
    $("#error").prop("hidden", true);
  }
});
</script>
	 </div>
	 </div>