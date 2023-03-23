$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 

		// $('#home').show();
		// $('#about').hide();
		// $('#models').hide();
		// $('#interaction').hide();
		// $('#cokeDescription').hide();
		// $('#spriteDescription').hide(); 
		// $('#pepperDescription').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navSprite').click(function(){
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navPepper').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		});
	}

});

function swap(selected) {
    document.getElementById('home').style.display = 'none';
    document.getElementById('coke').style.display = 'none';
    document.getElementById('sprite').style.display = 'none';
    document.getElementById('pepper').style.display = 'none';

    document.getElementById(selected).style.display = 'block';
}

var counter = 0;
function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('body').style.backgroundColor = 'lightblue';
            document.getElementById('header').style.backgroundColor = '#FF0000';
            document.getElementById('footer').style.backgroundColor = '#FF9900';
            break;
        case 2:
            document.getElementById('body').style.backgroundColor = '#FF6600';
            document.getElementById('header').style.backgroundColor = '#FF9999';
            document.getElementById('footer').style.backgroundColor = '#996699';
            break;
        case 3:
            document.getElementById('body').style.backgroundColor = 'coral';
            document.getElementById('header').style.backgroundColor = 'darkcyan';
            document.getElementById('footer').style.backgroundColor = 'darksalmon';
            break;
        case 4:
            counter = 0;
            document.getElementById('body').style.backgroundColor = 'lightgrey';
            document.getElementById('header').style.backgroundColor = 'chocolate';
            document.getElementById('footer').style.backgroundColor = 'dimgrey';
            break;
    }
}

function changeBack() {
    document.getElementById('body').style.backgroundColor = '#FFFFFF';
    document.getElementById('header').style.backgroundColor = 'rgba(175,0,0,1)';
    document.getElementById('footer').style.backgroundColor = 'rgba(175,0,0,1)';
}