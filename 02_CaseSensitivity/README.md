# Note
PHP are insensitive towards its keywords, functions, classes and user-defined functions.

Below statements will all print out "Hello World!" in a separate line.

> echo "Hello World!&lt;br/&gt;";<br/>
> ecHO "Hello World!&lt;br/&gt;";<br/>
> ECHO "Hello World!&lt;br/&gt;";<br/>
> eChO "Hello World!&lt;br/&gt;";

On the other hand, PHP is case sensitive towards variable names.

Below variables will be treated as two completely different variables:

> $name <br/>
> $Name