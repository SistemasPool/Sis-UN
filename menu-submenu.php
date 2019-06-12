<html>
	<head>
		<title>Menu - Bootstrap</title>
		<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/css/tether-theme-arrows-dark.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/css/tether-theme-arrows.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/css/tether-theme-basic.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/css/tether.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
	</head>

		<style>
			.dropdown-submenu {
			    position: relative;
			}

			.dropdown-submenu > .dropdown-menu {
			    top: 0;
			    left: 100%;
			    margin-top: -6px;
			    margin-left: 0;
			    border-radius: 0.25rem;
			}

			.dropdown-submenu:hover > .dropdown-menu {
			    display: block;
			}

			.dropdown-submenu > a::after {
				border-bottom: 0.3em solid transparent;
				border-left-color: inherit;
				border-left-style: solid;
				border-left-width: 0.3em;
				border-top: 0.3em solid transparent;
				content: " ";
				display: block;
				float: right;
				height: 0;
				margin-right: -0.6em;
				margin-top: -0.95em;
				width: 0;
			}

			.dropdown-submenu.pull-left {
			    float: none;
			}

			.dropdown-submenu.pull-left > .dropdown-menu {
			    left: -75%;
			}

			.dropdown-menu .divider {
				background-color: #e5e5e5;
				height: 1px;
				margin: 9px 0;
				overflow: hidden;
			}

		</style>
	</head>
	<body>
<div class="navbar navbar-light bg-faded" role="navigation">
	<a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
        <li class="active nav-item">
			<a class="nav-link" href="#">Home</a>
		</li>
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Dropdown</a>
            <ul class="nav navbar-nav dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li class="divider" role="separator"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
                <li class="divider" role="separator"></li>
                <li><a class="dropdown-item" href="#">One more separated link</a></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-toggle dropdown-item" data-toggle="dropdown" href="#" data-toggle="dropdown">Dropdown</a>
                    <ul class="nav navbar-nav dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle dropdown-item" href="#" data-toggle="dropdown">Dropdown</a>
                            <ul class="nav navbar-nav dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle dropdown-item" href="#" data-toggle="dropdown">Dropdown</a>
                                    <ul class="nav navbar-nav dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider" role="separator"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        <li class="divider" role="separator"></li>
                                        <li><a class="dropdown-item" href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
	</body>
</html>
