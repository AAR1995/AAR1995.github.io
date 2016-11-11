function onLinkedInButtonClick(){
	var win = window.open("https://www.linkedin.com/in/alfonso-almazan-ruelas-a7b382130?trk=nav_responsive_tab_profile_pic", "_blank");
	if (win) {
		//Browser has allowed it to be opened
		win.focus();
	} else {
		//Browser has blocked it
		alert('Please allow popups for this website');
	}
}

function createEmailForm(){
	document.getElementById("email").style.visibility = "hidden";
	document.getElementById("linked_in").style.visibility = "hidden";

	var form = document.createElement("form");
	
	// Add Email input
	form.append("Email:");
	form.append(document.createElement("br"));
	var email_address = document.createElement("input");
	email_address.type = "text";
	email_address.name = "email"
	form.append(email_address);
	form.append(document.createElement("br"));

	// Add Subject input
	form.append("Subject:");
	form.append(document.createElement("br"));
	var subject = document.createElement("input");
	subject.type = "text";
	subject.name = "subject";
	form.append(subject);
	form.append(document.createElement("br"));

	// Add Message input
	form.append("Message:");
	form.append(document.createElement("br"));
	var message = document.createElement("textarea");
	message.type = "text";
	message.name = "message";
	form.append(message);
	form.append(document.createElement("br"));

	// Add Submit Button
	var submit_btn = document.createElement("input");
	submit_btn.id = "submit_form"
	submit_btn.type = "submit";
	submit_btn.value = "Submit";
	form.append(submit_btn);

	// Add Cancel Button
	var cancel_btn = document.createElement("input");
	cancel_btn.id = "cancel_form"
	cancel_btn.type = "submit";
	cancel_btn.value = "Cancel";
	form.append(cancel_btn);

	document.getElementById('contactMe').append(form);
}