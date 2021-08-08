<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<style type="text/css">
		.temp{
			width: 70%;
			margin: 1% auto;
			padding: 20px;
			font-family: verdana;
		}
		.temp h1{
			text-align: center;
			text-transform: capitalize;
			margin-button: 3%;
		}
		.temp input{
			display: block;
			width: 60%;
			margin: 0 auto;
			height: 60px;
			border: 1px solid #ddd;
			border-radius: 3px;
			font-size: 20px;
			padding: 1px 7px;
			text-transform: capitalize;
		}
		#content{
			width: 60%;
			margin: 0 auto;
			/*border: 1px solid #ddd;
			border-radius: 3px;*/
			padding: 1px 7px;
			text-transform: capitalize;
			color: #ccc;
			font-size: 18px;
		}
	</style>
</head>
<body>
      <div class="temp">
      	<h1>SEARCH</h1>
      	<input type="text" onkeyup="imu(this.value)" placeholder="search"><br>
      	<div id="content">
      		Result:
      	</div>

      	<script type="text/javascript">
      		let content = document.getElementById('content');

      		function imu(x){
      			if(x.length == 0){
      				content.innerHTML = 'empty!!'
      			}
      			else{
      				var XML = new XMLHttpRequest();
      				XML.onreadystatechange = function(){
                       
                         if(XML.readyState == 4 && XML.status == 200){
                         	content.innerHTML = XML.responseText;

                         }
      				};
      				XML.open('GET','search.php?data='$x, true);
      				XML.send();
      			}
      		}
      	</script>
      </div>
</body>
</html>