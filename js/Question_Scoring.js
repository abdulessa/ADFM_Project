// JavaScript Document

// Datastructure to store scores
var Scores = {
	Question_1: null,
	Question_2: null,
	Question_3: null,
	Question_4: null,
	Question_5: null,
	Question_6: null,
	Question_7: null,
	Question_8: null,
	Question_9: null,
	Question_10: null,
	Question_11: null,
	Question_12: null,
	Question_13: null,
};

// function to handle next button logic and submission to server
function submit_answer(question) {
	switch (question) {
		case 1:
			if (Scores.Question_1 == null) {
				Scores.Question_1 = validate_Q1();
			}
			break;
		case 2:
			if (Scores.Question_2 == null) {
				Scores.Question_2 = validate_Q2();
			}
			break;
		case 3:
			if (Scores.Question_3 == null) {
				Scores.Question_3 = validate_Q3();
			}
			break;
		case 4:
			if (Scores.Question_4 == null) {
				Scores.Question_4 = validate_Q4();
			}
			break;
		case 5:
			if (Scores.Question_5 == null) {
				Scores.Question_5 = validate_Q5();
			}
			break;
		case 6:
			if (Scores.Question_6 == null) {
				Scores.Question_6 = validate_Q6();
			}
			break;
		case 7:
			if (Scores.Question_7 == null) {
				Scores.Question_7 = validate_Q7();
			}
			break;
		case 8:
			if (Scores.Question_8 == null) {
				Scores.Question_8 = validate_Q8();
			}
			break;
		case 9:
			if (Scores.Question_9 == null) {
				Scores.Question_9 = validate_Q9();
			}
			break;
		case 10:
			if (Scores.Question_10 == null) {
				Scores.Question_10 = validate_Q10();
			}
			break;
		case 11:
			if (Scores.Question_11 == null) {
				Scores.Question_11 = validate_Q11();
			}
			break;
		case 12:
			if (Scores.Question_12 == null) {
				Scores.Question_12 = validate_Q12();
			}
			break;
		case 13:
			if (Scores.Question_2 == null) {
				Scores.Question_2 = validate_Q13();
				// submission to DB here TODO:
			}
			break;
		default:
			break;
	}
}

// Question 1

// array to store selected nodes
var selected_nodes = [];

// function to select a circle
function select_circle(circle_number) {
	selected_nodes.push("C-" + circle_number);
	$("#C-" + circle_number).addClass("circle-selected");
}

// functoin to select a triangle
function select_triangle(triangle_number) {
	selected_nodes.push("T-" + triangle_number);
	$("#T-" + triangle_number).addClass("triangle-selected");
}

// function to get the score for question 1 
function validate_Q1() {
	var score = 0;
	if (selected_nodes.length == 7) {
		for (score = 0; score < selected_nodes.length; score++) {
			if (!selected_nodes[score] == [
					"T-4",
					"C-5",
					"T-6",
					"C-7",
					"T-8",
					"C-9",
					"T-10"
				][score]) {
				break;
			}
		}
	}
	return score == 7 ? 1 : 0;
}

// Question 2
function validate_Q2() {
	return $("#Q2_mark")[0].checked ? 1 : 0;
}

//Question 3
function validate_Q3() {
	return $("#Q3_Contour")[0].checked + $("#Q3_Numbers")[0].checked + $("#Q3_Hands")[0].checked;
}

// Question 4
function validate_Q4() {
	return $("#Q4_lion")[0].checked + $("#Q4_elephant")[0].checked + $("#Q4_camel")[0].checked;
}

// Question 5
function validate_Q5() {
	return 0;
}

// Question 6
function validate_Q6() {
	return $("#Q6_forward_order")[0].checked + $("#Q6_backward_order")[0].checked;
}

// Question 7
function validate_Q7() {
	return $("#Q7_mark")[0].checked ? 1 : 0;
}

// Question 8
function validate_Q8() {
	var score = $("#Q8_1stSubstract")[0].checked + $("#Q8_2ndSubstract")[0].checked + $("#Q8_3rdSubstract")[0].checked + $("#Q8_4thSubstract")[0].checked + $("#Q8_5thSubstract")[0].checked;
	if (score > 1) {
		if (score > 3) {
			score = 3;
		} else {
			score = 2;
		}
	}
	return score;
}

// Question 9
function validate_Q9() {
	return $("#Q9_Sentence1")[0].checked + $("#Q9_Sentence2")[0].checked;
}

// Question 10
function validate_Q10() {
	return $("#Q10_mark")[0].checked ? 1 : 0;
}

// Question 11
function validate_Q11() {
	return $("#Q11_1stSimilarity")[0].checked + $("#Q11_2ndSimilarity")[0].checked;
}

// Question 12
function validate_Q12() {
	return $("#Q12_1stWord")[0].checked + $("#Q12_2ndWord")[0].checked + $("#Q12_3rdWord")[0].checked + $("#Q12_4thWord")[0].checked + $("#Q12_5thWord")[0].checked;
}

// Question 13
function validate_Q13() {
	return $("#Q13_date")[0].checked + $("#Q13_month")[0].checked + $("#Q13_year")[0].checked + $("#Q13_day")[0].checked + $("#Q13_place")[0].checked + $("#Q13_country")[0].checked;
}
