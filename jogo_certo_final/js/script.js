(function(){
	var timer = 30;
	var timer_id;

	var acertos = 0;

	var imagens = [];

	var cartasViradas=[];

	var jogoacabou = document.querySelector("#jogoacabou");

    var imgAcerto = document.querySelector("#imgAcerto");

	for (var i = 0; i < 10; i++) {
		var img = {
			src:"img/"+ i +".jpg",
			id: i%5
		};
		imagens.push(img);
	}

	comecaJogo();
	
	function comecaJogo(){
		acertos = 0 ;
		tempo();
		timer = 30;
		
		cartasViradas = [];
		imagens = embaralhar(imagens);

		var faceFrente = document.getElementsByClassName("front");
		var backFrente = document.getElementsByClassName("back");
		var hiscore = document.getElementById("score");
		var cronometro =document.getElementById("tempo");
		var pontuacao = document.getElementById("pontuacao");
		hiscore.innerHTML="";
		// cronometro.innerHTML="tempo";
		// pontuacao.innerHTML="pontuacao";

		for (var i = 0; i < 10; i++) {
			var card = document.querySelector("#card" + i);
			faceFrente[i].classList.remove("flipped","acertos");
			backFrente[i].classList.remove("flipped","acertos");


			card.style.left = (i === 0 || i ===5) ? 5 + "px" : i % 5 * 165 + 5 +"px";
			card.style.top = i < 5 ? 5 + "px" : 250 + "px";

			card.addEventListener("click",giraCarta,false);

			faceFrente[i].style.background= "url('"+imagens[i].src +"')";
			faceFrente[i].setAttribute("id",imagens[i].id);
		}
		
		jogoacabou.style.zIndex = -2;
		jogoacabou.removeEventListener("click",comecaJogo,false);

			timer_id = setInterval(function(){
			tempo();
			if (acertos == 5) {
				clearInterval(timer_id);
				return;

			}
			if(timer === 0 ){
			document.getElementById("time").innerHTML=timer;	
				jogoAcabou();
				
				return;
			}
			document.getElementById("time").innerHTML=timer;
			console.log(timer);
	},1000);
	}
	function embaralhar(arrayVelho){
		// Math.floor(Math.random()*11);
		var novoArray = [];
		while(novoArray.length !== arrayVelho.length){
			var i = Math.floor(Math.random()*arrayVelho.length);
			if (novoArray.indexOf(arrayVelho[i])<0) {
				novoArray.push(arrayVelho[i]);
			}
		}
		return novoArray;
	}
	function giraCarta(){
		if (cartasViradas.length < 2) {
		var faces = this.getElementsByClassName("face");
		
		if (faces[0].classList.length > 2) {
			return;
		}

		faces[0].classList.toggle("flipped");
		faces[1].classList.toggle("flipped");

		cartasViradas.push(this);

		if (cartasViradas.length === 2 ) {
			if (cartasViradas[0].childNodes[3].id === cartasViradas[1].childNodes[3].id) {
				cartasViradas[0].childNodes[1].classList.toggle("acertos");
				cartasViradas[0].childNodes[3].classList.toggle("acertos");
				cartasViradas[1].childNodes[1].classList.toggle("acertos");
				cartasViradas[1].childNodes[3].classList.toggle("acertos");

				sinalCartaCerta();

				acertos++;

				cartasViradas = [];

				if (acertos === 5) {
					jogoAcabou();
				}
			}
		}
	} else{
		cartasViradas[0].childNodes[1].classList.toggle("flipped");
		cartasViradas[0].childNodes[3].classList.toggle("flipped");
		cartasViradas[1].childNodes[1].classList.toggle("flipped");
		cartasViradas[1].childNodes[3].classList.toggle("flipped");

		cartasViradas = [];
	}	

	}
	
	function jogoAcabou(){
		
		jogoacabou.style.zIndex = 10;
		document.getElementById("score").innerHTML=timer + acertos * 2;
		jogoacabou.addEventListener("click",comecaJogo);
		

	}

	function sinalCartaCerta(){
		imgAcerto.style.zIndex = 1;
		imgAcerto.style.top = 150 + "px";
		imgAcerto.style.opacity = 0 ;

		setInterval(function(){
			imgAcerto.style.zIndex = -1;
			imgAcerto.style.top = 250 + "px";
			imgAcerto.style.opacity = 1 ;

		},1500);

	}
	function tempo(){
		if (timer >= 0) {
			timer = timer -1 ;
			if (timer === 0) {
				
				clearInterval(timer_id);
				
				
				


			}
			
			
		}

	
 }

}());