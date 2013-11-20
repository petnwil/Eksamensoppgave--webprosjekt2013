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




/*Script for rullevindu*/
function rulle()
{
	$('#rullevindu p:first').slideUp( function() { $(this).appendTo($('#rullevindu')).slideDown(); });
}
setInterval(function(){ rulle()}, 5000);





/*Sript for Easteregg */
	$(document).ready(function(){
		teller="0";
		$("#header_bilde").mouseover(function(){
			{
				teller++;
			}
			if(teller == 3)
			{
			$("#ramme").css("background-color","pink");
			/*$('body').css('background-image','url("bakgrunntexture.jpg")');*/
			}
			if(teller == 5)
			{
				$("#ramme").css("background-color","yellow");
			}
			if(teller == 10)
			{
				alert("Gruppe 41 vil takke alle spillerne fra SBIO Fotball for bidragene, og ønsker dere lykke til neste sesong! :-)");
			}
		});
	});
