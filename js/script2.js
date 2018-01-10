(function(global){

	global.obj = {}

	obj.addEvent = function(){
		var theEvent = document.getElementById("theEvent").value;
		var startdate = document.getElementById("startdate").value;


		
		var ender = document.getElementById("ender").value;
		var time = document.getElementById("time").value;

		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function(){
			console.log(this);
			if (this.readyState == 4 && this.status == 200){
				var data = JSON.parse(this.responseText);

				if(data.status == 1){
					document.getElementById("response").innerHTML = data.message;
					// document.getElementById("response").innerHTML = 'Welcome '+data.addEvent['event'];
				}
			}
		};

		xhttp.open("GET", "php/add.php?theEvent="+theEvent+"&startdate="+startdate+"&ender"+ender+"&time="+time);
		// xhttp.open("POST", "php/backend_start?startdate="+startdate);
		// xhttp.open("POST", "php/backend_end?enddate="+enddate);
		// xhttp.open("POST", "php/backend_time?time="+time);
		xhttp.send();
	}
}(window))