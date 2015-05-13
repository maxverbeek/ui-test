<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Grades</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="main-header">
		<nav>
			<div class="icons center">
				<div class="icon dashboard arrow">Dashboard</div>
				<div class="icon grades">Grades</div>
				<div class="icon inbox">Inbox</div>
				<div class="icon profile">Profile</div>
				<div class="icon settings">Settings</div>
			</div>
		</nav>
	</header>

	<div class="content center">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro sed, sunt nam sapiente voluptatum quidem, magnam impedit, unde aut numquam, eius ab. Eius, optio autem est velit debitis nesciunt illo.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro sed, sunt nam sapiente voluptatum quidem, magnam impedit, unde aut numquam, eius ab. Eius, optio autem est velit debitis nesciunt illo.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro sed, sunt nam sapiente voluptatum quidem, magnam impedit, unde aut numquam, eius ab. Eius, optio autem est velit debitis nesciunt illo.</p>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		$(function ()
		{
			var x, y;

			var mlg = $('#jajaja');

			var colors = ['deeppink', 'hotpink', 'purple', 'violet', 'deeppink', 'deeppink'];

			$(document).on('mousemove', function (e)
			{
				x = e.pageX;
				y = e.pageY;
			});

			var stars = [];

			var range = 50;
			setInterval(function ()
			{
				if (stars.length > 10)
				{
					var remove = stars.shift();
					remove.parentElement.removeChild(remove);
				}

				var color = colors[Math.floor(Math.random() * colors.length)];
				var width = 50;
				var height = 50;
				var top = (Math.random() - 0.5) * 50 + y - 0.5 * height;
				var left = (Math.random() - 0.5) * 50 + x - 0.5 * width;
				var img = $('<img class="kutster" src="img/kutsterren/'+ color +'.svg" style="position: fixed; top: '+ top +'px; left: '+ left +'px;" width="'+width+'px" height="'+height+'px" title="jajajaja">').get(0);

			stars.push(img);
			document.body.appendChild(img);
			}, 25);
		});
	</script>
	</script>
</body>
</html>