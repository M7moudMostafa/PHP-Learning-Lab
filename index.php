<?php
/*
========================================================
  File Name: index.php
  Description: This is a simple PHP page that demonstrates:
    - Multi-line comments
    - UTF-8 encoding header
    - Short echo tag usage
    - Basic output using PHP inside HTML
  Author: Mahmoud Mostafa
  Date: 2025-07-06
========================================================
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo 'UTF-8'; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "My First PHP Page" ?></title>
  </head>
  <body>
    <div><?= "We Love" ?></div>
    <div><?= "Elzero Channel" ?></div>
  </body>
</html>

<?php
/*
========================================================
  File Name: index.php
  Description:
	Use comments on each of the following lines to prevent the code from running.
	You must use a different type of comment for each line.
  Author: Mahmoud Mostafa
  Date: 2025-07-06
========================================================
*/

// echo 'Prevent Me From Running Please';
/* echo 'Prevent Me From Running Please'; */
# echo 'Prevent Me From Running Please';
?>

<?php
/*
========================================================
  File Name: index.php
  Description:
	Correct the following comment to make it appropriate.
		// My Application
		// Version 1.0
		// Created By Elzero
  Author: Mahmoud Mostafa
  Date: 2025-07-06
========================================================
*/

// Fix code 

/*
	My Application
	Version 1.0
	Created By Elzero
*/
?>

<?php
/*
========================================================
  File Name: index.php
  Description:
	Which of the following comments are correct and which are incorrect?
  Author: Mahmoud Mostafa
  Date: 2025-07-06
========================================================
*/

	// ## First Comment      => Cprrect
	# // # iohifdjggh        => Correct
	/* /* /* Third Comment */  //=> InCorrect
	////// Fourth Comment    => Correct
?>

<!-- ====================================== Assignments from 06 to 12 ========================================= -->

<?php
/*
========================================================
  Assignment 01
========================================================
1. You have the code below.
2. You are NOT allowed to:
   - Modify the numbers.
   - Change the positions of the numbers.
3. Use what you have learned in PHP to:
   - Make the final result equal to: 50
   - Make sure the data type is: Integer
4. Output:
   - Line 1: Print the number 50
   - Line 2: Print the word "Integer"
========================================================
*/
	// echo 15.2 + 14.7 + (10.5 + 10.5); // 50
	// echo 15.2 + 14.7 + (10.5 + 10.5); // Integer

	// Solution 
	echo (int) (15.2 + 14.7 + (10.5 + 10.5));
	echo "<br>";
	echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5)));
?>

<?php
/*
========================================================
  Assignment 02
========================================================
1. You have the number: 100
2. Use **two different methods** to print its data type
   - The result can be: `int` or `integer` (both are acceptable)
3. There is a **third method** you can search for on your own
   - This is optional and for extra learning
========================================================
*/

$number = 100;

// Method One
echo "<br>";
echo "Assignment 02";
echo "<br>";
echo gettype($number);
// Method Two
echo "<br>";
echo var_dump($number);
// Method Three => Optional
echo "<br>";
echo get_debug_type($number);
?>

<?php
/*
========================================================
  Assignment 03
========================================================
1. Replace the question marks (???) with appropriate code.
2. Your goal is to make the output match the required result shown below.
3. You are NOT allowed to use:
   - Heredoc syntax
   - Nowdoc syntax
========================================================
*/

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo "<br />";
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\""
?>

<?php
/*
========================================================
  Assignment 04
========================================================
1. You have the code below.
2. It contains the character `\n`, which represents a new line.
3. However, all the words are currently printed on the same line.
4. Your task:
   - Modify the line so that **each word appears on a separate line**
     when printed.
========================================================
*/
echo "<br />";
echo "<br />";
echo "We \n Love \n Elzero \n Web \n School";
echo "<br />";
echo "<pre>";
echo <<<'TEXT'
We
Love
Elzero
Web
School
TEXT;
echo "</pre>";
echo "<br />";
?>

