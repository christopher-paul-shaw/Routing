# Routing
Simple PHP Routing Class

# Initiating
$route = new Routing();

# Usage
There are three route types available;
- get : Uses the $_GET array
- post : Uses the $_POST array
- hoome : Is the default and catch all, should be used last.

# Example
include 'Routing.php';
$route = new Routing();

$route->get('test',funtion(){
	die('Content for ?test here');
});

$route->home(function() {
	die('The default route');
});

