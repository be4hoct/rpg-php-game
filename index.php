<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Test Fight</title>
<style>  
.container{  
text-align: center;  
border: 7px solid red;  
width: 300px;  
height: 200px;  
padding-top: 100px;  
}  
#btn{  
font-size: 25px;  
}  
</style>  
</head>
<body>
<div class="container">  
<form id="attackform" action="/attack.php" method="post">
<button id ="btn" form="attackform" formaction="attack.php" value="Submit"> Attack </button>
<button id ="btn" form="attackform" formaction="attack.php" value="Submit"> Run </button>
</form>
</div>  
</body>
</html>