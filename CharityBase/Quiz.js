// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "10px 0px";
    document.getElementById("logo").style.fontSize = "35px";
  } else {
    document.getElementById("navbar").style.padding = "50px 10px";
    document.getElementById("logo").style.fontSize = "50px";
  }
}


function check(){
	document.getElementById("animalQuiz").style.display = "none";
	//hide the questions when user submits
	
	var SizeAnswer = document.animalQuiz.Size.value;
	var EnergyAnswer = document.animalQuiz.Energy.value;
	var ExerciseAnswer = document.animalQuiz.Exercise.value;
	var TimeAnswer = document.animalQuiz.Time.value;

	var MaintenanceAnswer = document.animalQuiz.Maintenance.value;
	var TrainingAnswer = document.animalQuiz.Trainability.value;
	var ProtectionAnswer = document.animalQuiz.Protection.value;

	//Assigning question results from quiz.html to local variables
	//var obj ={Cat:0,Herding:0,Sporting:0, Non_Sporting:0, Working:0, Hounds:0, Terriers:0, Toy:0};
	
	var Cat = 0;
	var Herding = 0;
	var Sporting = 0;
	var Non_Sporting = 0;
	var Working = 0;
	var Hounds = 0;
	var Terriers = 0;	
	var Toy = 0;
	

	//use these to calculate user preference
		
	//seaarch question1, and add the results
	switch(ProtectionAnswer){
		case "Low":
			Cat++;
			Toy++;
			Non_Sporting++;
			break;
		case "Med":
			Sporting++;
			Terriers++;
			break;
		case "High":
			Herding++;
			Working++;
			Hounds++;
			break;
		default:
			break;
	}
	switch(TrainingAnswer){
		case "Low":
			Cat++;
			Toy++;
			break;
		case "Med":
			Non_Sporting++;
			Hounds++;
			Terriers++;
			break;
		case "High":
			Herding++;
			Sporting++;
			Working++;
			break;
		default:
			break;
	}
	switch(MaintenanceAnswer){
		case "Low":
			Cat++;
			Toy++;
			break;
		case "Med":
			Non_Sporting++;
			break;
		case "High":
			Working++;
			Hounds++;
			Terriers++;
			Herding++;
			Sporting++;
			break;
		default:
			break;
	}

	switch(TimeAnswer){
		case "Low":
			Cat++;
			Non_Sporting++;
			Toy++;
			break;
		case "Med":
			Hounds++;
			Terriers++;
			break;
		case "High":
			Working++;
			Herding++;
			Sporting++;
			break;
		default:
			break;
	}
	switch(ExerciseAnswer){
			case "Low":
			Cat++;
			Toy++;
			Non_Sporting++;
			break;
		case "Med":
		
			Terriers++;
			Hounds++;
			break;
		case "High":
		Herding++;
		Sporting++;
		Working++;
		
			break;
		default:
			break;
	}	
	switch(SizeAnswer){
		case "Low":
		Cat++;
		Toy++;
		Terriers++;
		Non_Sporting++;
			break;	
		case "Med":
		Hounds++;
		Herding++;
			break;
		case "High":
		Sporting++;
			Working++;
			break;
		default:
			break;
	}
	
	switch(EnergyAnswer){
		case "Low":
			Cat++;
			break;
		case "Med":
			Toy++;
			Non_Sporting++;
			Hounds++;
			Terriers++;
			break;
		case "High":
			Herding++;
			Sporting++;
			Working++;
			break;
		default:
			break;
	}
	
	
	var Winner = Math.max(parseInt(Cat),parseInt(Herding),parseInt(Sporting),parseInt(Non_Sporting),parseInt(Working),parseInt(Hounds),parseInt(Terriers),parseInt(Toy));
	
	//reveal results screen for whichever animal won/got more points
	if(Winner==Cat){
		document.getElementById("resultCat").style.display = "block";
	}
	if(Winner==Herding){
		document.getElementById("resultHerding").style.display = "block";
	} 
	if(Winner==Sporting){
		document.getElementById("resultSporting").style.display = "block";
	} 
	if(Winner==Non_Sporting){
		document.getElementById("resultNon_Sporting").style.display = "block";
	} 
	if(Winner==Working){
		document.getElementById("resultWorking").style.display = "block";
	} 
	if(Winner==Hounds){
		document.getElementById("resultHounds").style.display = "block";
	} 
	if(Winner==Terriers){
		document.getElementById("resultTerriers").style.display = "block";
	} 
	if(Winner==Toy){
		document.getElementById("resultToy").style.display = "block";
	} 
		
};