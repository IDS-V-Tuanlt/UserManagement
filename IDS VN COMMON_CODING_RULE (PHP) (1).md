**IDS VN COMMON\_CODING\_RULE**

Link refer: [https://www.php-fig.org/psr/](https://www.php-fig.org/psr/)

| **No** | **Object** | **Rule** | **Example** |
| --- | --- | --- | --- |
| 1 | Name | Meaningful, correct spelling, content should be easy to image and not redundant | **exportExcel, exportPDF** |
| 2 | Function name | Start with lower case letter | **function**** getProduct**() {} |
| 3 | Class name | - Classes and objects should have noun or noun phrase names - A class name should not be a verb. - Class names MUST be declared in StudlyCaps. - Class constants MUST be declared in all upper case with underscore separators. | - Ex: **Customer, WikiPage, AccJount, and AddressParser** - Avoid words like **Manager, Processor, Data, or Info** in the name of a class |
| 4 | Method Names | - Method names MUST be declared in camelCase.- Methods should have verb or verb phrase names | postPayment, deletePage, or save |
| 5 | Syntax | - UTF 8 should be used as a character code- Make sure to use 4 single-byte spaces and do not use tabs for indent- Letter at the end of line is LF (0x0A) - A line must be maximum 120 characters- The PHP constants true, false, and null MUST be in lower case.- Visibility MUST be declared on all methods.- The keyword elseif SHOULD be used instead of else if so that all control keywords look like single words.- Should use constant or variable in this case | **\&lt;?php** $booleanVariable = true;$stringVariable = &#39;moose&#39;;if ($booleanVariable) { echo &#39;Boolean value is true&#39;; if ($stringVariable === &#39;moose&#39;) { echo &#39;We have encountered a moose&#39;; }} **?\&gt;** |
| 5.1 | Syntax (multi-line) | In cases where you&#39;re using a multi-line function call use the following guidelines:·Opening parenthesis of a multi-line function call must be the last content on the line.·Only one argument is allowed per line in a multi-line function call.·Closing parenthesis of a multi-line function call must be on a line by itself. | **\&lt;?php**** $matches = array\_intersect\_key($this-\&gt;\_listeners,****array\_flip(preg\_grep($matchPattern,****array\_keys($this-\&gt;\_listeners), 0))); ****?\&gt;** Use this instead: **\&lt;?php**** $matches = array\_intersect\_key( **** $this-\&gt;\_listeners, **** array\_flip( **** preg\_grep($matchPattern, array\_keys($this-\&gt;\_listeners), 0) **** )****);****?\&gt;** |
| 6 | Access to Super Globals |

- Do not directly access superglobals (Use filter\_input, filter\_input\_array)- Corresponding type: INPUT\_GET, INPUT\_POST, INPUT\_COOKIE, INPUT\_SERVER or INPUT\_ENV- Using merges POST and GET for $\_REQUEST- Dedicated methods are prepared in general framework. |
 |
| 7 | Operators |

- All binary operators (operators that come between two values), such as+, -, =, !=, ==, \&gt;, etc.should have a space before and after the operator, for readability.- Checks for weak-typed inequality MUST use the != operator. The \&lt;\&gt; operator MUST NOT be used in PHP code. | For example, an assignment should be formatted as $foo = $bar; rather than $foo=$bar;. Unary operators (operators that operate on only one value), such as ++, should not have a space between the operator and the variable or number they are operating on. |
| 7.1 | Comparison | Always try to be as strict as possible. If a non-strict test is deliberate it might be wise to comment it as such to avoid confusing it for a mistake. | For testing if a variable is null, it is recommended to use a strict check: **\&lt;?php**** if ($value === null) { **** // ... ****}****?\&gt; **The value to check against should be placed on the right side:** \&lt;?php ****// not recommended**** if (null === $this-\&gt;foo()) { **** // ... ****}**** // recommended****if ($this-\&gt;foo() === null) {**  **// ...**** } ****?\&gt;** |
| 8 | Casting | Put a space between the (type) and the $variable in a cast | ( **int** ) $mynumber |
| 9 | Function Calls |
Functions should be called with no spaces between the function name, the opening parenthesis, and the first parameter; spaces between commas and each parameter, and no space between the last parameter, the closing parenthesis, and the semicolon. | **\&lt;?php** $var = foo($bar, $bar2, $bar3); **?\&gt;** |
| 9.1 | Method Definition | Parameters with a default value, should be placed last in function definition. | **\&lt;?php** public function someFunction($arg1, $arg2 = &#39;&#39;){ if (expr) { statement; } return $var;} **?\&gt;** |
| 9.2 | abstract, final, and static | When present, the abstract and final declarations MUST precede the visibility declaration.
When present, the static declaration MUST come after the visibility declaration. | **\&lt;?php**** namespace Vendor\Package; ****abstract class ClassName**** { **** protected static $foo; **** abstract protected function zim(); **** final public static function bar() **** { **** // method body **** } ****}****?\&gt;** |
| 10 | String Concatenations | Always use a space between the dot and the concatenated parts to improve readability. |

**\&lt;?php** $string = &#39;Foo&#39; . $bar;$string = $bar . &#39;foo&#39;;$string = bar() . &#39;foo&#39;;$string = &#39;foo&#39; . &#39;bar&#39;; **?\&gt;** |
| 11 | Semicolons | The PHP language requires semicolons at the end of most lines, but allows them to be omitted at the end of code blocks. Drupal coding standards require them, even at the end of code blocks. |

**\&lt;?php**** print **$tax;**?\&gt; **-- YES** \&lt;?php ****print** $tax **?\&gt;** -- NO |
| 12 | Constants |
- Constants should be defined in capital letters- If a constant name consists of multiple words, they should be separated by an underscore character |

**define** (&#39;CONSTANT&#39;, 1); **define** (&#39;LONG\_NAMED\_CONSTANT&#39;, 2); |
| 13 | Including files | When including files with classes or libraries, use only and always the require\_once function. | // wrong = parenthesesrequire\_once(&#39;ClassFileName.php&#39;);require\_once ($class);// good = no parenthesesrequire\_once &#39;ClassFileName.php&#39;;require\_once $class; |
| 14 | Variables | Variable names should be as descriptive as possible, but also as short as possible. Normal variables should start with a lowercase letter, and should be written in camelBack in case of multiple words. Variables containing objects should start with a capital letter, and in some way associate to the class the variable is an object of. |

$user = &#39;John&#39;;$users = **array** (&#39;John&#39;, &#39;Hans&#39;, &#39;Arne&#39;);$Dispatcher = **new**** Dispatcher**(); |
| 15 | Member visibility | Use private and protected keywords for methods and variables. Additionally, protected method or variable names start with a single underscore (&quot;\_&quot;). |

**\&lt;?php**** class ****A** { **protected** $\_iAmAProtectedVariable; **protected**** function ****\_iAmAProtectedMethod** () {/\*...\*/ }}
Private methods or variable names start with double underscore (&quot;\_\_&quot;)
**\&lt;?php**** class ****A** { **private** $\_\_iAmAPrivateVariable; **private**** function ****\_\_iAmAPrivateMethod** () {/\*...\*/ }} |
| 16 | Method Chaining | Method chaining should have multiple methods spread across separate lines, and indented with one tab |

**\&lt;?php** $email-\&gt;from(&#39;foo@example.com&#39;)-\&gt;to(&#39;bar@example.com&#39;)-\&gt;subject(&#39;A great message&#39;)-\&gt;send(); |
| 17 | Control Structures |
- In the control structures there should be 1 (one) space before the first parenthesis and 1 (one) space between the last parenthesis and the opening bracket.- Always use curly brackets in control structures, even if they are not needed. They increase the readability of the code, and they give you fewer logical errors.- Opening curly brackets should be placed on the same line as the control structure. Closing curly brackets should be placed on new lines, and they should have same indentation level as the control structure. The statement included in curly brackets should begin on a new line, and code contained within it should gain a new level of indentation.- Inline assignments should not be used inside of the control structures. |

// wrong = no brackets, badly placed statement **if** (expr) statement;// wrong = no brackets **if** (expr)statement;// good **if** (expr) {statement;}// wrong = inline assignment **if** ($variable = **Class** :: **function** ()) {statement;}// good$variable = **Class** :: **function** (); **if** ($variable) {statement;} |
| 17.1 | if, elseif, else | An if structure looks like the following. Note the placement of parentheses, spaces, and braces; and that else and elseif are on the same line as the closing brace from the earlier body. | \&lt;?phpif ($expr1) { // if body} elseif ($expr2) { // elseif body} else { // else body;} |
| 17.2 | switch, case | A switch structure looks like the following. Note the placement of parentheses, spaces, and braces. The case statement MUST be indented once from switch, and the break keyword (or other terminating keyword) MUST be indented at the same level as the case body. There MUST be a comment such as // no break when fall-through is intentional in a non-empty case body. | \&lt;?phpswitch ($expr) { case 0: echo &#39;First case, with a break&#39;; break; case 1: echo &#39;Second case, which falls through&#39;; // no break case 2: case 3: case 4: echo &#39;Third case, return instead of break&#39;; return; default: echo &#39;Default case&#39;; break;} |
| 17.3 | while, do while | A while statement looks like the following. Note the placement of parentheses, spaces, and braces.
Similarly, a do while statement looks like the following. Note the placement of parentheses, spaces, and braces. | \&lt;?phpwhile ($expr) { // structure body}\&lt;?phpdo { // structure body;} while ($expr); |
| 17.4 | for | A for statement looks like the following. Note the placement of parentheses, spaces, and braces. | \&lt;?phpfor ($i = 0; $i \&lt; 10; $i++) { // for body} |
| 17.5 | foreach | A foreach statement looks like the following. Note the placement of parentheses, spaces, and braces. | \&lt;?phpforeach ($iterable as $key =\&gt; $value) { // foreach body} |
| 17.6 | try, catch | A try catch block looks like the following. Note the placement of parentheses, spaces, and braces. | \&lt;?phptry { // try body} catch (FirstExceptionType $e) { // catch body} catch (OtherExceptionType $e) { // catch body} |
| 18 | Ternary Operator | Ternary operators are permissible when the entire ternary operation fits on one line. Longer ternaries should be split into if else statements. Ternary operators should not ever be nested. Optionally parentheses can be used around the condition check of the ternary for clarity |

// Good, simple and readable$variable = **isset** ($options[&#39;variable&#39;]) ? $options[&#39;variable&#39;] : true;// Nested ternaries are bad$variable = **isset** ($options[&#39;variable&#39;]) ? **isset** ($options[&#39;othervar&#39;]) ? true : false : false; |
| 18.1 | Template Files | In template files developers should use keyword control structures. Keyword control structures are easier to read in complex template files. Control structures can either be contained in a larger PHP block, or in separate PHP tags: | \&lt;?phpif ($isAdmin): echo &#39;\&lt;p\&gt;You are the admin user.\&lt;/p\&gt;&#39;;endif;?\&gt;\&lt;p\&gt;The following is also acceptable:\&lt;/p\&gt;\&lt;?php if ($isAdmin): ?\&gt; \&lt;p\&gt;You are the admin user.\&lt;/p\&gt;\&lt;?php endif; ?\&gt; |
| 19 | Short Echo | The short echo should be used in template files in place of |

// wrong = semicolon, no spaces **\&lt;td\&gt;**** \&lt;? **=$name;**?\&gt; ****\&lt;/td\&gt;** // good = spaces, no semicolon **\&lt;td\&gt;**** \&lt;? **= $name**?\&gt; ****\&lt;/td\&gt;** |
| 20 | Careful when using empty()/isset() | While **empty()** is an easy to use function, it can mask errors and cause unintended effects when &#39;0&#39; and 0 are given. When variables or properties are already defined, the usage of **empty()** is not recommended. When working with variables, it is better to rely on type-coercion to boolean instead of **empty()** |

**function**** manipulate**($var){// Not recommended, $var is already defined in the scope**if**(**empty**($var)) {// ... }// Use boolean type coercion**if**(!$var) {// ... }**if** ($var) {// ... }}
When dealing with defined properties you should favour null checks over empty()/isset() checks:
**class**** Thing **{** private **$property; // Defined** public ****function**** readProperty**() {// Not recommended as the property is defined in the class**if**(!**isset**($this-\&gt;property)) {// ... }// Recommended**if** ($this-\&gt;property === null) { } }}
When working with arrays, it is better to merge in defaults over using empty() checks. By merging in defaults, you can ensure that required keys are defined:
**function**** doWork**(**array**$array){// Merge defaults to remove need for empty checks.$array += [&#39;key&#39; =\&gt; null,];// Not recommended, the key is already set**if**(**isset**($array[&#39;key&#39;])) {// ... }// Recommended**if** ($array[&#39;key&#39;] !== null) {// ... }} |
| 21 | | |


 |
