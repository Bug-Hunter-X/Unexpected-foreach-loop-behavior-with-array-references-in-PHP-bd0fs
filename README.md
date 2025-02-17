# PHP Foreach Loop Gotcha: Pass by Reference vs. Pass by Value

This repository demonstrates a subtle but important difference in how PHP's `foreach` loop handles array references.  Improper handling can lead to unexpected and difficult-to-debug issues. 

The `bug.php` file showcases two similar functions, `foo` and `bar`, that iterate over an array. However, `foo` uses pass-by-reference (`&$value`) while `bar` uses pass-by-value. This difference drastically affects the outcome. 

The `bugSolution.php` file demonstrates the corrected behavior, and explains how to properly handle array modifications within a `foreach` loop to avoid this issue.