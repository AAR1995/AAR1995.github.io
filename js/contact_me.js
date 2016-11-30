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

function displayContactForm(){
	if (document.getElementById("contactMeForm").style.visibility === "visible"){
		document.getElementById("contactMeForm").style.visibility = "collapse";
		return;
	}
	document.getElementById("contactMeForm").style.visibility = "visible";
}

function cancelContactForm(){
	document.getElementById("contactMeForm").style.visibility = "collapse";
}