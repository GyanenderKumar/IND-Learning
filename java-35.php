<?php

    $sub="java";
    $pag="35";

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

    <title>Java Polymorphism</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Polymorphism------------ -->
    <div class="container">
        <h1>Java Polymorphism</h1>
        <div>
            <a href="java-34.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-36.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Polymorphism</h3>
        <p>
            Polymorphism means "many forms", and it occurs when we have many classes that
            are related to each other by inheritance.
            <br>
            Like we specified in the previous chapter; <spam class="text-danger">Inheritance</spam> lets us inherit attributes and
            methods from another class. <spam class="text-danger">Polymorphism</spam> uses those methods to perform
            different tasks. This allows us to perform a single action in different ways.
            <br>
            For example, think of a superclass called Animal that has a method called
            <spam class="text-danger">animalSound()</spam> . Subclasses of Animals could be Pigs, Cats, Dogs, Birds - And they
            also have their own implementation of an animal sound (the pig oinks, and the cat
            meows, etc.):
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            class Animal {
                public void animalSound() {
                    System.out.println("The animal makes a sound");
                }
            }
            class Pig extends Animal {
                public void animalSound() {
                    System.out.println("The pig says: wee wee");
                }
            }
            class Dog extends Animal {
                public void animalSound() {
                    System.out.println("The dog says: bow wow");
                }
            }</pre>
        <p>
            Now we can create <spam class="text-danger">Pig</spam> and <spam class="text-danger">Dog</spam> objects and call the <spam class="text-danger">animalSound()</spam> method on
            both of them:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            class Animal {
                public void animalSound() {
                    System.out.println("The animal makes a sound");
                }
            }
            class Pig extends Animal {
                public void animalSound() {
                    System.out.println("The pig says: wee wee");
                }
            }
            class Dog extends Animal {
                public void animalSound() {
                    System.out.println("The dog says: bow wow");
                }
            }
            class MyMainClass {
                public static void main(String[] args) {
                    Animal myAnimal = new Animal(); // Create a Animal object
                    Animal myPig = new Pig(); // Create a Pig object
                    Animal myDog = new Dog(); // Create a Dog object
                    myAnimal.animalSound();
                    myPig.animalSound();
                    myDog.animalSound();
                }
            }</pre>
        <p>
            <b>Why And When To Use "Inheritance" and "Polymorphism"?</b>
            <br>
            - It is useful for code reusability: reuse attributes and methods of an existing class
            when you create a new class.
        </p>


        <hr>
        <div class="mb-2">
            <a href="java-34.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-36.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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