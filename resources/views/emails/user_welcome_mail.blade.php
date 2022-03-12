<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Mail</title>
		<style>
			body{
				margin: 0px;
				padding: 0px;
				font-family: 'Poppins', sans-serif;
			}
			.main_div{
				padding: 10px;
			}
			.first_div{
				background: rgba(0, 0, 0, 0.04);
				border: 1px solid white;
				margin: 0 auto;
				width: 500px;
				height: auto;
			}
			.first_inner_div{
				height: 264px;
				width: 100%;
    			text-align: center;
    			background: #E40A2B;
			}
			.first_inner_div img{
				height: auto;
    			max-width: 100%;
    			margin: 75px auto;
    			width: 250px;
    			text-align: center;
			}
			.second_inner_div{
				height: 210px;
				width: 100%;
    			padding: 10px;
			}
			.second_inner_div_h5{
				padding: 0px;
    			color: #3e4041;
			}
			.second_inner_div_h4{
				padding: 10px;
    			color: #3e4041;
    		}
			@media only screen and (max-width: 600px){

				.main_div{
					width: 89%;
					background: #41AAA2;
				}

				.first_div{
					background: #FEFEFE;				
					width: 100%;
					height: auto;
				}

                .first_inner_div img{
                	width: auto;
                }

				.first_inner_div{
    				width: 100%;
    				text-align: center;
    				background: #F6F6F6;
				}
				.second_inner_div{
					width: 100%;
    				height: auto;
				}
				.second_inner_div h4{
					text-align: justify;
					padding: 21px;
				}

				.second_inner_div_h2 h5{
					
				}

				.second_inner_div_h4 h4{

				}


			}
		</style>
</head>
<body class="bg-gray">
	<div class="main_div">
		<div class="first_div">
			<div class="first_inner_div">
				<img src="{{ asset('website_images/logo.png')}}" height="200px" width="500px">
			</div>
			<div class="second_inner_div">
				<h2 class="second_inner_div_h2">Hello {{ $new_user['firstname'] }},</h2>
				<h4 class="second_inner_div_h4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</h4>
			</div>		
		</div>
	</div>
</body>
</html>