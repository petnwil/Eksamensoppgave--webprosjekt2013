/*Script for vis mer knapper, krever class="mindre" i htmlen på vis mindre knappene.
Det som skal vises/skjules må ligge i en article tagg.*/

$(document).ready(function(){
	$("button").css("display", "inline");
	$(".mindre").toggle();
	$("article").toggle();

	$("button").click(function(){
		$(this).siblings("button").toggle();
		$(this).toggle();
		$(this).siblings("article").toggle();
	});
});
