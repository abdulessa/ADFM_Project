// Manages the question page contents and transition, and connection to server

var Test_Data = {
	patient_name: "",
	start_time: null,
	end_time: null,
}

// global variable for the current question number
var current_question = 0;

// sets the question type on the top of the page
function setQuestionType(type) {
	$("#navbar_center").html("<h2>" + type + "</h2>");
}

// sets the value of the progress bar
function setProgrssBar(percentage) {
	$(".progress-bar").css('width', percentage + '%');
}

// sets the question title text with the points that are allocated to it
function setQuestionTitle(title, points) {
	$("#question_title").html("<h4>" + title + ". ( " + points + " pts )</h4>");
}

// shows a specific question content, and hides the others
function showQuestionContents(question_number) {
	// hide all the questions
	for (var i = 1; i <= 13; i++) {
		$("#Q" + i + "-Contents").addClass("hidden");
	}
	// show the appropriate question
	$("#Q" + question_number + "-Contents").removeClass("hidden");
}

function submit_to_DB() {
	alert(Test_);
}

// applies certain parameters to the question  
function applyQuestion(type, progress, title, points, question_number) {
	setQuestionType(type);
	setProgrssBar(progress);
	setQuestionTitle(title, points);
	showQuestionContents(question_number);
}

// sets the question according to a certain question number
function setQuestion(question_number) {
	switch (question_number) {
		case 1:
			applyQuestion("VISUOSPATIAL", (question_number / 13) * 100, "Count from 1 to 10 alternating between circles and triangles", 1, question_number);
			break;
		case 2:
			applyQuestion("VISUOSPATIAL", (question_number / 13) * 100, "Draw the cube", 1, question_number);
			break;
		case 3:
			applyQuestion("EXECUTIVE", (question_number / 13) * 100, "Draw CLOCK (Ten past eleven)", 3, question_number);
			break;
		case 4:
			applyQuestion("NAMING", (question_number / 13) * 100, "Name the animals", 3, question_number);
			break;
		case 5:
			applyQuestion("MEMORY", (question_number / 13) * 100, "Read list of words, subject must repeat them. Do 2 trials, even if 1st trial is successful. Do a recall after 5 minutes", 2, question_number);
			break;
		case 6:
			applyQuestion("ATTENTION", (question_number / 13) * 100, "Read list of digits, subject has to repeat in order", 1, question_number);
			break;
		case 7:
			applyQuestion("ATTENTION", (question_number / 13) * 100, "Read list of numbers. The subject must tap with his hand at each number", 1, question_number);
			break;
		case 8:
			applyQuestion("ATTENTION", (question_number / 13) * 100, "Serial 7 subtraction starting at 100", 3, question_number);
			break;
		case 9:
			applyQuestion("LANGUAGE", (question_number / 13) * 100, "Read the sentences, subject should repeat", 2, question_number);
			break;
		case 10:
			applyQuestion("LANGUAGE", (question_number / 13) * 100, "Name as many animals as possible in one minute", 1, question_number);
			break;
		case 11:
			applyQuestion("ABSTRACTION", (question_number / 13) * 100, "Summurize similarity between e.g. banana - orange = fruit", 2, question_number);
			break;
		case 12:
			applyQuestion("DELAYED RECALL", (question_number / 13) * 100, "Subject has to recall words WITH NO CUE", 5, question_number);
			break;
		case 13:
			applyQuestion("ORIENTATION", (question_number / 13) * 100, "What is today's date", 6, question_number);
			break;
		default:
			applyQuestion("test", 10, "test title", 1, 1);
			break;
	}
	current_question = question_number;
}

// Next btn logic
function nextQuestion() {
	submit_answer(current_question);
	if (current_question < 13 && current_question > 0) {
		setQuestion(current_question + 1);
	} else if (current_question >= 13) {
		// submit to server, and load next page
	} else {
		setQuestion(1);
	}
}

// Back btn logic
function backQuestion() {
	if (current_question <= 13 && current_question > 1) {
		setQuestion(current_question - 1);
	} else if (current_question <= 1) {
		setQuestion(1);
	}
}
