<?php

$sub = "ds";
$pag = "3";

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- ---Font Awesome CDN-- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>DS Algorithm </title>


    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------DS Introduction section------------ -->
    <div class="container">
        <h1>DS Algorithm</h1>
        <div>
            <a href="/ind-learning/ds-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>What is an Algorithm?</h3>
        <p>
            An algorithm is a process or a set of rules required to perform calculations or some other problem-solving operations especially by a computer. The formal definition of an algorithm is that it contains the finite set of instructions which are being carried in a specific order to perform the specific task. It is not the complete program or code; it is just a solution (logic) of a problem, which can be represented either as an informal description using a Flowchart or Pseudocode.
        </p>

        <hr>
        <h3>Characteristics of an Algorithm</h3>
        <p>
            The following are the characteristics of an algorithm:
            <ul>
                <li><b>Input:</b> An algorithm has some input values. We can pass 0 or some input value to an algorithm.</li>
                <li><b>Output:</b> We will get 1 or more output at the end of an algorithm.</li>
                <li><b>Unambiguity:</b> An algorithm should be unambiguous which means that the instructions in an algorithm should be clear and simple.</li>
                <li><b>Finiteness:</b> An algorithm should have finiteness. Here, finiteness means that the algorithm should contain a limited number of instructions, i.e., the instructions should be countable.</li>
                <li><b>Effectiveness:</b> An algorithm should be effective as each instruction in an algorithm affects the overall process.</li>
                <li><b>Language independent:</b> An algorithm must be language-independent so that the instructions in an algorithm can be implemented in any of the languages with the same output.</li>

            </ul>
        </p>

        <hr>
        <h3>Dataflow of an Algorithm</h3>
        <ul>
            <li><b>Problem:</b> A problem can be a real-world problem or any instance from the real-world problem for which we need to create a program or the set of instructions. The set of instructions is known as an algorithm.</li>
            <li><b>Algorithm:</b> An algorithm will be designed for a problem which is a step by step procedure.</li>
            <li><b>Input:</b> After designing an algorithm, the required and the desired inputs are provided to the algorithm.</li>
            <li><b>Processing unit:</b> The input will be given to the processing unit, and the processing unit will produce the desired output.</li>
            <li><b>Output:</b> The output is the outcome or the result of the program.</li>
        </ul>

        <hr>
        <h3>Why do we need Algorithms?</h3>
        <p>
            We need algorithms because of the following reasons:
            <ul>
                <li><b>Scalability:</b> It helps us to understand the scalability. When we have a big real-world problem, we need to scale it down into small-small steps to easily analyze the problem.</li>
                <li><b>Performance:</b> The real-world is not easily broken down into smaller steps. If the problem can be easily broken into smaller steps means that the problem is feasible.</li>
            </ul>
        </p>
        <p>
            Let's understand the algorithm through a real-world example. Suppose we want to make a lemon juice, so following are the steps required to make a lemon juice:
            <br>
            Step 1: First, we will cut the lemon into half.
            <br>
            Step 2: Squeeze the lemon as much you can and take out its juice in a container.
            <br>
            Step 3: Add two tablespoon sugar in it.
            <br>
            Step 4: Stir the container until the sugar gets dissolved.
            <br>
            Step 5: When sugar gets dissolved, add some water and ice in it.
            <br>
            Step 6: Store the juice in a fridge for 5 to minutes.
            <br>
            Step 7: Now, it's ready to drink.
            <br>
            The above real-world can be directly compared to the definition of the algorithm. We cannot perform the step 3 before the step 2, we need to follow the specific order to make lemon juice. An algorithm also says that each and every instruction should be followed in a specific order to perform a specific task.
            <br>
            Now we will look an example of an algorithm in programming.
            <br>
            <strong>We will write an algorithm to add two numbers entered by the user.</strong>
            <br>
            The following are the steps required to add two numbers entered by the user:
            <br>
            Step 1: Start
            <br>
            Step 2: Declare three variables a, b, and sum.
            <br>
            Step 3: Enter the values of a and b.
            <br>
            Step 4: Add the values of a and b and store the result in the sum variable, i.e., sum=a+b.
            <br>
            Step 5: Print sum
            <br>
            Step 6: Stop
        </p>

        <hr>
        <h3>Factors of an Algorithm</h3>
        <p>
            <b>The following are the factors that we need to consider for designing an algorithm:</b>
            <ul>
                <li><b>Modularity:</b> If any problem is given and we can break that problem into small-small modules or small-small steps, which is a basic definition of an algorithm, it means that this feature has been perfectly designed for the algorithm.</li>
                <li><b>Correctness:</b> The correctness of an algorithm is defined as when the given inputs produce the desired output, which means that the algorithm has been designed algorithm. The analysis of an algorithm has been done correctly.</li>
                <li><b>Maintainability:</b> Here, maintainability means that the algorithm should be designed in a very simple structured way so that when we redefine the algorithm, no major change will be done in the algorithm.</li>
                <li><b>Functionality:</b> It considers various logical steps to solve the real-world problem.</li>
                <li><b>Robustness:</b> Robustness means that how an algorithm can clearly define our problem.</li>
                <li><b>User-friendly:</b> If the algorithm is not user-friendly, then the designer will not be able to explain it to the programmer.</li>
                <li><b>Simplicity:</b> If the algorithm is simple then it is easy to understand.</li>
                <li><b>Extensibility:</b> If any other algorithm designer or programmer wants to use your algorithm then it should be extensible.</li>
            </ul>
        </p>


        <hr>
        <h3>Importance of Algorithms</h3>
        <ol>
            <li><b>Theoretical importance:</b> When any real-world problem is given to us and we break the problem into small-small modules. To break down the problem, we should know all the theoretical aspects.</li>
            <li><b>Practical importance:</b> As we know that theory cannot be completed without the practical implementation. So, the importance of algorithm can be considered as both theoretical and practical.</li>
        </ol>


        <hr>
        <h3>Issues of Algorithms</h3>
        <p>
            The following are the issues that come while designing an algorithm:
            <ul>
                <li><b>How to design algorithms:</b> As we know that an algorithm is a step-by-step procedure so we must follow some steps to design an algorithm.</li>
                <li><b>How to analyze algorithm efficiency</b></li>
            </ul>
        </p>

        <hr>
        <h3>Approaches of Algorithm</h3>
        <p>
            The following are the approaches used after considering both the theoretical and practical importance of designing an algorithm:
            <ul>
                <li>
                    Brute force algorithm: The general logic structure is applied to design an algorithm. It is also known as an exhaustive search algorithm that searches all the possibilities to provide the required solution. Such algorithms are of two types:
                    <ol>
                        <li><b>Optimizing:</b> Finding all the solutions of a problem and then take out the best solution or if the value of the best solution is known then it will terminate if the best solution is known.</li>
                        <li><b>Sacrificing:</b> As soon as the best solution is found, then it will stop.</li>
                    </ol>
                </li>
                <li><b>Divide and conquer:</b> It is a very implementation of an algorithm. It allows you to design an algorithm in a step-by-step variation. It breaks down the algorithm to solve the problem in different methods. It allows you to break down the problem into different methods, and valid output is produced for the valid input. This valid output is passed to some other function.</li>
                <li><b>Greedy algorithm:</b> It is an algorithm paradigm that makes an optimal choice on each iteration with the hope of getting the best solution. It is easy to implement and has a faster execution time. But, there are very rare cases in which it provides the optimal solution.</li>
                <li><b>Dynamic programming:</b> It makes the algorithm more efficient by storing the intermediate results. It follows five different steps to find the optimal solution for the problem:
                    <ol>
                        <li>It breaks down the problem into a subproblem to find the optimal solution.</li>
                        <li>After breaking down the problem, it finds the optimal solution out of these subproblems.</li>
                        <li>Stores the result of the subproblems is known as memorization.</li>
                        <li>Reuse the result so that it cannot be recomputed for the same subproblems.</li>
                        <li>Finally, it computes the result of the complex program.</li>
                    </ol>
                </li>
                <li><b>Branch and Bound Algorithm:</b> The branch and bound algorithm can be applied to only integer programming problems. This approach divides all the sets of feasible solutions into smaller subsets. These subsets are further evaluated to find the best solution.</li>
                <li><b>Randomized Algorithm:</b> As we have seen in a regular algorithm, we have predefined input and required output. Those algorithms that have some defined set of inputs and required output, and follow some described steps are known as deterministic algorithms. What happens that when the random variable is introduced in the randomized algorithm?. In a randomized algorithm, some random bits are introduced by the algorithm and added in the input to produce the output, which is random in nature. Randomized algorithms are simpler and efficient than the deterministic algorithm.</li>
                <li><b>Backtracking:</b> Backtracking is an algorithmic technique that solves the problem recursively and removes the solution if it does not satisfy the constraints of a problem.</li>
            </ul>
        </p>

        <p>
            The major categories of algorithms are given below:
            <ul>
                <li><b>Sort:</b> Algorithm developed for sorting the items in a certain order.</li>
                <li><b>Search:</b> Algorithm developed for searching the items inside a data structure.</li>
                <li><b>Delete:</b> Algorithm developed for deleting the existing element from the data structure.</li>
                <li><b>Insert:</b> Algorithm developed for inserting an item inside a data structure.</li>
                <li><b>Update:</b> Algorithm developed for updating the existing element inside a data structure.</li>
            </ul>
        </p>

        <hr>
        <h3>Algorithm Analysis</h3>
        <p>
            The algorithm can be analyzed in two levels, i.e., first is before creating the algorithm, and second is after creating the algorithm. The following are the two analysis of an algorithm:
            <ul>
                <li><b>Priori Analysis:</b> Here, priori analysis is the theoretical analysis of an algorithm which is done before implementing the algorithm. Various factors can be considered before implementing the algorithm like processor speed, which has no effect on the implementation part.</li>
                <li><b>Posterior Analysis:</b> Here, posterior analysis is a practical analysis of an algorithm. The practical analysis is achieved by implementing the algorithm using any programming language. This analysis basically evaluate that how much running time and space taken by the algorithm.</li>
            </ul>
        </p>

        <hr>
        <h3>Algorithm Complexity</h3>
        <p>
            The performance of the algorithm can be measured in two factors:
            <ul>
                <li><b>Time complexity:</b> The time complexity of an algorithm is the amount of time required to complete the execution. The time complexity of an algorithm is denoted by the big O notation. Here, big O notation is the asymptotic notation to represent the time complexity. The time complexity is mainly calculated by counting the number of steps to finish the execution. Let's understand the time complexity through an example.</li>
            </ul>
        </p>
        <pre class="jumbotron">
            sum=0;  
            // Suppose we have to calculate the sum of n numbers.  
            for i=1 to n  
            sum=sum+i;  
            // when the loop ends then sum holds the sum of the n numbers  
            return sum;</pre>
        <p>
            In the above code, the time complexity of the loop statement will be atleast n, and if the value of n increases, then the time complexity also increases. While the complexity of the code, i.e., return sum will be constant as its value is not dependent on the value of n and will provide the result in one step only. We generally consider the worst-time complexity as it is the maximum time taken for any given input size.
            <ul>
                <li><b>Space complexity:</b> An algorithm's space complexity is the amount of space required to solve a problem and produce an output. Similar to the time complexity, space complexity is also expressed in big O notation.</li>
            </ul>
        </p>
        <p>
            For an algorithm, the space is required for the following purposes:
            <ol>
                <li>To store program instructions</li>
                <li>To store constant values</li>
                <li>To store variable values</li>
                <li>To track the function calls, jumping statements, etc.</li>
            </ol>
            <b>Auxiliary space:</b> The extra space required by the algorithm, excluding the input size, is known as an auxiliary space. The space complexity considers both the spaces, i.e., auxiliary space, and space used by the input.
            <br>
            So,
            <br>
            <b>Space complexity = Auxiliary space + Input size.</b>
        </p>

        <hr>
        <h3>Types of Algorithms</h3>
        <p>
            The following are the types of algorithm:
            <ul>
                <li>Search Algorithm</li>
                <li>Sort Algorithm</li>
            </ul>
        </p>
        <p>
            <b>Linear Search : </b>
            Linear search is a very simple algorithm that starts searching for an element or a value from the beginning of an array until the required element is not found. It compares the element to be searched with all the elements in an array, if the match is found, then it returns the index of the element else it returns -1. This algorithm can be implemented on the unsorted list.
            <b>Binary Search : </b>
            A Binary algorithm is the simplest algorithm that searches the element very quickly. It is used to search the element from the sorted list. The elements must be stored in sequential order or the sorted manner to implement the binary algorithm. Binary search cannot be implemented if the elements are stored in a random manner. It is used to find the middle element of the list.
        </p>

        <hr>
        <h3>Sorting Algorithms</h3>
        <p>Sorting algorithms are used to rearrange the elements in an array or a given data structure either in an ascending or descending order. The comparison operator decides the new order of the elements.</p>

        <hr>
        <h3>Why do we need a sorting algorithm?</h3>
        <ul>
            <li>An efficient sorting algorithm is required for optimizing the efficiency of other algorithms like binary search algorithm as a binary search algorithm requires an array to be sorted in a particular order, mainly in ascending order.</li>
            <li>It produces information in a sorted order, which is a human-readable format.</li>
            <li>Searching a particular element in a sorted list is faster than the unsorted list.</li>
        </ul>


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/ds-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <div class="mb-2">
            <?php

            include 'modules/_query_module.php';

            ?>
        </div>

    </div>




    <!-- ------Footer Module----- -->
    <?php

    include 'modules/_footer_module.php';

    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>