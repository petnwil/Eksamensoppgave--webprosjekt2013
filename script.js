/*Script for vis mer knapper, krever class="mindre" i htmlen pÃ¥ vis mindre knappene.
Det som skal vises/skjules mÃ¥ ligge i en article tagg.*/

$(document).ready(function(){
	$("button").css("display", "block");
	$(".mindre").toggle();
	$("article").toggle();

	$("button").click(function(){
		$(this).siblings("button").toggle();
		$(this).toggle();
		$(this).siblings("article").toggle(500);

		if( $(this).attr("class") == "mindre")
		{
			$(this).siblings("img").css({
				height: "-=300px",
				//width: "auto"
			});
		}
		else
		{
			$(this).siblings("img").css({
				height: "+=300px",
				//width: "auto"
			});
		}
	});

});
