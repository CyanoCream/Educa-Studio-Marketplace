<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<style>
		.main-content {
			width: 50%;
			border-radius: 20px;
			box-shadow: 0 5px 5px rgba(0, 0, 0, .4);
			margin: 5em auto;
			display: flex;
		}

		.company__info {
			background-color: #008080;
			border-top-left-radius: 20px;
			border-bottom-left-radius: 20px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			color: #fff;
		}

		.fa-android {
			font-size: 3em;
		}

		@media screen and (max-width: 640px) {
			.main-content {
				width: 90%;
			}

			.company__info {
				display: none;
			}

			.login_form {
				border-top-left-radius: 20px;
				border-bottom-left-radius: 20px;
			}
		}

		@media screen and (min-width: 642px) and (max-width:800px) {
			.main-content {
				width: 70%;
			}
		}

		.row>h2 {
			color: #008080;
		}

		.login_form {
			background-color: #fff;
			border-top-right-radius: 20px;
			border-bottom-right-radius: 20px;
			border-top: 1px solid #ccc;
			border-right: 1px solid #ccc;
		}

		form {
			padding: 0 2em;
		}

		.form__input {
			width: 100%;
			border: 0px solid transparent;
			border-radius: 0;
			border-bottom: 1px solid #aaa;
			padding: 1em .5em .5em;
			padding-left: 2em;
			outline: none;
			margin: 1.5em auto;
			transition: all .5s ease;
		}

		.form__input:focus {
			border-bottom-color: #008080;
			box-shadow: 0 0 5px rgba(0, 80, 80, .4);
			border-radius: 4px;
		}

		.btn {
			transition: all .5s ease;
			width: 70% !important;
			border-radius: 30px;
			color: #008080;
			font-weight: 600;
			background-color: #fff;
			border: 1px solid #008080;
			margin-top: 1.5em;
			margin-bottom: 1em;
		}

		.btn:hover,
		.btn:focus {
			background-color: #008080;
			color: #fff;
		}
	</style>
</head>

<body>

	<div class="modal fade text-center" style="top:40% !importan; left:none !importan;" id="exampleModal" tabindex="-1"
		role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" style="border-radius: 20px; background-color:transparent;">
				<div class="modal-body text-center">
					<div style="padding-left: 25%; padding-right:25%; top:40%;">
						<h4 style="color: #fff;">Apakah anda yakin ingin logout?</h4>
						<form action="{{ route ('logout')}}" method="post">
							{{ csrf_field() }}

							<button class="btn" type="submit">Logout</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>