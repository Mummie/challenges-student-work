<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Copy exercise 5 into this file.
         *
         * Use a custom sort function and closure to sort the names
         * by their scores, with the highest scores first before
         * printing the names out on the screen.
         *
         * @see http://php.net/manual/en/function.usort.php
         */
            
        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names, 'Bob ArK '); 
        array_push($names, ' Derek WaLL');

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        // Without writing a loop, print out the winners separated by a comma and a space
        
        
        
        // write new function using a callback 
        function sort_then_print($names, callable $callback) { 
            $passedNames = array_filter($names, function(&$name) { 
            $name = ucwords(strtolower(trim($name)));
            // Multiply the position of the letter 'a' (case insensitive) in the name by the
            // length of the last name divided by the number of words in the string
            $posA = stripos($name, 'a'); 
            $parts = explode(' ', $name); 
            $last = array_pop($parts);
            $lenLast = strlen($last);
            $numWords = str_word_count($name);
            $score = $posA * $lenLast / $numWords; 
            
            return $score > 5; 
            
            usort $callback($passedNames, $names));
            // not sure how to make this work 
        } );
        } 
        
        echo sort_then_print($passedNames);
        //print implode(', ', $passedNames); 
        ?>

    </p>

    </body>
</html>