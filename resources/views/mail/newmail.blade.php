<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New projects</title>
	<style>
		.text-center{
			text-align: center;
		}
		.out{
			padding:10px 20px;
			background-color:#262626;
			color:#fff;
		}
		p{
			margin:0px 15%;
		}
		a{
			
			color:#262626;
			font-size: 20px;
		}
		.sakri{
			display: none;
		}
	</style>
</head>
<body>
	<div class="text-center">
		<h2>Thanks for signing up</h2> <br>
		<p>If you would like to sign out and not receive information on other projects, you can do so by clicking the button below the text <br><br>
		Best regards, <br> 
		Vuk <br><br>
		<a href="http://127.0.0.1:8000/">Visit website</a>
		</p> <br><br>
		<form action="http://127.0.0.1:8000/deletemail/{{$user['id']}}" method="get">
			@csrf
			
			<input type="number" value="{{$user['id']}}" class="sakri">
			<input type="submit" value="Unsubscribe" class="out">
		</form>
		

	</div>
</body>
</html>