<?php
    try
    {
        $response = array (
            "code" => -1,
            "msg" => ""
        );
        $request = @file_get_contents("php://input");
        $params = json_decode($request, true);

        if (isset($params['username']) && isset($params['password'])) {
            include('config/db.php');

            $username = $params['username'];
            $password = $params['password'];

            $conn = new mysqli($host, $user, $pswd, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = 'SELECT * FROM usernames WHERE username = \'' . $username .'\' AND password = \'' . $password . '\';';

            if ($result = $conn->query($sql) ) {
                if ($result->num_rows > 0) {
                    $response["code"] = 0;
                    $response["msg"] = "Welcome " . $username;
                }
                else {
                    $response["msg"] = 'Not found ' . $username;
                }
            }
            else {
                $response["msg"] = 'Something wrong to fetch some data';
            }

        }
    }
    catch (Exception $ex)
    {
        $response["msg"] = $ex->getMessage();
    }
    finally
    {
        echo json_encode(($response));
    }
    