function onButtonClick(){
	var d = new Date();
	var day = d.getDay();
	var minutes = d.getMinutes();

	return day == 25 && minutes == 45;
}