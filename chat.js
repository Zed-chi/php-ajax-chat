function ajax(){
	var req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(req.readyState == 4 && req.status == 200){
			document.getElementById("chat").innerHTML = req.responseText;
		}
	}

	req.open('GET', "chat.php", true);
	req.send();	
}

function send(){

	var name = document.getElementById("nickname");
	var text = document.getElementById("msg");
if(name.value && text.value){	
//xhr
	var xhr = new XMLHttpRequest();
	var body = 'name=' + encodeURIComponent(name.value)+'&msg='+encodeURIComponent(text.value);

	xhr.open("POST", 'post.php', true)
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
	xhr.send(body);

//other stuff
	name.setAttribute("value", name.value);
	name.setAttribute("type", "hidden");

 }		
 document.getElementById("msg").value = "";
}

