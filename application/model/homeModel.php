<?php
class HomeModel
{
    // Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
    public $dbhandle;

    // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        $dsn = 'sqlite:./db/database.db';

        // Then create a connection to a database with the PDO() function
        try {
            // Change connection string for different databases, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
                PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
            ));
        } catch (PDOEXception $e) {
            echo "Failed on connect to the database!";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

    public function dbGetData()
    {
        try {
            // Prepare a statement to get all records from the `main` table
            $sql = 'SELECT main.*, models.link FROM main LEFT JOIN models ON models.Id == main.id';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            $cardsData = null;
            // Set up a variable to index each row of the array
            $i = 0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                //increment the row index
                if ($data['is_header'] == 1) {
                    $result['name'] = $data['name'];
                    $result['subtitle'] = $data['subtitle'];
                    $result['description'] = $data['description'];
                } else {
                    $cardsData[$i] = $data;
                    $i++;
                }
            }
            $result['cards'] = $cardsData;
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }
}