<?php
/*
========================================================
  Assignment 05 — Challenge
========================================================
🎯 Task:
- Print the lines below exactly as shown.
- Each sentence must appear on a separate line.
- All symbols and punctuation must be preserved.

❌ Rules:
- DO NOT use the backslash `\` at all.
- DO NOT use HTML tags like `<br>`, `<br />`, etc.

📌 Hint:
- Find another way to break lines in PHP output
  without using `\n` or HTML.

// Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
========================================================
*/

echo "<pre />";
echo <<<'TEXT'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
TEXT;
echo "<pre />";
?>

<?php
/*
========================================================
  Assignment 06
========================================================
🎯 Task:
1. You have the code below (not shown here).
2. The code contains a **syntax or logical error** — you must:
   ✅ First: **Fix the error**.
   ✅ Then: **Remove exactly 2 characters only** from the code.
3. After doing this, the code should produce the required output
   (which will be provided below the code).

❗ Rules:
- Do not add anything new.
- Only **2 characters can be removed** after fixing the error.

🔧 Hint:
- Think carefully about what characters can be removed
  to change behavior without breaking the syntax.

	$something = "Programming";

	echo <<<'code'
	Hello \PHP\
	We Love $something
			code;

	// Needed Output
	Hello \PHP\ We Love Programming
========================================================
*/

$something = "Programming";
echo <<<'code'
	Hello \PHP\ We Love $something
	code;
?>

<?php
/*
========================================================
  Assignment 07
========================================================
🎯 Task:
1. You have the code below.
2. You are NOT allowed to modify the sentence or its data type at all.
   - This means: Do not change the string or convert it directly.
3. Use what you have learned to:
   ✅ Make the **first `echo` statement** output the number: `1`
   ✅ Make the **second `echo` statement** output the word: `integer`

❗ Rules:
- No editing of the original sentence value.
- Use casting, comparison, or other PHP features as needed.

echo "Hello PHP";
echo '<br>';
echo "Hello PHP";

// Needed Output
1
integer
========================================================
*/
echo '<br>';
echo "Hello PHP" == true;
echo '<br>';
echo gettype((int) "Hello PHP");
?>

<?php
/*
========================================================
  Assignment 08
========================================================
🎯 Task:
- You are given a specific `Output`.
- Your job is to:
  ✅ Declare the array with correct nested structure.
  ✅ Print it using `print_r()` so it exactly matches the expected format.

📌 Expected Output:
Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
========================================================
*/
print_r(["FrontEnd" => [
	"0" => "HTML",
	"1" => "CSS",
	"js" => [
		"Vuejs" => [2 => "v2", 3 => "v3"],
		"Reactjs",
		"Svelte"
	]
], "BackEnd" => [
	"PHP",
	"MySQL",
	"Security"
],
"Git",
"Github",
"Testing" => ["Unit Testing", "End To End", "Integration"]]);
?>

<?php
/*
========================================================
  Assignment 10
========================================================
🎯 Task:
You have the following code that contains a complete page.
Use what you have learned about variables so that we can 
easily change the sentence "Elzero Courses" in the future.
========================================================
*/
?>

<?php $title = "Elzero Courses" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $title ?>">
    <title>Welcome To <?= $title ?></title>
  </head>
  <body>
    <h1><?= $title ?></h1>
    <p>Here In <?= $title ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $title ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?= $title ?></footer>
  </body>
</html>

<?php
/*
========================================================
  Assignment 11
========================================================
🎯 Task:
You have the following code that contains two variables.

✅ Requirement:
Print the word "Web" using **five different methods** based on what you’ve learned so far.

❗ Rules:
- Use only the **echo** statement for all five methods.
- Each method must produce the word "Web".

========================================================
*/

$name = "elzero";
$$name = "Web";

echo $$name;
echo "<br>";
echo $elzero;
echo "<br>";
echo ${$name};
echo "<br>";
echo "${'elzero'}";
echo "<br>";
echo (string) $elzero;
echo "<br>";

?>

