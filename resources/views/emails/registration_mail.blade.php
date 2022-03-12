<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Registration Mail</title>

	<style>
		body{
			background: #EBEEF0;
			margin: 0px;
			padding: 0px;
			font-family: 'Poppins', sans-serif;
		}

		.main_div{
			padding: 10px;
			margin: 10px;
		}

		.first_div{
			border: 1px solid white;
		    width: 500px;
		    margin: 0px auto;
		    height: auto;
		    background: rgba(0, 0, 0, 0.04);
		}

		.img_div{
				height: 260px;
				width: 100%;
				text-align: center;
				background: #E40A2B;
			}

		.img_div img{
				height: auto;
				max-width: 72%;
				margin: 45px;
			}

		.first_inner_div{
			width: 100%;
    		height: auto;
    		text-align: center;
		}

		.first_inner_div h2{
			color: #3e4041;
		}

		.first_inner_div h3{
			font-style: oblique;
			color: #3e4041;
			padding: 10px;
		}

		.first_inner_div h4{
			color: #3e4041;
		}

		.second_div{
			width: auto;
    		height: auto;
		}

		.second_inner_div{
			width: 100%;
    		text-align: center;
		}

		.second_inner_div h4{
			font-style: italic;
			color: #3e4041;
		}

		hr{
			margin: 0 auto;
    		padding: 0 auto;
    		width: 90%;
		}
		span{
			color: #E40A2B;
		}

		@media only screen and (max-width: 600px){	
			.main_div{				
				width: 88%;
			}
			.first_div{								
				width: 100%;
				margin-top: 35px;
    			border-radius: 2px;
			}
			.img_div{
				height: 185px;
			}
		}


	</style>
</head>
<body>	
	<div class="main_div">
		<div class="first_div">
			<div class="img_div">
				<img src="{{ asset('website_images/logo.png')}}">
			</div>
			<div class="first_inner_div">
				<h2>Hello Admin</h2>
				<h3>You have new notification for user registration</h3>
			</div>
			<hr>
			<div class="second_div">
				<div class="second_inner_div">
					<h4>A new user is registered with email <span> {{ $new_user['email'] }}</span></h4>
					<h4>Name is = {{ $new_user['firstname'] }} {{ $new_user['lastname'] }}</h4>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>