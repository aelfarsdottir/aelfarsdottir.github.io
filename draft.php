<?php

$hi = gent5sline();

echo $hi;

function gent5sline()
{
    // Get random int and store inside variable
    $randomint = rand(1, 7);

    $line = 0;
    
    if ($randomint == 1)
    {
        // Call function 5.1
        $line = option5_1();
    }    
    
    if ($randomint == 2)
    {
        // Call function 5.2
        $line = option5_2();
    }    
    
    if ($randomint == 3)
    {
        // Call function 5.3
        $line = option5_3();
    }    
    
    if ($randomint == 4)
    {
        // Call function 5.4
        $line = option5_4();
    }    
    
    if ($randomint == 5)
    {
        // Call function 5.5
        $line = option5_5();
    }    
    
    if ($randomint == 6)
    {
        // Call function 5.6
        $line = option5_6();
    }  
    
    if ($randomint == 7)
    {
        // Call function 5.7
        $line = option5_7();
    }  
    
    return $line;
}

function option5_1()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j2.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/j2.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/n1.txt");
    $word3 = rtrim($word3);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3 . "\n";
    
    return $phrase;
}

function option5_2()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j4.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/n1.txt");
    $word2 = rtrim($word2);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . "\n";
    
    return $phrase;
}

function option5_3()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/b4.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/v1.txt");
    $word2 = rtrim($word2);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . "\n";
    
    return $phrase;
}

function option5_4()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/v3.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/b2.txt");
    $word2 = rtrim($word2);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . "\n";
    
    return $phrase;
}

function option5_5()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j3.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/n2.txt");
    $word2 = rtrim($word2);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . "\n";
    
    return $phrase;
}

function option5_6()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/n1.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/v1.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/b1.txt");
    $word3 = rtrim($word3);
    $word4 = RandomLine("./wordbank/b2.txt");
    $word4 = rtrim($word4);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3 . " " . $word4 . "\n";
    
    return $phrase;
}

function option5_7()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j1.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/n1.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/v1.txt");
    $word3 = rtrim($word3);
    $word4 = RandomLine("./wordbank/b1.txt");
    $word4 = rtrim($word4);
    $word5 = RandomLine("./wordbank/b1.txt");
    $word5 = rtrim($word5);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3 . " " . $word4 . " " . $word5 . "\n";
    
    return $phrase;
}

// function option5_6()
// {
//     // Define $line to store line
//     $phrase = 0;
    
//     $word1 = RandomLine("./wordbank/p4.txt");
//     $word1 = rtrim($word1);
//     $word2 = RandomLine("./wordbank/n1.txt");
//     $word2 = rtrim($word2);
    
//     // Concatenate words into $line
//     $phrase = $word1 . " " . $word2 . "\n";
    
//     return $phrase;
// }

// function option5_7()
// {
//     // Define $line to store line
//     $phrase = 0;
    
//     $word1 = RandomLine("./wordbank/p3.txt");
//     $word1 = rtrim($word1);
//     $word2 = RandomLine("./wordbank/j1.txt");
//     $word2 = rtrim($word2);
//     $word3 = RandomLine("./wordbank/n1.txt");
//     $word3 = rtrim($word3);
    
//     // Concatenate words into $line
//     $phrase = $word1 . " " . $word2 . " " . $word3 . "\n";
    
//     return $phrase;
// }

function RandomLine($fileinput) 
{

    if (file_exists($fileinput))
    {
        $sites = file($fileinput);
        // $string = array_rand($sites, 1);
        $string = $sites[array_rand($sites, 1)];
    }
        
    else 
    {
        $string = "Error";
    }
    
    return $string;
}   

?>
