<!-- index.php -->
<!-- ... -->

<div class="jumbotron">
    <div class="container">
        <?php
            $cleverWelcomeMessage = 'Diego Sanchez is the best!';
            $upperMessage = strtoupper($cleverWelcomeMessage);
            $lowerMessage = strtolower($cleverWelcomeMessage);
            $reverseMessage = strrev($cleverWelcomeMessage);
            $pupCount = rand(50, 100);
        ?>
        <h1>Original Message: <?php echo $cleverWelcomeMessage;?></h1>
        <h1>Upper Case Message: <?php echo $upperMessage; ?></h1>
        <h1>Lower Case Message: <?php echo $lowerMessage; ?></h1>
        <h1>Reversed: <?php echo $reverseMessage; ?></h1>

        <h1>Echo Random Number: <?php echo $pupCount; ?></h1>
        <!-- ... -->
</div>

      <!-- 
      Sample: Run:
      
    Original Message: Diego Sanchez is the best!
    Upper Case Message: DIEGO SANCHEZ IS THE BEST!
    Lower Case Message: diego sanchez is the best!
    Reversed: !tseb eht si zehcnaS ogeiD
    Echo Random Number: 67
      
       -->
