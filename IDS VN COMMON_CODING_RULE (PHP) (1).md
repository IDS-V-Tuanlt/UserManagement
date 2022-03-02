﻿**IDS VN COMMON\_CODING\_RULE**

Link refer: <https://www.php-fig.org/psr/>


|**No**|**Object**|**Rule**|**Example**|
| :-: | :-: | :-: | :-: |
|1|Name|Meaningful, correct spelling, content should be easy to image and not redundant |**exportExcel, exportPDF**|
|2|Function name|Start with lower case letter|**function** **getProduct**() {}|
|3|Class name|<p>- Classes and objects should have noun or noun phrase names </p><p>- A class name should not be a verb. </p><p>- Class names MUST be declared in StudlyCaps. </p><p>- Class constants MUST be declared in all upper case with underscore separators.</p>|<p>- Ex: **Customer, WikiPage, AccJount, and AddressParser**</p><p>- Avoid words like **Manager, Processor, Data, or Info** in the name of a class</p>|
|4|Method Names|<p>- Method names MUST be declared in camelCase.</p><p>- Methods should have verb or verb phrase names</p>|postPayment, deletePage, or save|
|5|Syntax|<p>- UTF 8 should be used as a character code</p><p>- Make sure to use 4 single-byte spaces and do not use tabs for indent</p><p>- Letter at the end of line is LF (0x0A) </p><p>- A line must be maximum 120 characters</p><p>- The PHP constants true, false, and null MUST be in lower case.</p><p>- Visibility MUST be declared on all methods.</p><p>- The keyword elseif SHOULD be used instead of else if so that all control keywords look like single words.</p><p>- Should use constant or variable in this case</p>|<p>**<?php**</p><p>$booleanVariable = true;</p><p>$stringVariable = 'moose';</p><p>if ($booleanVariable) {</p><p>`	`echo 'Boolean value is true';</p><p>`	`if ($stringVariable === 'moose') {</p><p>`    	`echo 'We have encountered a moose';</p><p>`	`}</p><p>}</p><p>**?>**</p>|
|5.1|Syntax (multi-line)|<p>In cases where you’re using a multi-line function call use the following guidelines:</p><p>·         Opening parenthesis of a multi-line function call must be the last content on the line.</p><p>·         Only one argument is allowed per line in a multi-line function call.</p><p>·         Closing parenthesis of a multi-line function call must be on a line by itself.</p>|<p>**<?php**</p><p>**$matches = array\_intersect\_key($this->\_listeners,**</p><p>`                `**array\_flip(preg\_grep($matchPattern,**</p><p>`                    `**array\_keys($this->\_listeners), 0)));**</p><p>**?>**</p><p>Use this instead:</p><p>**<?php**</p><p>**$matches = array\_intersect\_key(**</p><p>`	`**$this->\_listeners,**</p><p>`	`**array\_flip(**</p><p>`    	`**preg\_grep($matchPattern, array\_keys($this->\_listeners), 0)**</p><p>`	`**)**</p><p>**);**</p><p>**?>**</p>|
|6|Access to Super Globals|<p></p><p>- Do not directly access superglobals (Use filter\_input, filter\_input\_array)</p><p>- Corresponding type: INPUT\_GET, INPUT\_POST, INPUT\_COOKIE, INPUT\_SERVER or INPUT\_ENV</p><p>- Using merges POST and GET for $\_REQUEST</p><p>- Dedicated methods are prepared in general framework.</p>||
|7|Operators|<p></p><p>- All binary operators (operators that come between two values), such as</p><p>` `+, -, =, !=, ==, >, etc.</p><p>should have a space before and after the operator, for readability.</p><p>- Checks for weak-typed inequality MUST use the != operator. The <> operator MUST NOT be used in PHP code.</p>|<p>For example, an assignment should be formatted as $foo = $bar; rather than $foo=$bar;. </p><p>Unary operators (operators that operate on only one value), such as ++, should not have a space between the operator and the variable or number they are operating on.</p>|
|7.1|Comparison|Always try to be as strict as possible. If a non-strict test is deliberate it might be wise to comment it as such to avoid confusing it for a mistake.|<p>For testing if a variable is null, it is recommended to use a strict check:</p><p>**<?php**</p><p>**if ($value === null) {**</p><p>`	`**// ...**</p><p>**}**</p><p>**?>**</p><p>The value to check against should be placed on the right side:</p><p>**<?php**</p><p>**// not recommended**</p><p>**if (null === $this->foo()) {**</p><p>`	`**// ...**</p><p>**}**</p><p>** </p><p>**// recommended**</p><p>**if ($this->foo() === null) {**</p><p>`	`**// ...**</p><p>**}**</p><p>**?>**</p><p> </p>|
|8|Casting|Put a space between the (type) and the $variable in a cast|(**int**) $mynumber|
|9|Function Calls|<p></p><p>Functions should be called with no spaces between the function name, the opening parenthesis, and the first parameter; </p><p>spaces between commas and each parameter, and no space between the last parameter, the closing parenthesis, and the semicolon.</p>|<p>**<?php**</p><p>$var = foo($bar, $bar2, $bar3);</p><p>**?>**</p>|
|9.1|Method Definition|Parameters with a default value, should be placed last in function definition.|<p>**<?php**</p><p>public function someFunction($arg1, $arg2 = '')</p><p>{</p><p>`	`if (expr) {</p><p>`    	`statement;</p><p>`	`}</p><p> </p><p>`	`return $var;</p><p>}</p><p>**?>**</p>|
|9.2|abstract, final, and static|<p>When present, the abstract and final declarations MUST precede the visibility declaration.</p><p> </p><p>When present, the static declaration MUST come after the visibility declaration.</p>|<p>**<?php**</p><p>**namespace Vendor\Package;**</p><p>** </p><p>**abstract class ClassName**</p><p>**{**</p><p>`	`**protected static $foo;**</p><p>** </p><p>`	`**abstract protected function zim();**</p><p>** </p><p>`	`**final public static function bar()**</p><p>`	`**{**</p><p>`    	`**// method body**</p><p>`	`**}**</p><p>**}**</p><p>**?>**</p>|
|10|String Concatenations|Always use a space between the dot and the concatenated parts to improve readability.|<p></p><p></p><p>**<?php**</p><p>`  `$string = 'Foo' . $bar;</p><p>`  `$string = $bar . 'foo';</p><p>`  `$string = bar() . 'foo';</p><p>`  `$string = 'foo' . 'bar';</p><p>**?>**</p>|
|11|Semicolons|The PHP language requires semicolons at the end of most lines, but allows them to be omitted at the end of code blocks. Drupal coding standards require them, even at the end of code blocks.|<p></p><p></p><p>**<?php** **print** $tax; **?>** -- YES</p><p>**<?php** **print** $tax **?>** -- NO</p>|
|12|Constants|<p></p><p>- Constants should be defined in capital letters</p><p>- If a constant name consists of multiple words, they should be separated by an underscore character</p>|<p></p><p></p><p>**define**('CONSTANT', 1);</p><p>**define**('LONG\_NAMED\_CONSTANT', 2);</p>|
|13|Including files|When including files with classes or libraries, use only and always the require\_once function.|<p>// wrong = parentheses</p><p>require\_once('ClassFileName.php');</p><p>require\_once ($class);</p><p> </p><p>// good = no parentheses</p><p>require\_once 'ClassFileName.php';</p><p>require\_once $class;</p>|
|14|Variables|Variable names should be as descriptive as possible, but also as short as possible. Normal variables should start with a lowercase letter, and should be written in camelBack in case of multiple words. Variables containing objects should start with a capital letter, and in some way associate to the class the variable is an object of.|<p></p><p></p><p>$user = 'John';</p><p>$users = **array**('John', 'Hans', 'Arne');</p><p> </p><p>$Dispatcher = **new** **Dispatcher**();</p>|
|15|Member visibility|Use private and protected keywords for methods and variables. Additionally, protected method or variable names start with a single underscore ("\_").|<p></p><p></p><p>**<?php**</p><p>**class** **A** {</p><p>`	`**protected** $\_iAmAProtectedVariable;</p><p> </p><p>`	`**protected** **function** **\_iAmAProtectedMethod**() {</p><p>`   	`/\*...\*/</p><p>`	`}</p><p>}</p><p></p><p>Private methods or variable names start with double underscore ("\_\_")</p><p></p><p>**<?php**</p><p>**class** **A** {</p><p>`	`**private** $\_\_iAmAPrivateVariable;</p><p> </p><p>`	`**private** **function** **\_\_iAmAPrivateMethod**() {</p><p>`    	`/\*...\*/</p><p>`	`}</p><p>}</p>|
|16|Method Chaining|Method chaining should have multiple methods spread across separate lines, and indented with one tab|<p></p><p></p><p>**<?php**</p><p>$email->from('foo@example.com')</p><p>`    `->to('bar@example.com')</p><p>`    `->subject('A great message')</p><p>`    `->send();</p>|
|17|Control Structures|<p></p><p>- In the control structures there should be 1 (one) space before the first parenthesis and 1 (one) space between the last parenthesis and the opening bracket.</p><p>- Always use curly brackets in control structures, even if they are not needed. They increase the readability of the code, and they give you fewer logical errors.</p><p>- Opening curly brackets should be placed on the same line as the control structure. Closing curly brackets should be placed on new lines, and they should have same indentation level as the control structure. The statement included in curly brackets should begin on a new line, and code contained within it should gain a new level of indentation.</p><p>- Inline assignments should not be used inside of the control structures.</p>|<p></p><p></p><p>// wrong = no brackets, badly placed statement</p><p>**if** (expr) statement;</p><p> </p><p>// wrong = no brackets</p><p>**if** (expr)</p><p>`    `statement;</p><p> </p><p>// good</p><p>**if** (expr) {</p><p>`    `statement;</p><p>}</p><p> </p><p>// wrong = inline assignment</p><p>**if** ($variable = **Class**::**function**()) {</p><p>`    `statement;</p><p>}</p><p> </p><p>// good</p><p>$variable = **Class**::**function**();</p><p>**if** ($variable) {</p><p>`    `statement;</p><p>}</p>|
|17.1|if, elseif, else|An if structure looks like the following. Note the placement of parentheses, spaces, and braces; and that else and elseif are on the same line as the closing brace from the earlier body.|<p><?php</p><p>if ($expr1) {</p><p>`	`// if body</p><p>} elseif ($expr2) {</p><p>`	`// elseif body</p><p>} else {</p><p>`	`// else body;</p><p>}</p><p> </p>|
|17.2|switch, case|A switch structure looks like the following. Note the placement of parentheses, spaces, and braces. The case statement MUST be indented once from switch, and the break keyword (or other terminating keyword) MUST be indented at the same level as the case body. There MUST be a comment such as // no break when fall-through is intentional in a non-empty case body.|<p><?php</p><p>switch ($expr) {</p><p>`	`case 0:</p><p>`    	`echo 'First case, with a break';</p><p>`    	`break;</p><p>`	`case 1:</p><p>`    	`echo 'Second case, which falls through';</p><p>`    	`// no break</p><p>`	`case 2:</p><p>`	`case 3:</p><p>`	`case 4:</p><p>`    	`echo 'Third case, return instead of break';</p><p>`    	`return;</p><p>`	`default:</p><p>`    	`echo 'Default case';</p><p>`    	`break;</p><p>}</p>|
|17.3|while, do while|<p>A while statement looks like the following. Note the placement of parentheses, spaces, and braces.</p><p> </p><p>Similarly, a do while statement looks like the following. Note the placement of parentheses, spaces, and braces.</p>|<p><?php</p><p>while ($expr) {</p><p>`	`// structure body</p><p>}</p><p> </p><p><?php</p><p>do {</p><p>`	`// structure body;</p><p>} while ($expr);</p><p> </p><p> </p>|
|17.4|for|A for statement looks like the following. Note the placement of parentheses, spaces, and braces.|<p><?php</p><p>for ($i = 0; $i < 10; $i++) {</p><p>`	`// for body</p><p>}</p>|
|17.5|foreach|A foreach statement looks like the following. Note the placement of parentheses, spaces, and braces.|<p><?php</p><p>foreach ($iterable as $key => $value) {</p><p>`	`// foreach body</p><p>}</p>|
|17.6|try, catch|A try catch block looks like the following. Note the placement of parentheses, spaces, and braces.|<p><?php</p><p>try {</p><p>`	`// try body</p><p>} catch (FirstExceptionType $e) {</p><p>`	`// catch body</p><p>} catch (OtherExceptionType $e) {</p><p>`	`// catch body</p><p>}</p>|
|18|Ternary Operator|Ternary operators are permissible when the entire ternary operation fits on one line. Longer ternaries should be split into if else statements. Ternary operators should not ever be nested. Optionally parentheses can be used around the condition check of the ternary for clarity|<p></p><p></p><p>// Good, simple and readable</p><p>$variable = **isset**($options['variable']) ? $options['variable'] : true;</p><p> </p><p>// Nested ternaries are bad</p><p>$variable = **isset**($options['variable']) ? **isset**($options['othervar']) ? true : false : false;</p>|
|18.1|Template Files|In template files developers should use keyword control structures. Keyword control structures are easier to read in complex template files. Control structures can either be contained in a larger PHP block, or in separate PHP tags:|<p> </p><p><?php</p><p>if ($isAdmin):</p><p>`	`echo '<p>You are the admin user.</p>';</p><p>endif;</p><p>?></p><p><p>The following is also acceptable:</p></p><p><?php if ($isAdmin): ?></p><p>`	`<p>You are the admin user.</p></p><p><?php endif; ?></p>|
|19|Short Echo|The short echo should be used in template files in place of|<p></p><p></p><p>// wrong = semicolon, no spaces</p><p>**<td><?**=$name;**?></td>**</p><p> </p><p>// good = spaces, no semicolon</p><p>**<td><?**= $name **?></td>**</p>|
|20|Careful when using empty()/isset()|While **empty()** is an easy to use function, it can mask errors and cause unintended effects when '0' and 0 are given. When variables or properties are already defined, the usage of **empty()** is not recommended. When working with variables, it is better to rely on type-coercion to boolean instead of **empty()**|<p></p><p></p><p>**function** **manipulate**($var)</p><p>{</p><p>`	`// Not recommended, $var is already defined in the scope</p><p>`	`**if** (**empty**($var)) {</p><p>`    	`// ...</p><p>`	`}</p><p> </p><p>`	`// Use boolean type coercion</p><p>`	`**if** (!$var) {</p><p>`    	`// ...</p><p>`	`}</p><p>`	`**if** ($var) {</p><p>`    	`// ...</p><p>`	`}</p><p>}</p><p></p><p>When dealing with defined properties you should favour null checks over empty()/isset() checks:</p><p></p><p>**class** **Thing**</p><p>{</p><p>`	`**private** $property; // Defined</p><p> </p><p>`	`**public** **function** **readProperty**()</p><p>`	`{</p><p>`    	`// Not recommended as the property is defined in the class</p><p>`    	`**if** (!**isset**($this->property)) {</p><p>`            `// ...</p><p>`    	`}</p><p>`    	`// Recommended</p><p>`    	`**if** ($this->property === null) {</p><p> </p><p>`    	`}</p><p>`	`}</p><p>}</p><p></p><p>When working with arrays, it is better to merge in defaults over using empty() checks. By merging in defaults, you can ensure that required keys are defined:</p><p></p><p>**function** **doWork**(**array** $array)</p><p>{</p><p>`	`// Merge defaults to remove need for empty checks.</p><p>`	`$array += [</p><p>`    	`'key' => null,</p><p>`	`];</p><p> </p><p>`	`// Not recommended, the key is already set</p><p>`	`**if** (**isset**($array['key'])) {</p><p>`    	`// ...</p><p>`	`}</p><p> </p><p>`	`// Recommended</p><p>`	`**if** ($array['key'] !== null) {</p><p>`    	`// ...</p><p>`	`}</p><p>}</p>|
|21| | |<p> </p><p> </p><p> </p><p> </p><p> </p><p> </p><p> </p><p> </p><p> </p><p> </p>|

