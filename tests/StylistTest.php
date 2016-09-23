<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Stylist.php";

    $server = 'mysql:host=localhost:3307;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class Stylist_test extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Stylist::deleteAll();
        }

        function test_save()
        {
            // Arrange
            $id = null;
            $name = "Randy";
            $test_stylist = new Stylist($id, $name);

            // Act
            $test_stylist->save();

            // Assert
            $result = Stylist::getAll();
            $this->assertEquals($test_stylist, $result[0]);
        }

        function test_getAll()
        {
            // Arrange
            $id = null;
            $name = "Randy";
            $test_stylist = new Stylist($id, $name);
            $test_stylist->save();
            $name2 = "Phoebe";
            $test_stylist2 = new Stylist($id, $name2);
            $test_stylist2->save();

            // Act
            $result = Stylist::getAll();

            // Assert
            $this->assertEquals([$test_stylist, $test_stylist2], $result);
        }

        function test_deleteAll()
        {
            // Arrange
            $id = null;
            $name = "Randy";
            $test_stylist = new Stylist($id, $name);
            $test_stylist->save();
            $name2 = "Phoebe";
            $test_stylist2 = new Stylist($id, $name2);
            $test_stylist2->save();

            // Act
            Stylist::deleteAll();

            // Assert
            $result = Stylist::getAll();
            $this->assertEquals([], $result);
        }
    }
 ?>
