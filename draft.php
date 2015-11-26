<?php

    $line1 = gent5sline();
    //add a puctuation
    $punc = rtrim(RandomLine("./wordbank/punc.txt"));
    $firstline = $line1.$punc."\n";
    
    $line2 = gent7sline();
    $punc = rtrim(RandomLine("./wordbank/punc.txt"));
    $secondline = $line2.$punc."\n";
    
    $line3 = gent5sline();
    // add a terminating punctuation
    $puncf = rtrim(RandomLine("./wordbank/puncf.txt"));
    $thirdline = $line3.$puncf."\n";
    
    echo $haiku= $firstline.$secondline.$thirdline;

//echo $haiku = $firstline.$secondline.$thirdline;
    //echo $haiku = $firstline.$thirdline;


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



function gent7sline()
{
    // Get random int and store inside variable
    $randomint = rand(1, 9);

    $line = 0;
    
    if ($randomint == 1)
    {
        // Call function 7.1
        $line = option7_1();
    }    
    
    if ($randomint == 2)
    {
        // Call function 7.1
        $line = option7_2();
    }    
    
    if ($randomint == 3)
    {
        // Call function 7.3
        $line = option7_3();
    }    
    
    if ($randomint == 4)
    {
        // Call function 7.4
        $line = option7_4();
    }    
    
    if ($randomint == 5)
    {
        // Call function 7.5
        $line = option7_5();
    }    
    
    if ($randomint == 6)
    {
        // Call function 7.6
        $line = option7_6();
    }  
    
    if ($randomint == 7)
    {
        // Call function 7.7
        $line = option7_7();
    }  
    
    if ($randomint == 8)
    {
        // Call function 7.8
        $line = option7_8();
    }  
    
    if ($randomint == 9)
    {
        // Call function 7.9
        $line = option7_9();
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
    $phrase = $word1 . " " . $word2 . " " . $word3;
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
    $phrase = $word1 . " " . $word2;
    
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
    $phrase = $word1 . " " . $word2;
    
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
    $phrase = $word1 . " " . $word2;
    
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
    $phrase = $word1 . " " . $word2;
    
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
    $phrase = $word1 . " " . $word2 . " " . $word3 . " " . $word4;
    
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
    $phrase = $word1 . " " . $word2 . " " . $word3 . " " . $word4 . " " . $word5;
    
    return $phrase;
}


function option7_1()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j2.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/j2.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/j2.txt");
    $word3 = rtrim($word3);
    $word4 = RandomLine("./wordbank/n1.txt");
    $word4 = rtrim($word4);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3 . " ". $word4;
    return $phrase;
}

function option7_2()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/b2.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/b2.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/b2.txt");
    $word3 = rtrim($word3);
    $word4 = RandomLine("./wordbank/v1.txt");
    $word4 = rtrim($word4);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3 . " ". $word4;
    return $phrase;
}


function option7_3()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j3.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/j3.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/n1.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}

function option7_4()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/b3.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/b3.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/v1.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}

function option7_5()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/b4.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/b2.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/v1.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}

function option7_6()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j4.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/n2.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/v1.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}


function option7_7()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j2.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/n3.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/v2.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}

function option7_8()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/b2.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/b3.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/v2.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}

function option7_9()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/j2.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/j3.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/n2.txt");
    $word3 = rtrim($word3);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3;
    return $phrase;
}




// get a random line, which is one word, from a file
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