<?php
/*
========================================================
  Assignment 12
========================================================
🎯 Task:
You have the following code.

❓ How can you make the value of the variable $b equal to 100  
   without modifying the values of the variables 100 or 200?

❗ Rules:
- Do NOT change the values 100 or 200 directly.

$a = 200;
$b = $a;
$a = 100;

echo $b; // 100
========================================================
*/

$a = 200;
$b = &$a;
$a = 100;

echo $b;
?>

<?php 
/*
========================================================
  Assignment 13
========================================================
🎯 Task:
Use Predefined Variables to print the following values:

1️⃣ First line: Document Root  
2️⃣ Second line: Server Name  
3️⃣ Third line: System Root  
4️⃣ Fourth line: OpenSSL Configuration

========================================================
*/

echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["SystemRoot"];
echo "<br>";
echo $_SERVER["OPENSSL_CONF"];
?>

<?php 
/*
========================================================
  Assignment 14
========================================================
🎯 Task:
Create a Multiple Lines Comment.
Inside it, write 10 reserved keywords in PHP that  
cannot be used as names for variables, functions, classes, etc.

- class
- function
- if
- else
- echo
- return
- while
- foreach
- break
- switch
========================================================
*/
?>

<?php 
/*
========================================================
  Assignment 15
========================================================
🎯 Task:
1. On the first line, write code that prints the **line number** where the code is written.
2. On the second line, print the **file name** where this code is written.
3. On the third line, print the **folder (directory) name** that contains the file.
========================================================
*/
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
?>

<?php
/*
========================================================
  Assignment 16
========================================================
🎯 Task:
You have the following variable with:
- A value of "10"
- A type of String
- It contains a numeric value inside the string

✅ Your goal is:
1. Print the number as an Integer
2. On the next line, print its type to confirm it's an Integer

🔁 Repeat this task in 3 different ways.

🚀 Bonus Challenge:
If you like to explore and go beyond the course,
try doing the same task using 2 additional methods
to make a total of **5 different solutions**.

❗ Rules:
- You must not change the original value of the variable
- Use PHP features to perform the required type conversion and verification
========================================================
*/

$a = "10";

echo "<br />";
echo (int) $a;
echo "<br />";
echo gettype((int) $a);
echo "<br />";
echo intval($a);
echo "<br />";
echo gettype(intval($a));
echo "<br />";
echo +$a;
echo "<br />";
echo gettype(+$a);
echo "<br />";
echo $a * 1;
echo "<br />";
echo gettype($a * 1);
echo "<br />";
settype($a, "integer");
echo $a;
echo "<br />";
echo gettype($a);
?>

<?php
/*
========================================================
  Assignment 17
========================================================
🎯 Task:
Replace the question mark (?) with **one** of the **Comparison Operators** 
so that the result is always **true**.

❗ Rules:
- You are NOT allowed to use the operator more than once.
- The expression must always evaluate to true.

========================================================
*/
$a = 10;
$b = 20;
$c = 15;

echo "<br />";
var_dump($a < $b); // True
echo "<br />";
var_dump($c > $a); // True
echo "<br />";
var_dump($a && $b); // True
echo "<br />";
var_dump($a || $b); // True
echo "<br />";
var_dump($a <= $c); // True
echo "<br />";
var_dump($a != $c); // True
echo "<br />";
var_dump(gettype($a) === gettype($b)); // True
echo "<br />";
var_dump(gettype($a) == gettype($b)); // True
echo "<br />";
var_dump(gettype((float) $a) and gettype($b)); // True
?>

<?php
/*
========================================================
  Assignment 18
========================================================
🎯 Task:
Use the following variables and apply what you've learned previously  
to get the output: -1 as an Integer.

❗ Rules:
- You are NOT allowed to modify the numbers directly.

✅ Required Output:
-1

========================================================
*/

$a = 10;
$b = 20;

echo $a <=> $b;
?>

<?php
/*
========================================================
  Assignment 19
========================================================
🎯 Task:
You are given the following variable.

Your goal is to print the values as shown in the example output.

💡 In the designated area, write your code to produce the correct output.

❗ Rules:
- You are NOT allowed to change the value of the variable.
- You are NOT allowed to manually write any numbers.
========================================================
*/

