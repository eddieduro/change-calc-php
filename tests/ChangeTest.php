<?php
    require_once 'src/Change.php';

    class ChangeTest extends PHPUnit_Framework_TestCase
    {
        function test_getQuarter()
        {
            // Arrange
            $new_Change = new Change;
            $input = 25;

            // Act
            $result = $new_Change->makeChange($input);

            // Assert
            $this->assertEquals("quarters:1 dimes:0 nickels:0 pennies:0", $result);
        }
        function test_getDime()
        {
            // Arrange
            $new_Change = new Change;
            $input = 35;

            // Act
            $result = $new_Change->makeChange($input);

            // Assert
            $this->assertEquals("quarters:1 dimes:1 nickels:0 pennies:0", $result);
        }

        function test_getNickels()
        {
            // Arrange
            $new_Change = new Change;
            $input = 45;

            // Act
            $result = $new_Change->makeChange($input);

            // Assert
            $this->assertEquals("quarters:1 dimes:2 nickels:0 pennies:0", $result);
        }

        function test_getPennies()
        {
            // Arrange
            $new_Change = new Change;
            $input = 46;

            // Act
            $result = $new_Change->makeChange($input);

            // Assert
            $this->assertEquals("quarters:1 dimes:2 nickels:0 pennies:1", $result);
        }
    }
?>
