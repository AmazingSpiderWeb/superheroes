// these variables directly correspond with the input
// field and button
var submitButton = document.getElementById('submit1');
var qtyInput = document.getElementById('quantity');

var qtyMessage = document.getElementById('quantity');

var valid = {
	quantity: false
};


var validate = {
	quantity: function(value){
		// this pattern matches digits only
		var pattern = /^[0-9]{1,3}$/;
		// the test will equal either true or false
		// depending on if it matches or not.
		return pattern.test(value);
	}
};


// when we click the add to cart button, we are going to
// check if the quantity is valid.

submitButton.onclick = function(){
	if(valid.quantity){
		return true;
	}else{
		return false;
	}
}


// when we click add to cart
// we do the validation immediately

qtyInput.onclick = checkQuantity;

function checkQuantity(){
	// do the validation
	if(validate.quantity(qtyInput.value)){
		qtyInput.className = '';
		qtyMessage.innerHTML = '';
		valid.quantity = true;
	}else{
		qtyInput.className = 'error';
		qtyMessage.innerHTML = 'The quantity can only have digits'
		valid.quantity = false;
	}
}