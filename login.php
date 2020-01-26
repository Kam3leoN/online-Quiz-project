<!Docktype>
<html>
<head>
<title> </title>
<link rel="stylesheet" type="text/css" href="Bootstrap.css">
<style>
.div1 { border:0px solid white;  
	background-color:#e0e0e0;
	
	 width:400px;
	 height:500px;
	 margin: 55px 150px 50px 150px;
	 box-shadow:0 8px 16px 0px rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	 }

.div2 { 
border:2px solid none;
background-color:#e0e0e0;
text-align:center;
border-radius:20px;
	color:white;
	font-size:30px;
	margin:5px 0px 0px 0px;
	padding:5px 5px;
	}

body{ background-color:#aabbcc;
background-repeat:no-repeat;
background-image:url('galaxy.jpeg');
background-size:cover;

}

.onclick{ background-color:green;
		color:white;
		margin-top:-5px;
		}
	
	
.div3{
	width:370px;
	height:450px;
	border:0px solid black;
	margin:10px;
	}
	
	

form {border: 0px solid #f1f1f1;}


.div4 { border:0px solid white;  
	background-color:#e0e0e0;	 width:400px;
	 height:500px;
	 margin: -550px 150px 50px 750px;
	 box-shadow:0 8px 16px 0px rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	 }
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


button:hover {
    opacity: 0.8;
}


.button1 { 
 		-webkit-transition-duration:0.2s;
 		border:0px solid white;
 		border-width:normal;
		color:white;
		text-align:center;
		float:left;
		padding:0px;
		margin:20px 0px 10px 35px;
		text-decoration:none;
		font-size:20px;
		background-color:#e0e0e0;
		}
     
.button1:hover { background-color:#696969;
 				color:white;
 			}
 			
 			
.button2 { 
 		-webkit-transition-duration:0.2s;
 		border:0px solid white;
 		border-width:normal;
		color:white;
		text-align:center;
		float:left;
		padding:10px 15px;
		margin:20px 0px 10px 100px;
		text-decoration:none;
		font-size:20px;
		background-color:#a0a0a0;
		}
     
.button2:hover { background-color:#696969;
 				color:white;
 			}



.container {

    padding: 16px;
}

</style>
</head>
<body>


<div class="div1">


<div class="div2">Sign In</div>
	<div class="div3">

<form action="registration.php" method="post">  
    
			<label><b>Username:</b></label>
    
			<input type="text" placeholder="Enter Username" name="user_name" required>
    
    
			<label><b>Email:</b></label>
    
			<input type="text" placeholder="Email " name="email_name" required>
    
     
			<label><b>Password:</b></label>
    
			<input type="password" placeholder="Enter Password " name="password_name" required>

    
			<label><b>Country:</b></label>
    
			<input type="text" placeholder="Country" name="country_name" required>
        
    
			<button type="submit" class="button">Signin</button> 
</form>		
</div>

</div>
<div class="div4">


<div class="div2">Login</div>
	<div class="div3">



		<form action="validation.php" method="post">  
    
			<label><b>Username:</b></label>
    
			<input type="text" placeholder="Enter Username" name="user_name" required>
    
    
			<label><b>Email:</b></label>
    
			<input type="text" placeholder="Email " name="email_name" required>
    
     
			<label><b>Password:</b></label>
    
			<input type="password" placeholder="Enter Password " name="password_name" required>

    
			<label><b>Country:</b></label>
    
			<input type="text" placeholder="Country" name="country_name" required>
        
    
			<button type="submit" class="button">Login</button>
			</form>		
</div>
</div>
</body>
</html>