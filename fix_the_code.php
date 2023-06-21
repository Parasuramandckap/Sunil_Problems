<?php
/*

$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
The output will be:

"yabadabadoo" does not contain "yaba"
Why? How can this code be fixed to work correctly?

ANS:

The problem here is that strpos() returns the starting position index of $str2 in $str1 (if found), otherwise it returns false. So in this example, strpos() returns 0 (which is then coerced to false when referenced in the if statement). That’s why the code doesn’t work properly.

The correct solution would be to explicitly compare the value returned by strpos() to false as follows:

$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2) !== false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";






*?