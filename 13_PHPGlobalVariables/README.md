# Note
$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server, therefore there is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.

> 'PHP_SELF'
> The filename of the currently executing script, relative to the document root. For instance, $_SERVER['PHP_SELF'] in a script at the address http://example.com/foo/bar.php would be /foo/bar.php. The __FILE__ constant contains the full path and filename of the current (i.e. included) file. If PHP is running as a command-line processor this variable contains the script name.

> 'argv'
> Array of arguments passed to the script. When the script is run on the command line, this gives C-style access to the command line parameters. When called via the GET method, this will contain the query string.

> 'argc'
> Contains the number of command line parameters passed to the script (if run on the command line).

> 'GATEWAY_INTERFACE'
> What revision of the CGI specification the server is using; e.g. 'CGI/1.1'.

> 'SERVER_ADDR'
> The IP address of the server under which the current script is executing.

> 'SERVER_NAME'
> The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.

> 'SERVER_SOFTWARE'
> Server identification string, given in the headers when responding to requests.

> 'SERVER_PROTOCOL'
> Name and revision of the information protocol via which the page was requested; e.g. 'HTTP/1.0';

> 'REQUEST_METHOD'
> Which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'.

> 'REQUEST_TIME'
> The timestamp of the start of the request.

> 'REQUEST_TIME_FLOAT'
> The timestamp of the start of the request, with microsecond precision.

> 'QUERY_STRING'
> The query string, if any, via which the page was accessed.

> 'DOCUMENT_ROOT'
> The document root directory under which the current script is executing, as defined in the server's configuration file.

> 'HTTPS'
> Set to a non-empty value if the script was queried through the HTTPS protocol.

> 'REMOTE_ADDR'
> The IP address from which the user is viewing the current page.

>'REMOTE_HOST'
> The Host name from which the user is viewing the current page. The reverse dns lookup is based on the REMOTE_ADDR of the user.

> 'REMOTE_PORT'
> The port being used on the user's machine to communicate with the web server.

> 'REMOTE_USER'
> The authenticated user.

> 'REDIRECT_REMOTE_USER'
> The authenticated user if the request is internally redirected.

> 'SCRIPT_FILENAME'
> The absolute pathname of the currently executing script.

> 'SERVER_ADMIN'
> The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file. If the script is running on a virtual host, this will be the value defined for that virtual host.

> 'SERVER_PORT'
> The port on the server machine being used by the web server for communication. For default setups, this will be '80'; using SSL, for instance, will change this to whatever your defined secure HTTP port is.

> 'SERVER_SIGNATURE'
> String containing the server version and virtual host name which are added to server-generated pages, if enabled.

> 'PATH_TRANSLATED'
> Filesystem- (not document root-) based path to the current script, after the server has done any virtual-to-real mapping.

> 'SCRIPT_NAME'
> Contains the current script's path. This is useful for pages which need to point to themselves. The __FILE__ constant contains the full path and filename of the current (i.e. included) file.

> 'REQUEST_URI'
> The URI which was given in order to access this page; for instance, '/index.html'.

> 'PHP_AUTH_DIGEST'
> When doing Digest HTTP authentication this variable is set to the 'Authorization' header sent by the client (which you should then use to make the appropriate validation).

> 'PHP_AUTH_USER'
> When doing HTTP authentication this variable is set to the username provided by the user.

> 'PHP_AUTH_PW'
> When doing HTTP authentication this variable is set to the password provided by the user.

> 'AUTH_TYPE'
> When doing HTTP authentication this variable is set to the authentication type.

> 'PATH_INFO'
> Contains any client-provided pathname information trailing the actual script filename but preceding the query string, if available. For instance, if the current script was accessed via the URI http://www.example.com/php/path_info.php/some/stuff?foo=bar, then $_SERVER['PATH_INFO'] would contain /some/stuff.

> 'ORIG_PATH_INFO'
> Original version of 'PATH_INFO' before processed by PHP.

$_REQUEST is an associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.

> $_REQUEST['name']

$_POST is an associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.

> htmlspecialchars($_POST["name"])

$_GET is an associative array of variables passed to the current script via the URL parameters (aka. query string). Note that the array is not only populated for GET requests, but rather for all requests with a query string.

> sample.php?name=david"
> htmlspecialchars($_GET["name"])

