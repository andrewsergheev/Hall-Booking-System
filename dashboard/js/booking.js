document.getElementById('totalPrice').readOnly = true;
//document.getElementById("totalPrice").value = 0;
//var price = 0;
var price = $("#hall").find(':selected').data('rent');
$("#hall").change(function () {
	price = 0;
	price = $(this).find(':selected').data('rent');
	document.getElementById("start").value = null;
	document.getElementById("end").value = null;
	document.getElementById("totalPrice").value = 0;
	return price;
});

$("#start").change(function () {
document.getElementById("end").value = null;
document.getElementById("totalPrice").value = 0;
	$("#end").change(function () {
		if(price > 0) {
			var startDate = document.getElementById('start').value;
			var dt1 = new Date(startDate);

			var endDate = document.getElementById('end').value;
			var dt2 = new Date(endDate);
			var diff =(dt2.getTime() - dt1.getTime()) / 1000;
			diff /= 60;
			var time = Math.abs(Math.round(diff));
			var total = price * (time/60)
			//alert("You price is " +price + "*" + time + "/60" + "=" + total);
			document.getElementById("totalPrice").value = total;
		}else {
			alert("Choose the hall");
			document.getElementById("start").value = null;
			document.getElementById("end").value = null;
		}

	});
});

function validateForm() {
	var price = document.getElementById("totalPrice").value;
	if(price == null || price == ''|| price == '0') {
		alert("Something went wrong");
		//document.getElementById('bookingForm').reset();
      	return false;
	}

    var today = new Date();
    var th = today.getHours();
    var tm = today.getMinutes();

    var start = document.getElementById("start").value;
    var startDate = new Date(start);
    var sh = startDate.getHours();
    var sm = startDate.getMinutes();

    var end = document.getElementById("end").value;
    var endDate = new Date(end);
    var eh = endDate.getHours();
    var em = endDate.getMinutes();

    if (startDate.setHours(sh, sm) <= today.setHours(th, tm) || startDate.setHours(sh, sm) <= today.setHours(th + 1, tm)) {
        alert("Your Start date is in the past or is less than 1h in advance!");
        document.getElementById("start").value = null;
        return false;
    }
    if (endDate.setHours(eh, em) <= today.setHours(th, tm) || endDate.setHours(eh, em) <= startDate.setHours(sh, sm)) {
		//alert("Your time " + startDate + " and " + endDate + " and today is " + today);
        alert("Your End date is in the past or equal to Start date!");
        document.getElementById("end").value = null;
        return false;
    }
}
