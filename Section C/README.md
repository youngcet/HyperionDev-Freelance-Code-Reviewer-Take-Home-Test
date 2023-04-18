
# Setup

## Download and install PHP

### Windows
Visit https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/ and follow the instructions

### Linux
- Open your terminal in Linux

Run the following commands:

    > sudo apt-get update
    > sudo apt-get upgrade
    > sudo apt-get install php

To verify that PHP has been installed, run this command:
    > php --version

This will output something like this showing the version of PHP installed:

```
PHP 8.1.10 (cli) (built: Aug 30 2022 18:05:49) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.1.10, Copyright (c) Zend Technologies
```

### Mac OS
Visit https://www.geeksforgeeks.org/how-to-install-php-on-macos/ and follow the instructions


## Running the script
Once PHP has been installed on the machine,to execute the script, run the commands below:

```
// navigate to the script folder (note: replace this path with your path to the script folder)
cd "/c/xampp/htdocs/HyperionDev-Freelance-Code-Reviewer-Take-Home-Test/Section C"

// execute the script
php option_1.php

// Output:
Zero.
Eleven.
One million, fourty three thousand, two hundred and eighty three.
Ninety trillion, three hundred and seventy six billion, ten thousand and twelve.
```

## Running test cases
To run unit tests, run the command below:

```
// while in the current directory
./vendor/bin/phpunit tests/SayNumberTest.php

// Output:
Zero.
Eleven.
One million, fourty three thousand, two hundred and eighty three.
Ninety trillion, three hundred and seventy six billion, ten thousand and twelve.
PHPUnit 10.1.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.1.10
Configuration: C:\xampp\htdocs\HyperionDev-Freelance-Code-Reviewer-Take-Home-Test\Section C\phpunit.xml.dist        

....                                                                4 / 4 (100%)

Time: 00:00.037, Memory: 8.00 MB

OK (4 tests, 4 assertions)
```

### Adding test cases
To add your own test cases, open this file tests/SayNumberTest.php and add:

```
// add this above testSayNumber() function, you can remove or add to the existing TestWith test cases
#[TestWith(['zero', 0])]

// the TestWith function takes an array as an argument, the first element is the expected results while the second element is the input
// the $this->assertEquals($expected, sayNumber ($num)) calls the sayNumber() function in option_1.php passing the input and the expected value to check against
```

# worst-case space complexity

The function "sayNumber" has a worst-case space complexity of O(log(n)).

The "sayNumber" function takes a number "num" as an argument and transforms it into the matching English word representation. It stores the English word equivalent of each number in an associative array "glossary". To generate the English word representation of the input number, the function uses conditional branching logic to choose which section of the "glossary" array to employ.

The "glossary" associative array uses a constant amount of memory regardless of the input number "num." As a result, the "sayNumber" function's space complexity simply depends on how much memory the recursive function calls consume.

In the worst case, a number that needs the most recursive calls as an input will cause the function to be called recursively. The base-1000 logarithm of a number "n" indicates the maximum number of recursive calls necessary to represent that number in English words. For instance, the number 1,000,000,000,000,000 (one quadrillion), which can be written as 1,000 * 1,000 * 1,000 * 1,000, requires four recursive calls.

Therefore, the worst-case space complexity of the "sayNumber" function is O(log(n)), where "n" is the input number to be converted to its corresponding English word representation.