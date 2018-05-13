var appPlayfield = null;

$(document).ready(function (){
	let conf = {
		target: "bottom_left"
	};
	
	appPlayfield = new basePlayfield(conf);
});
