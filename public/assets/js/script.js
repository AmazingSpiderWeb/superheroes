// these variables directly correspond with the input
// field and button
var submitButton = document.getElementById('submit');
var fnameInput = document.getElementById('fname');
var lnameInput = document.getElementById('lname');
var phoneInput = document.getElementById('phone');
var countryInput = document.getElementById('country');
var emailInput = document.getElementById('email');

var fnameMessage = document.getElementById('fnameMessage');
var lnameMessage = document.getElementById('lnameMessage');
var phoneMessage = document.getElementById('phoneMessage');
var countryMessage = document.getElementById('countryMessage');

var valid = {
	fname: false,
	lname: false,
	phone: false,
	country: false,
	email: false
};


var validate = {
	fname: function(value){
		// pattern to match alphabet and some characters
		// used in names
		var pattern = /^[A-Za-z' -]+$/;
		// the test will equal either true or false
		// depending on if it matches or not.
		return pattern.test(value);
	},

	lname: function(value){
		// pattern to match alphabet and some characters
		// used in names
		var pattern = /^[A-Za-z' -]+$/;
		// the test will equal either true or false
		// depending on if it matches or not.
		return pattern.test(value);
	},

};


// when we click the add to submit button, we are going to
// check if the name is valid.

submitButton.onclick = function(){
	if(valid.fname && valid.lname){
		return true;
	}else{
		return false;
	}
}


// when we tab out (or click somewhere else)
// we do the validation immediately

fnameInput.onkeyup = checkFname;
fnameInput.onblur = checkFname;

function checkFname(){
	// do the validation
	if(validate.fname(fnameInput.value)){
		fnameInput.className = '';
		fnameMessage.innerHTML = '';
		valid.fname = true;
	}else{
		fnameInput.className = 'error';
		fnameMessage.innerHTML = 'invalid name'
		valid.fname = false;
	}
}

lnameInput.onkeyup = checkLname;
lnameInput.onblur = checkLname;

function checkLname(){
	// do the validation
	if(validate.lname(lnameInput.value)){
		lnameInput.className = '';
		lnameMessage.innerHTML = '';
		valid.lname = true;
	}else{
		lnameInput.className = 'error';
		lnameMessage.innerHTML = 'invalid name'
		valid.lname = false;
	}
}