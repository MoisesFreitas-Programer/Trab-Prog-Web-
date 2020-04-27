/*
	FUNDAÇÃO UNIVERSIDADE FEDERAL DE MATO GROSSO DO SUL - UFMS
	FACULDADE DE COMPUTAÇÃO - FACOM
	DISCIPLINA : PROGRAMAÇÃO PARA WEB
	PROFESSOR : HUDSON SILVA BORGES
	ACADÊMICOS : Clara Giovana Lazarini / Frankner Da Silva Soares/ Moisés Freitas Barbosa/ Willian Leite Barbosa Xavier
	PROJETO (TRABALHO) : Trab-Prog-Web-P01-2020-1
	
	Descrição: arquivo para domínio de estilo dinâmico
*/


var STable = {

	stripy: function () {
		var tables = Core.getElementsByClassName("stripy_table");
		
		for ( var i = 0; i < tables.length; i++ )
		{
			// uma tabela pode conter varios corpos
			var tbodys = tables[i].getElementsByTagName("tbody");
			
			for ( var j = 0; j < tbodys.length; j++ )
			{
				var rows = tbodys[j].getElementsByTagName("tr");
				
				// varias linhas
				for ( k = 0; k < rows.length; k += 1 ) {
					
					// faz o icone do mouse ser o indicador de link
					rows[k].style.cursor = "pointer";
					
					// evento quando o mouse passar pela linha
					rows[k].onmouseover = function () { 
						clickeds = Core.getElementsByClassName("clicked");
						if ( clickeds.length ) {
							if ( clickeds[0] != this ) {
								this.className = "alt";
							}
						} else {
							this.className = "alt";
						}
					};
					
					// evento quando o mouse sair da linha
					rows[k].onmouseout  = function () {
						clickeds = Core.getElementsByClassName("clicked");
						if ( clickeds.length ) {
							if ( clickeds[0] == this ) {
								this.className = "clicked";
							} else {
							this.className = "";
							}
						} else {
							this.className = "";
						}
						
					};
					
					// evento quando o usuário clicar na linha
					rows[k].onclick = function () {
						clickeds = Core.getElementsByClassName("clicked");
						if ( clickeds.length ) clickeds[0].className = "";
						
						if ( clickeds[0] != this )
							this.className = "clicked";
					};
				}
			}
		}
	}
};
window.onload = function () {
	STable.stripy();
}
