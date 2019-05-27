// JavaScript Document

var patients = [];

function add_patient(number, name) {
	var patient = {
		number: number,
		name: name
	};
	patients.push(patient);
}

function fetch_patient_list() {
	for (var i = 0; i < patients.length; i++) {
		var tr = "        <tr>\
          <td>" + patients[i].number + "</td>\
          <td>" + patients[i].name + "</td>\
          <td>\
<button type=\"button\" class=\"btn btn-primary\" onClick=\"start_assessment(\'" + patients[i].name + "\')\">Assess</button></td>\
        </tr>";
		$("#paitients_list").append(tr);
	}
}

function start_assessment(patient_name) {
	window.name = patient_name;
	window.location.href = "MainMoCAPage-PartB.html";
}
