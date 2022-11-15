# php_simple_superglobals

This library contains a set of functions to simplify and quicken the process of receiving $_SESSION, $_GET and $_POST variables in your PHP page. We have 6 functions for each super global, (3 for receiving *integer* and 3 for receiving *varchar* variables) making it a total of 18 easy to remember functions.

In each case, we examine whether the variable isset() or empty() and **what each function does with the outcomes, is explained by the function name**.
- "force" means we continue only if the var is set and not empty
- "empty" means we continue if the var is empty but it must be set
- "allow" means we continue no matter what and give the var the value of an empty string: <code>""</code>

Additionally, for integer variables we also filter them to remove any non integer characters to protect ourselves against <a href="https://owasp.org/www-community/attacks/xss/">XSS<a/>.
To achieve this, we use: <code>$safe_int = filter_var($unsafe_int, FILTER_SANITIZE_NUMBER_INT);</code>

In your own implementation, make sure to protect yourself from XSS when it comes to varchar variables too.
- For HTML:  <code>$safe_varchar = htmlspecialchars($unsafe_varchar, ENT_QUOTES | ENT_HTML5);</code>
- For MySQL: <code>$safe_varchar = $mysqli_object->real_escape_string($unsafe_varchar);</code>

Enjoy!

~ Constantine