$points = 10;

$points++;
$points++;
$points++;

echo $points; // 13

// Write Your Code Here
$points--;
$points--;
$points--;
$points--;
$points--;

echo "<br />";
echo $points; // 8;
?>

<?php
/*
========================================================
  Assignment 20
========================================================
🎯 Task:
You are given the following variables, each containing a word  
that together form the name: "Elzero Web School".

Your goal is to create the variable `$d` that holds the full name,  
with spaces between the words.

✅ Requirements:
- Use **concatenation** and everything you’ve learned so far.
- Do NOT change the values of the variables.
- You must complete the task in **4 different ways**.

========================================================
*/

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";
echo $d;
echo "<br />";

// Method Two
$d = $a . " " . $b . " " . $c;
echo $d;
echo "<br />";

// Method Three
$d = "{$a} {$b} {$c}";
echo $d;
echo "<br />";

// Method Four
$d = sprintf("%s %s %s", $a, $b, $c);
echo $d;
?>

<?php
/*
========================================================
  Assignment 21
========================================================
🎯 Task:
All of the following code samples contain errors.

✅ Your goal is to suppress the error output and instead show a custom message:  
"Custom Error"

❗ Rules:
- Do NOT fix the actual errors.
- Only prevent PHP from displaying the default error message.
- Display "Custom Error" instead.

💡 Hint: Use error handling techniques such as custom error handlers, try/catch (if applicable), or the error control operator (@).

========================================================
*/
// Code 1
// $a = @$b or die("variable Not Found");
// echo "<br />";

// Code 2
// $f = @file("Not_A_File") or die("File Not Exist");
// echo "<br />";

// Code 3
(@include("Not_A_File")) or die("Include File Not Found");
?>

<?php
/*
========================================================
  Assignment 22
========================================================
🎯 Task:
You are given the variables below.

✅ Your goal is to write a condition that checks the following **in a single if statement**:
1. The variable `$b` is greater than `$a`.
2. The variable `$a` is identical to (equal and same type as) `$c`.
3. The sum of `$a` and `$c` is identical to `$b`.

📌 If all the above conditions are true, print the word: `Yes`.

========================================================
*/
$a = 100;
$b = 200;
$c = 100;

if($b > $a && $a === $c && ($a + $c === $b)) {
  echo "Yes";
}
?>

<?php
/*
========================================================
  Assignment 23
========================================================
🎯 Task:
You are given the following variables below.  
These variables may have different values across multiple test cases.

✅ Your goal is to write conditional logic that does the following:

1. If variable $a is greater than $b → print: “A Is Larger Than B”
2. If variable $a is greater than $c → print: “A Is Larger Than C”
3. If $a is **not greater than either** $b or $c → print:  
   “A Is Not Larger Than B Or C”

🧪 Test cases will change the values of $a, $b, and $c —  
   your logic must work for all of them.

========================================================
*/
// Test Case 1
// $a = 100;
// $b = 200;
// $c = 300;

// if($a < $b || $a < $c) {
//   echo "A Is Not Larger Than B Or C";
// }

// Test Case 2
// $a = 200;
// $b = 100;
// $c = 300;

// if($a > $b) {
//   echo "A Is Larger Than B";
// }

// Test Case 3
// $a = 200;
// $b = 200;
// $c = 100;

// if($a > $c) {
//   echo "A Is Larger Than c";
// }
?>

<?php
/*
========================================================
  Assignment 24
========================================================
🎯 Task:
You are given a form that submits data to the **same page**.

✅ Your task is to:
1. Check if the request method is POST (not GET).
2. If it's POST, print:
   → "Hello" followed by the submitted username.

3. You are also given an array of admin usernames.
4. Add a condition **inside the POST check** to determine whether
   the submitted username exists in the admin array.

5. If it is an admin name, print:
   → "This Username {Username} Is Admin"

❗ Notes:
- Do not print anything if the request is GET.
- Use built-in PHP functions and good practices.

========================================================
*/

