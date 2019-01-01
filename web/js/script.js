//////////////////////////////////	
$('#qte').val(0);	// initialisation

// page details commande
$('#plus').click(function(){
	var qte = $('#qte').val();
	$('#qte').val(parseInt(qte)+1);
});

$('#moin').click(function(){
	var qte = $('#qte').val();
	if (parseInt(qte) == 0){
		('#qte').val(0);
	}
	else
	{
		$('#qte').val(parseInt(qte)-1);
	}
});

// ajouter au panier
function addProduct(product_id){
	var qte = parseInt($('#qte').val());
	window.location.href = "/panier/ajouter/"+product_id+"/"+qte;
}

//**************
// page panier
function updateQtePlus(id_produit)
{
	var qtee = parseInt($('#qte_1').val());
	qtee++;
	$('#qte_1').val(qtee);
	window.location.href="/panier/modifier/"+id_produit+"/"+qtee;
}

function updateQteMoin(id_produit)
{
	var qtee = parseInt($('#qte_1').val());
	if (qtee <= 1){
		$('#qte_1').val(1);
		qtee = 1;
		window.location.href="/panier/modifier/"+id_produit+"/"+qtee;
	}
	else
	{
		qtee--;
		$('#qte_1').val(qtee);
		var qtee = $('#qte_1').val();
		window.location.href="/panier/modifier/"+id_produit+"/"+qtee;
	}
}

// rating system 
$(document).ready(function(){
	  $('.rating').rating();

	  $("#divrating i").on("click",function(event){
	  	alert("Merci pour votre avis !");
		var star = parseInt($('#ratingv').val());
		var id_produit = parseInt($('#prodval').val());
		window.location.href="/rating/add/"+id_produit+"/"+star;
	});
	});

/////////////////////////// slide

		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
