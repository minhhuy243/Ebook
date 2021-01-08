<?php
#number_format();

global $conn;

function OpenConnection()
{
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebook";

    if(!$conn)
    {
        $conn = mysqli_connect($servername, $username, $password, $dbname)
            or die("Không thể kết nối đến Database");
        mysqli_set_charset($conn, 'utf8');
    }
}

function CloseConnection()
{
    global $conn;
     
    if ($conn){
        mysqli_close($conn);
    }
}

function LoadData($sql)
{
    global $conn;
    OpenConnection();  

    $query = mysqli_query($conn, $sql); 
    $result = array();
     
    if ($query)
    {
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
    }
    #CloseConnection();
    return $result;
}