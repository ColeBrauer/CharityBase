function check(){
	document.getElementById("animalQuiz").style.display = "none";
	//hide the questions when user submits
	
	var question1 = document.animalQuiz.Q1.value;
	var question2 = document.animalQuiz.Q2.value;
	//Assigning question results from quiz.html to local variables
	
	var DogAnswers = 0;
	var CatAnswers = 0;
	//use these to calculate user preference
		
	//seaarch question1, and add the results	
	switch(question1){
		case "cat":
			CatAnswers++;
			break;
		case "dog":
			DogAnswers++;
			break;
		default:
			break;
	}
	
	switch(question2){
		case "cat":
			CatAnswers++;
			break;
		case "dog":
			DogAnswers++;
			break;
		default:
			break;
	}
	
	//reveal results screen for whichever animal won/got more points
	if(CatAnswers>DogAnswers){
		document.getElementById("resultcat").style.display = "block";
	}
	if(DogAnswers>CatAnswers){
		document.getElementById("resultdog").style.display = "block";
	} 
	
	
	
	
};