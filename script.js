/*Script for rullevindu*/
function rulle()
{
	$('#rullevindu li:first').slideUp( function() { $(this).appendTo($('#rullevindu')).slideDown(); });
}
setInterval(function(){ rulle()}, 5000);

$(document).ready(function(){
	/*kode for profilvindu*/
	$( "#profil" ).load( "./profilbilder.html .profilbilder",function(){
		$("#profil > img").toggle();
		var ant = $("#profil").children().length;
		var nummer = 1 + Math.floor(Math.random() * ant);
		var nr = "#profil img:nth-child(" + nummer + ")";
		$(nr).toggle(0, function(){
			$("#profil > img").css({
				"height":"auto",
				"max-width":"340px",
				"max-height":"198px",
				"float":"left",
				"margin-left":"1px",
				"margin-right":"auto"
			});
		});
	});

	/*kode for knapper*/
	$(".spiller").append("<button>vis mer</button><button class='mindre'>vis mindre</button>");
	$(".nyhet").append("<button>vis mer</button><button class='mindre'>vis mindre</button>");

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

	//kode for tabeller
	var rad;
	var antall = $("#aside_tabell tr").length;
	for(var i = 0; i < antall; i+=2)
	{
		rad = "#aside_tabell tr:nth-child(" + i + ")";
		$(rad).css({
			"background-color":"#bbb"
		});
	};

	/*Sript for Easteregg */
	teller="0";
	$("#header_bilde").mouseover(function(){
		teller++;

		if(teller == 9)
		{
			$("#ramme").css("background-color","blue");
			/*$('body').css('background-image','url("bakgrunntexture.jpg")');*/
		}
		if(teller == 15)
		{
			alert("Gruppe 41 vil takke alle spillerne fra SBIO Fotball for bidragene, og Ã¸nsker dere lykke til neste sesong! :-)");
		}
	});
});//end of ready(function)
