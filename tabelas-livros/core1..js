/*
	FUNDAÇÃO UNIVERSIDADE FEDERAL DE MATO GROSSO DO SUL - UFMS
	FACULDADE DE COMPUTAÇÃO - FACOM
	DISCIPLINA : PROGRAMAÇÃO PARA WEB
	PROFESSOR : HUDSON SILVA BORGES
	ACADÊMICOS : Clara Giovana Lazarini / Frankner Da Silva Soares/ Moisés Freitas Barbosa/ Willian Leite Barbosa Xavier
	PROJETO (TRABALHO) : Trab-Prog-Web-P01-2020-1
	
	Descrição: arquivo para domínio de estilo com as telas produzidas
*/



Core = {};

// getElementsByClassName
Core.getElementsByClassName = function(theClass) {
	
	// lista de todos os elementos no DOM
	var elementArray = [];
	
	if ( typeof document.all != "undefined" ) {
	
		// Internet Explorer (Não sabemos quem usa)
		elementArray = document.all;
	} else {
		elementArray = document.getElementsByTagName("*");
	}
	
	var pattern = new RegExp ( "(^| )" + theClass + "( |$)" );
	var matchedArray = [];
	
	for ( var i = 0; i < elementArray.length; i++ ) {
		if ( pattern.test(elementArray[i].className)) {
			matchedArray[matchedArray.length] = elementArray[i];
		}
	}
	
	return matchedArray;
};

