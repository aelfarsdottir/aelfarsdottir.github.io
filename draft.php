<?php

    // AE if user reached page via POST (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // else render homepage because we don't want people to be able to access our draft.php (?)
        redirect("http://aelfarsdottir.github.io", ["title" => "Hello, Haiku"]);
    }
    
    // AE else if user reached page via GET (by submitting the generate-button form on the homepage via POST)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
    // AE to include the render function
    require("helpers.php");
    
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

    // AE pass the lines of the haiku to the view: haiku.php
    render("haiku.html", ["line1" => $firstline, "line2" => $secondline, "line3" => $thirdline, "title" => "Haiku"]);

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
    $randomint = rand(1, 11);

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
    
    if ($randomint == 10)
    {
        // Call function 7.10
        $line = option7_10();
    }  
    
    if ($randomint == 11)
    {
        // Call function 7.11
        $line = option7_11();
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
    
    $word1 = RandomLine("./wordbank/p2.txt");
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
    
    $word1 = RandomLine("./wordbank/p3.txt");
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
    
    $word1 = RandomLine("./wordbank/n3.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/p3.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/n1.txt");
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

function option7_10()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/p1.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/j2.txt");
    $word2 = rtrim($word2);
    $word3 = RandomLine("./wordbank/j1.txt");
    $word3 = rtrim($word3);
    $word4 = RandomLine("./wordbank/n2.txt");
    $word4 = rtrim($word4);
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3. " ". $word4;
    return $phrase; 
}

function option7_11()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1 = RandomLine("./wordbank/p4.txt");
    $word1 = rtrim($word1);
    $word2 = RandomLine("./wordbank/j1.txt");
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
} // AE ends function

} // AE to end the if($_SERVER["REQUEST_METHOD"] == "GET"

?>
