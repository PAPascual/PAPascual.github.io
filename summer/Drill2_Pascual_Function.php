<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <?php
        $br = "<br>";
    ?>
    <title>PHP Functions</title>
</head>
<body>
    <?php
        function greeting() {
            echo "Hello there!";
        }

        function greatDay() {
            echo "Have a great day!";
        }

        function addition($n1, $n2) {
            $sum = $n1 + $n2;
            return $sum;
        }

        function oddOrEven($n) {
            return ($n % 2 == 0) ? "True" : "Odd";
        }

        $firstName = "Liam";
        $secondName = "Russel";
        $lastName = "Bustos";

        function uppercaser (&$str1, &$str2, &$str3) {
            $str1 = strtoupper($str1);
            $str2 = strtoupper($str2);
            $str3 = strtoupper($str3);
        }

        function operations ($n1, $n2) {
            $sum = $n1 + $n2;
            $diff = $n1 - $n2;
            $prod = $n1 * $n2;
            $quo = $n1 / $n2;

            return array($sum, $diff, $prod, $quo);
        }

        $answers = operations(9, 4);
    ?>
    <h1 class="display-1 text-center m-2">Functions in PHP</h1>
    <div class="container align-items-center justify-content-center text-center p-4">
        <div class="row">
            <div class="col rounded bg-primary p-3 m-2">
                <h4>Task 1: Simple Function in PHP</h4>
                <table class="table table-primary table-bordered border-dark">
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Output</th>
                        </tr>
                    </thead>
                    <tbody class="text-start">
                        <tr>
                            <td>
                                function greeting() {<br>&emsp;echo "Hello there!";<br>}
                            </td>
                            <td>
                                <?php
                                    greeting()
                                ?>
                            </td>    
                        </tr>
                        <tr>
                            <td>
                                function greatDay() {<br>
                                &emsp;echo "Have a great day!";<br>
                                }
                            </td>
                            <td>
                                <?php
                                    greatDay()
                                ?>
                            </td>    
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col rounded bg-success p-3 m-2">
                <h4>Task 2: Function Applying Return</h4>
                <table class="table table-success table-bordered border-dark">
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Output</th>
                        </tr>
                    </thead>
                    <tbody class="text-start">
                        <tr>
                            <td>
                                function addition($num1, $num2) {
                                <br>&emsp;$sum = $n1 + $n2;
                                <br>}
                                <br>echo "The sum of the given values is ".addition(3, 4);
                            </td>
                            <td>
                                <?php
                                    echo "The sum of the given values is ".addition(3, 4);
                                ?>
                            </td>    
                        </tr>
                        <tr>
                            <td>
                                function oddOrEven($n) {
                                <br>&emsp;return ($n % 2 == 0) ? "True" : "Odd";
                                <br>}
                                <br>echo "The number is ".oddOrEven(7);
                            </td>
                            <td>
                                <?php
                                    echo "The number is ".oddOrEven(7);
                                ?>
                            </td>    
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class="col rounded bg-warning p-3 m-2">
                <h4>Task 3: Function by Reference</h4>
                <?php
                    echo "<b>Original Values:</b>". $br;
                    echo '$firstName = '. $firstName. $br;
                    echo '$secondName = '. $secondName. $br;
                    echo '$lastName = '. $lastName. $br.$br;

                    echo "<b>Printed Values:</b>". $br;
                    echo "Welcome {$firstName} {$secondName} {$lastName}.". $br.$br;

                    echo "<b>Function:</b>". $br;
                ?>
                <div class="container text-start">
                    <span>function uppercaser (&$str1, &$str2, &$str3) {</span><br>
                    <span>&emsp;$str1 = strtoupper($str1);</span><br>
                    <span>&emsp;$str2 = strtoupper($str2);</span><br>
                    <span>&emsp;$str3 = strtoupper($str3);</span><br>
                    <span>}</span><br>
                    <span>uppercaser($firstName, $secondName, $lastName);</span><br><br>
                </div>
                <?php
                    uppercaser($firstName, $secondName, $lastName);
                    echo "<b>Printed Values After Function:</b>". $br;
                    echo "Welcome {$firstName} {$secondName} {$lastName}.". $br.$br;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col rounded bg-danger p-3 m-2 text-white">
                <h4>Task 4: Function Using Multiple Returns</h4>
                <?php
                    echo "<b>Function: </b>";
                ?>
                <div class="container text-start">
                    <span>function operations ($n1, $n2) {</span><br>
                    <span>&emsp;$sum = $n1 + $n2;</span><br>
                    <span>&emsp;$diff = $n1 - $n2;</span><br>
                    <span>&emsp;$prod = $n1 * $n2;</span><br>
                    <span>&emsp;$quo = $n1 / $n2;</span><br>
                    <span>&emsp;return array($sum, $diff, $prod, $quo);</span><br>
                    <span>}</span><br>
                    <span>$answers = operations(9, 4);</span><br>
                </div>
                <?php
                    echo "<b>Results: </b>". $br;
                    echo "The sum is {$answers[0]}". $br;
                    echo "The difference is {$answers[1]}". $br;
                    echo "The product is {$answers[2]}". $br;
                    echo "The quotient is {$answers[3]}". $br;
                ?>
            </div>
            <div class="col rounded bg-info p-3 m-2">
                <h4>Task 5: Use of Include Function</h4>
                <?php
                    echo "<b>Function (in the functionincludetest.php file!):</b>";
                ?>
                <div class="container text-start">
                    <span>function helloFromFarAway () {</span><br>
                    <span>&emsp;echo "Hello! I'm on the other file!";</span><br>
                    <span>}</span><br>
                </div>

                <?php
                    echo "<br><b>Code (in the this file):</b>";
                ?>

                <div class="container text-start">
                    <span>include("functionincludetest.php");</span><br>
                    <span>helloFromFarAway();</span><br>
                </div>

                <?php
                    echo "<br><b>Function Exectution:</b><br>";

                    include("functionincludetest.php");
                    helloFromFarAway();
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>