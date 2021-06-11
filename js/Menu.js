export class Menu{
	constructor(hamburguerMenu, menu, fechaMenu, [...divsOpacity], posicao, linksfechar){
		this.hamburguerMenu = hamburguerMenu;
		this.menu = $(menu);
		this.fechaMenu = fechaMenu;
		this.divsOpacity = divsOpacity;
		this.posicao = posicao;
		this.qtdDivsOpacity = this.divsOpacity.length;
		this.linksFechar = linksfechar;
		this.verificaTamanhoInicial();
		this.verificaTamanho();
		this.verificaClick();
	}
	
	verificaTamanhoInicial(){
		window.addEventListener('resize', () => {
			const w = window.innerWidth;
			this.verificaTamanho(w);
		})
	}
	
	verificaTamanho(w){
		if(window.innerWidth <= 1024 || w <= 1024){
			document.querySelector('.ul-no-js').style.display = "none";
			this.hamburguerMenu.style.display = "block";
			this.abreMenu();
			this.closeMenu();
		} else if(window.innerWidth > 1024 || w > 1024){
			document.querySelector('.ul-no-js').style.display = "block";
			this.hamburguerMenu.style.display = "none";
		}
	}
	
	verificaClick(){
		var x = 0;
		while(this.linksFechar[x]){
			this.linksFechar[x].addEventListener('click', () => {
				this.menu.fadeOut();
				this.divsOpacity.forEach((el) => {
						el.classList.remove('opacity');
					})
				})
				x++;
			}
		}
	
	abreMenu(){
		this.hamburguerMenu.addEventListener('click', () => {
			this.menu.removeAttr('style').fadeIn();
			this.divsOpacity.forEach((el) => {
				el.classList.add('opacity');
			})
		})
	}
	
	closeMenu(){
		this.fechaMenu.addEventListener('click', () => {
				this.menu.fadeOut();
				this.divsOpacity.forEach((el) => {
					el.classList.remove('opacity');
				})
			})
		}

}