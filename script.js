/*Script for vis mer knapper, krever class="mindre" i htmlen pÃ¥ vis mindre knappene.
Det som skal vises/skjules mÃ¥ ligge i en article tagg.*/

$(document).ready(function(){
	$("button").css("display", "block");
	$(".mindre").toggle();
	$(".mindre").siblings("article").toggle();

	$("button").click(function(){
		$(this).siblings("button").toggle();
		$(this).toggle();
		$(this).siblings("article").toggle(500);

		if( $(this).attr("class") == "mindre")
		{
			$(this).siblings("img").animate({
				height: "-=300px",
				width: "auto"
			});
		}//end of if
		else
		{
			$(this).siblings("img").animate({
				height: "+=300px",
				width: "auto"
			});
		}//end of else
	});//end of click(function)
});//end of ready(function)

function rulle()
{
	$('#rullevindu p:first').slideUp( function() { $(this).appendTo($('#rullevindu')).slideDown(); });
}
setInterval(function(){ rulle()}, 5000);
