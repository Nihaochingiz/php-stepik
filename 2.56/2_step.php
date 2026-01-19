<?php


function countUniqueChars($str) : int {
    $charCount = count_chars($str, 1);
    return count($charCount);
}

echo(countUniqueChars("hello")); // 4
echo(countUniqueChars("aaa"));   // 1