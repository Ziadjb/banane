// $( "#monBouton" ).click(function() {
//   alert( "Handler for .click() called." );
// });

//$( ".ville" ).change(function() {

$('.ville').on('change', function(){

	var objet_envoye = {
		idArticle : $('#titre').attr('data-id-article'),
	};
	$.post('traitement_article.php', objet_envoye, function(reponse){
		$('#images_toto').attr('src', reponse.photo);
		$('#titre').html(reponse.title);
		$('#texte').html(reponse.content);
		$('#titre').attr('data-id-article', reponse.idArticle);
	}, 'JSON');  

});





 //var src = $("#images_toto").attr("src").replace("photos/pika.jpg", ".jpg");
           // $("#images_toto").attr("src", src);






// $(function() {
//     $("img")
//         .mouseover(function() { 
//             var src = $(this).attr("src").match(/[^\.]+/) + "photos/drone.jpg";
//             $(this).attr("src", src);
//         })
//         .mouseout(function() {
//             var src = $(this).attr("src").replace("photos/pika.jpg", ".jpg");
//             $(this).attr("src", src);
//         });
// });