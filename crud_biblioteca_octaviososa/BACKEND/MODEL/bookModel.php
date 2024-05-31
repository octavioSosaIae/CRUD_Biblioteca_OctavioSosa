<?php

require_once "../DB/database.php";

class book
{

    function obtainBook()
    {
        $connection = new conn;
        $conn = $connection->connection();
        $sql = "SELECT * FROM libro;";
        $response = $conn->query($sql);
        $libros = $response->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }

    function createBook($name, $date, $price)
    {

        $connection = new conn;
        $conn = $connection->connection();
        $sql = "INSERT INTO libro VALUES( 0 ,'$name', '$date','$price');";
        $response = $conn->query($sql);
        return $response;
    }

    function deleteBook($id)
    {
        $connection = new conn;
        $conn = $connection->connection();
        $sql = "DELETE FROM libro WHERE(id='$id');";
        $response = $conn->query($sql);
        return $response;
    }

    function modifyBook($name,$date,$price,$id){

        $connection = new conn;
        $conn = $connection->connection();
        $sql = "UPDATE libro SET nombre = '$name', fecha= '$date', precio = '$price' WHERE id='$id'; ";
        $response = $conn->query($sql);
        return $response;

    }
}
