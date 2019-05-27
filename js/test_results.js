// JavaScript Document

var tests = [];

function add_test(number, name, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Total, Dur) {
	var test = {
		number: number,
		name: name,
		Q1: Q1,
		Q2: Q2,
		Q3: Q3,
		Q4: Q4,
		Q5: Q5,
		Q6: Q6,
		Q7: Q7,
		Q8: Q8,
		Q9: Q9,
		Q10: Q10,
		Q11: Q11,
		Q12: Q12,
		Q13: Q13,
		Total: Total,
		Dur: Dur,
	};
	tests.push(test);
}

function fetch_test_list() {
	for (var i = 0; i < tests.length; i++) {
		var tr = "        <tr>\
          <td>" + tests[i].number + "</td>\
          <td>" + tests[i].name + "</td>\<tr>\
          <td>" + tests[i].Q1 + "</td>\
          <td>" + tests[i].Q2 + "</td><tr>\
          <td>" + tests[i].Q3 + "</td>\
          <td>" + tests[i].Q4 + "</td><tr>\
          <td>" + tests[i].Q5 + "</td>\
          <td>" + tests[i].Q6 + "</td><tr>\
          <td>" + tests[i].Q7 + "</td>\
          <td>" + tests[i].Q8 + "</td><tr>\
          <td>" + tests[i].Q9 + "</td>\
          <td>" + tests[i].Q10 + "</td><tr>\
          <td>" + tests[i].Q11 + "</td>\
          <td>" + tests[i].Q12 + "</td><tr>\
          <td>" + tests[i].Q13 + "</td>\
          <td>" + tests[i].Total + "</td>\
		<td>" + tests[i].Dur + "</td>";
		$("#paitients_list").append(tr);
	}
}