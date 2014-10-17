$(function(){

	var toplamUrun = $(".slideIn .slideUrun").length;
	var urunWidth = 230;
	var deger = 0;
	
	$(".sagOk").on('click', function(){
		if(deger < toplamUrun-4){
		deger = deger + 4;
		var kaydir = deger * urunWidth;
		$(".slideIn").animate({ "marginLeft" : "-" + kaydir + "px" });
		}
	});
	$(".solOk").on('click', function(){
		if(deger > 0){
		deger = deger - 4;
		var kaydir = deger * urunWidth;
		$(".slideIn").animate({ "marginLeft" : "-" + kaydir + "px" });	
		}
	});
	

});