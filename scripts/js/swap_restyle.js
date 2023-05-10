$(document).ready(function () {
	var activeNavItem = $('#navHome');
	selectPage();
	selectModel();

	function selectPage() {

		$('#homeContainer').show();
		$('#about').hide();
		$('#modelsContainer').hide();
		$('#descriptionContainer').hide();

		$('#navHome').click(function () {
			$('#homeContainer').show();
			$('#about').hide();
			$('#modelsContainer').hide();
			$('#descriptionContainer').hide();
			activeNavItem.removeClass('active');
			activeNavItem = $('#navHome');
			$('#navHome').addClass('active');	  
		});

		$('#navModels').click(function () {
			$('#homeContainer').hide();
			$('#about').hide();
			$('#modelsContainer').show();
			$('#descriptionContainer').show();
			$('#modelsContainer').load('/application/view/models.php');
			$('#navModels').addClass('active');
			activeNavItem.removeClass('active');
			activeNavItem = $('#navModels');
		});
	}

	function selectModel() {

		$('#navCoke').click(function () {
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			// $('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide();
			$('#pepperDescription').hide();
		});

		$('#navSprite').click(function () {
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			// $('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();
		});

		$('#navPepper').click(function () {
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide();
			$('#pepperDescription').show();
		});
	}

});

var counter = 0;
function changeLook() {
	const stylesheet = document.styleSheets[7];
	let elementRules;
	console.log(document.styleSheets.length);
	for (let i = 0; i < document.styleSheets.length; i++) {
		console.log(document.styleSheets[i]);
	}

	// looping through all its rules and getting your rule
	for (let i = 0; i < stylesheet.cssRules.length; i++) {
		if (String(stylesheet.cssRules[i].selectorText) == '.button-main-style') {
			elementRules = stylesheet.cssRules[i];
			break
		}
	}

	counter += 1;
	switch (counter) {
		case 1:
			buttonColour = "#ef233c";
			headerColour = "#d90429";
			backgroundColor = "#edf2f4";
			break;
		case 2:
			buttonColour = "#2b9348";
			headerColour = "#264653";
			backgroundColor = "#ffff3f";
			break;
		case 3:
			buttonColour = "#89b0ae";
			headerColour = "#ffcbf2";
			backgroundColor = "#d8bbff";
			break;
		case 4:
			counter = 0;
			buttonColour = "#ffa69e";
			headerColour = "#aed9e0";
			backgroundColor = "#faf3dd";
			break;
	}

	elementRules.style.setProperty('background', buttonColour);
	document.getElementById('body').style.backgroundColor = backgroundColor;
	document.getElementById('header').style.backgroundColor = headerColour;
	document.getElementById('footer').style.backgroundColor = headerColour;
}

function changeBack() {
	counter = 0;
	changeLook();
}