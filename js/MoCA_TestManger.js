// Manages the question page contents and transition, and connection to server

function setQuestionType(type) {
	$("#navbar_center").html("<h2>" + type + "</h2>");
	console.log("title should be changed to " + type);
}

function setProgrssBar(percentage) {
	$(".progress-bar").css('width', percentage + '%');
}

function setQuestionTitle(title, points) {
	$("#question_title").html("<h4>" + title + ". ( " + points + " pts )</h4>");
}

function setQuestionContents(htmlContents) {
	$("#question_content").html(htmlContents);
}
