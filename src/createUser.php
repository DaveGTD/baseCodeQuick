<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Brand</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Other</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Profile</a>
								</li>
								<li>
									<a href="#">Report</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>


      <div class="container-fluid">
      	<div class="row">
      		<div class="col-md-12">
      			<form role="form">
      				<div class="form-group">

      					<label for="input_email">
      						Email address
      					</label>
      					<input type="email" class="form-control" id="input_email" />
      				</div>
      				<div class="form-group">

      					<label for="input_password1">
      						Password
      					</label>
      					<input type="password" class="form-control" id="input_password1" />
      				</div>

              <div class="form-group">

                <label for="input_password2">
                  Retype Password
                </label>
                <input type="password" class="form-control" id="input_password2" />
              </div>

      				<button type="submit" class="btn btn-default">
      					Submit
      				</button>
      			</form>
      		</div>

          <div class="container-fluid">
          	<div class="row">
              <form role="form" action="createUser.php">
            		<div class="col-md-12">

            			<button type="submit" class="btn btn-default">
            				Create
            			</button>
            		</div>
            </form>
          	</div>
          </div>


      	</div>
      </div>




		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
