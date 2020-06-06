<?php

    // print_r(PDO::getAvailableDrivers());

    $host     = "LOCALHOST";
    $user     = "root";
    $password = "";
    $dbname   = "ajax";

    // Data Source Name
    $dsn = "mysql:host=".$host.";dbname=".$dbname;

    // Create a PDO instance
    $connect = new PDO($dsn, $user, $password);

    // No need na maglagay ng fetch_assoc/fetch_obj sa fetch
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // PDO Query
    // $stmt = $connect->query("SELECT * FROM tbl_customer");

    // GETTING DATA
    // Using Fetch Associate
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['CustomerName']."<br>";
    // }
    // Using Fetch Object
    // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     echo $row->CustomerName."<br>";
    // }

    // while ($row = $stmt->fetch()) {
    //     echo $row['CustomerName']."<br>";
    // }

    // Positional Parameters
    // $sql = "SELECT * FROM tbl_customer WHERE Country = ?";
    // $stmt = $connect->prepare($sql);
    // $stmt->execute(['Philippines']);
    // $results = $stmt->fetchAll();

    // Named Parameters
    // $sql = "SELECT * FROM tbl_customer WHERE Country = :varCountry";
    // $stmt = $connect->prepare($sql);
    // $stmt->execute(['varCountry' => 'Philippines']);
    // $results = $stmt->fetchAll();
    
    // foreach ($results as $result) {
    //     echo $result['CustomerName']." - ".$result['Country']."<br>";
    // }

    // Getting Specific Data
    // $id = "1";
    // $sql = "SELECT * FROM tbl_customer WHERE CustomerID = :id";
    // $stmt = $connect->prepare($sql);
    // $stmt->execute(['id' => $id]);
    // $result = $stmt->fetch();
    // echo $result['CustomerName']." - ".$result['Country']."<br>";
    
    // Getting the total of rows
    // $country = "Philippines";
    // $sql = "SELECT * FROM tbl_customer WHERE Country = :country";
    // $stmt = $connect->prepare($sql);
    // $stmt->execute(['country' => $country]);
    // $resultCount = $stmt->rowCount();
    // if ($resultCount > 0) {
    //     $results = $stmt->fetchAll();
    //     foreach ($results as $result) {
    //         echo $result['CustomerName']." - ".$result['Country']."<br>";
    //     }
    // } else {
    //     echo "No data found!";
    // }

    // Inserting Data
    // $name = "RJ Diangzon";
    // $address = "Valley Golf";
    // $city = "Cainta Rizal";
    // $postalCode = "3213";
    // $country = "Philippines";
    // $sql = "INSERT INTO tbl_customer 
    //     (CustomerName, Address, City, PostalCode, Country)
    //     VALUES
    //     (?, ?, ?, ?, ?)";
    // $stmt = $connect->prepare($sql);
    // $insert = $stmt->execute([$name, $address, $city, $postalCode, $country]);
    // if ($insert) {
    //     echo "Inserted successfully";
    // } else {
    //     echo "Insert failed";
    // }

    // Updating data
    // $id = "26";
    // $name = "Jean Diangzon";
    // $address = "Sunshine Fiesta";
    // $city = "Cardona Rizal";
    // $postalCode = "1111";
    // $country = "Philippines";
    // $sql = "UPDATE tbl_customer
    //         SET CustomerName = :name, Address = :address, City = :city, PostalCode = :postalcode, Country = :country WHERE CustomerID = :id";
    // $stmt = $connect->prepare($sql);
    // $update = $stmt->execute(['name' => $name, 'address' => $address, 'city' => $city, 'postalcode' => $postalCode, 'country' => $country, 'id' => $id]);
    // if ($update) {
    //     echo "Updated successfully";
    // } else {
    //     echo "Update failed";
    // }

    // Deleting data
    // $id = "26";
    // $sql = "DELETE FROM tbl_customer WHERE CustomerID = ?";
    // $stmt = $connect->prepare($sql);
    // $update = $stmt->execute([$id]);
    // if ($update) {
    //     echo "Deleted successfully";
    // } else {
    //     echo "Delete failed";
    // }




