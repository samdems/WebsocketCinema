function main(){

	//create a new WebSocket object.
	var wsUri = "ws://" + window.location.host + ":9000";
	websocket = new WebSocket(wsUri); 
	
	websocket.onopen = function(ev) { // connection is open 
		log('connection'); //notify user
			var msg = {
	message: "/connection",
	name: '<?php echo $_GET["un"]; ?>',
	color : '<?php echo $colours[$user_colour]; ?>',
	channel : '<?php echo $_GET["channel"]; ?>'
	};
	//convert and send data to server
	websocket.send(JSON.stringify(msg));
	}

	$('#send-btn').click(function(){ //use clicks message send button	
		var mymessage = $('#message').val(); //get message text
		var myname = $('#name').val(); //get user name
		
		if(mymessage == ""){ //emtpy message?
			alert("Enter Some message Please!");
			return;
		}

		//prepare json data
		var msg = {
		message: mymessage,
		name: '<?php echo $_GET["un"]; ?>',
		color : '<?php echo $colours[$user_colour]; ?>',
		channel : '<?php echo $_GET["channel"]; ?>'
		};
		//convert and send data to server
		websocket.send(JSON.stringify(msg));
	});
	
	//#### Message received from server?
	websocket.onmessage = function(ev) {
		var msg = JSON.parse(ev.data); //PHP sends Json data
		var type = msg.type; //message type
		var umsg = msg.message; //message text
		var uname = msg.name; //user name
		var ucolor = msg.color; //color
		var channel = msg.channel; //channel name

		if(type == 'usermsg') 
		{

  				
  			}
		}
		log(umsg)
		
	};
	
	websocket.onerror	= function(ev){$('#message_box').append("Error Occurred - "+ev.data+"<a onclick='main();' class='pull-right'>reconnect?</a></div>");}; 
	websocket.onclose 	= function(ev){log("Error Occurred")}; 

}


$(document).ready(function(){
main();
});