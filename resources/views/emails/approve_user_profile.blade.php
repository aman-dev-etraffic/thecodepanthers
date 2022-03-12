<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Approve User Profile</title>
	<style>
		.first_div{
    		width: 60%;
    		margin: auto;
    		background: #E2E5E7;
		}

		.img_div{
			width: 100%;
    		height: 250px;
    		text-align: center;
    		background: #B40132;
		}

		.img_div img{
			width: 50%;
    		max-width: 100%;
    		margin: 54px;
    		align-items: center;
		}

		.second_div{
    		height: 200px;
    		background: #E2E5E7;
		}

		.second_div h2{
			padding: 20px;
		}

		.second_div h3{
			text-align: center;
		}

		@media only screen and (max-width: 600px){
			.d1qgvcyr--phone .i6jjn6{
				background: #E2E5E7;
			}
			.first_div{
				width: 304px;
			}

			.img_div{
				width: 100%;
			}

			.img_div img{
				text-align: center;
			}

			.second_div{
				height: 100px;
			}
			
			.second_div h3{
				text-align: center;
			}
		}

	</style>
</head>
<body>
	<div class="main_div">
		<div class="first_div">
			<div class="img_div">
				<img src="{{ asset('website_images/logo.png') }}">
			</div>
			<div class="second_div">
				<h2>Hello {{ $new_user['firstname'] }}</h2>
				<h3>Your Profile has approved</h3>
			</div>
		</div>
	</div>
</body>
</html>