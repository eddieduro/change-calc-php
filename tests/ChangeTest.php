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
            $this->assertEquals(array(1,0), $result);
        }
        function test_getDime()
        {
            // Arrange
            $new_Change = new Change;
            $input = 35;

            // Act
            $result = $new_Change->makeChange($input);

            // Assert
            $this->assertEquals(array(1,1), $result);
        }
    }
?>
