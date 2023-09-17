<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<style type="text/css">
*{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: 'Lato', sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof p{
	  font-size: 20px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
</style>
<div id="main">
<div class="fof">

        		  <center><img src="{%upload('marrow.png')%}"></center>
        		<center>
              
			<p>Go to app folder create controllers,models and essential startups start build your app from now</p>
		</center>
 </div>
    	
</div>
<footer>
	See documentation from github repository: <a href="https://github.com/PHPMohamedNabil/marrow-framework/">marrow-framework</a>
	<br>
	<br>
</footer>
</body>
</html>