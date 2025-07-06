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
