<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
        <script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
        <div class="header center">
            <h1 class="center header">
                Pizza Picker - A topping tester
            </h1>

        </div>
        <div id="container">
            <div class="navbar">
                <div class="navbar-inner">
                    {menubar}
                </div>
            </div>
            <div>
			{content}
            </div>
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
				{ci_version}
            </p>
        </div>
	</body>
</html>