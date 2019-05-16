<!DOCTYPE html>
<html lang="id">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Kontak</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="Kontak" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20190120113454" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20190120113454" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1553823988" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1553823988" rel="stylesheet" type="text/css" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance33" class="wb_element wb-menu"><ul class="hmenu"><li><a href="" target="_self">Home</a></li><li><a href="Tentang-kami/" target="_self">Tentang kami</a></li><li><a href="Produk/" target="_self">Produk</a></li><li class="active"><a href="Kontak/" target="_self">Kontak</a></li></ul><div class="clearfix"></div></div></div><div class="wb_cont_outer"><div id="wb_element_instance34" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance37" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span class="wb-stl-highlight">Kontak</span></h1></div><div id="wb_element_instance38" class="wb_element"><form class="wb_form" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="d5a5aa66"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">Nama&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Nama"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr class="area-row"><th class="wb-stl-normal">Pesan&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Pesan"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Kirim</button></td></tr></table></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "d5a5aa66") { ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("d5a5aa66", formValues, formErrors);
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success");
				if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
					var prompt = $("<div>")
						.addClass("alert alert-<?php echo $wb_form_send_success ? "success" : "danger"; ?>")
						.css({ position: "fixed", opacity: 0, right: "-50px", top: "10px", zIndex: 10000, fontSize: "24px",
							   padding: "30px 50px", lineHeight: "24px", maxWidth: "748px" })
						.append("<?php echo str_replace('"', '\"', $wb_form_send_state); ?>")
						.prepend($("<button>").addClass("close")
							.css({ marginRight: "-40px", marginTop: "-24px" })
							.html("&nbsp;&times;")
							.on("click", function() { $(this).parent().remove(); })
						)
					.appendTo("body");
					setTimeout(function() { prompt.animate({ opacity: 1, right: "10px" }, 250); }, 250);
					<?php $wb_form_send_success = false; $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance39" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-normal"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+62 890902060</span></span></span></p><p class="wb-stl-normal">Jl. Kp Rawadas No 75</p><p class="wb-stl-normal">Pondok Kopi</p><p class="wb-stl-normal">Duren Sawit</p><p class="wb-stl-normal">Jakarta Timur</p><p class="wb-stl-normal">Indonesia</p></div><div id="wb_element_instance41" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance41");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance41").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"><div id="wb_element_instance40" class="wb_element wb-map"><div style="background: rgba(0,0,0,0.38); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"><div style="font-size: 24px; width: 100%; color: #c00; padding: 0 20%; text-align: center; display: inline-block; vertical-align: middle;">Get API Key from <a style="display: inline-block; max-width: 100%; word-break: break-all; color: #fff;" target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">https://developers.google.com/maps/documentation/javascript/get-api-key</a></div><div style="vertical-align: middle; height: 100%; display: inline-block;"></div></div><script type="text/javascript">
				(function() {
					var resizeFunc = function() {
						var elem = $("#wb_element_instance40");
						var w = elem.width(), h = elem.height();
						elem.find("div > div:first").css("zoom", Math.max(0.5, Math.min(1, ((w * h) / 120000))));
					};
					$(window).on("resize", resizeFunc);
					resizeFunc();
				})();
			</script></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 190px;"><div id="wb_element_instance35" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;">© 2019 <a href="http://nurjirehwedding.net">nurjirehwedding.net</a></p></div><div id="wb_element_instance42" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"><div id="wb_element_instance36" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
