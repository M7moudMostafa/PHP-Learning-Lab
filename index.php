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