$admins = ["Osama", "Ahmed", "Sayed"];

if($_SERVER["REQUEST_METHOD"] === "POST") {
  echo "The Request Method Is Post And Username Is " . $_POST["user"] . "<br />";
  if(in_array($_POST["user"], $admins)) {
    echo "This Username {$_POST['user']} Is Admin";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
  </form>
</body>
</html>

<?php
/*
========================================================
  Assignment 25
========================================================
🎯 Challenge Task:

You are given a set of conditional statements.  
Your goal is to simplify them using the **Ternary Operator**.

✅ Requirements:
- Rewrite the conditions using the ternary operator.
- The result must be written in **a single line**.
- Output should remain correct.
========================================================
*/

$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));
?>

<?php
/*
========================================================
  Assignment 26
========================================================
🎯 Task:
You are given multiple `if` conditions.

✅ Your goal is to:
- Combine all the conditions into **a single line**.
- Use logical operators (e.g., `&&`, `||`) to join them.
- Output the appropriate message if all conditions are true.

❗ Rules:
- Only one line of code is allowed.
- No multiple `if` statements.

========================================================
*/

$name = "Osama";
$age = 40;
$country = "Egypt";

($age > 18) && print("The Age Is Good To Go<br>");
(gettype($name) === "string") && print("The Name Is Good To Go<br>");
($country === "Egypt") && print("The Country Is Good To Go<br>");
?>

<?php
/*
========================================================
  Assignment 27
========================================================
🎯 Task:
You are given a set of conditions written using `if` or `else if`.

✅ Your task is to:
- Recreate the same logic using a `switch` statement instead.
- Ensure the same outputs are printed based on the condition value.

❗ Notes:
- Each case in the `switch` must represent one condition.
- Use `default` for the fallback result.

========================================================
*/

$genre = "Hack And Slash";

switch($genre) {
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS":
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
    echo "I Recommend Megaman Games";
    break;
  case "Puzzle":
    echo "I Recommend Megaman Games";
    break;
  default: 
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
?>

<?php
/*
========================================================
  Assignment 28
========================================================
🎯 Task:
You are given two numeric variables and one variable representing a mathematical operator.

✅ The operator can be one of the following:
  +  → addition  
  -  → subtraction  
  *  → multiplication  
  /  → division

✅ Your goal:
- Perform the corresponding operation between the two numbers.
- If the operator is **not one of the 4**, print: "Unknown Operation".
- If the operator is `/` (division), print:
   1. The integer result (no decimals)
   2. The remainder on a new line (i.e., using the modulus `%`)

🧪 Test Cases:
$op = "+"  → Output: result of addition  
$op = "/"  → Output: division result on line 1, remainder on line 2  
$op = "#"  → Output: "Unknown Operation"

========================================================
*/

$num_one = 23;
$num_two = 5;
$op = "/";

if($op === "+") {
  echo $num_one + $num_two;
} else if($op === "-") {
  echo $num_one - $num_two;
} else if($op === "/") {
  echo (int)($num_one / $num_two);
  echo "<br / >";
  echo $num_one % $num_two;
} else if($op === "*") {
  echo $num_one * $num_two;
} else {
  echo "Unknown Operation";
}
?>

<?php
/*
========================================================
  Assignment 29
========================================================
🎯 Task:
You are given a block of code written using a `switch` statement.

✅ Your task is to:
- Recreate the exact same logic using `if`, `elseif`, and `else` statements.

❗ Notes:
- The output should be identical.
- Only the structure (control flow) changes — from `switch` to `if`.

========================================================
*/

$day = "Sat";

if($day === "Sat" || $day === "Sun" || $day === "Mon") {
  echo "We Are Open All The Day";
} else if ($day === "Tue" || $day === "Wed") {
  echo "We Are Open From 08:12";
} else if ($day === "Thu" || $day === "Fri") {
  echo "We Are Closed";
} else {
  echo "Unknown Day";
}
?>