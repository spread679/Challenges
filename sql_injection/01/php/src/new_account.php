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

            if ($username != '' && $password !=  '') {
                $conn = new mysqli($host, $user, $pswd, $db);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = 'INSERT INTO usernames ( username, password ) VALUES ( \'' . $username .'\', \'' . $password . '\')';

                if ($result = $conn->query($sql)) {
                    $response["code"] = 0;
                    $response["msg"] = "Welcome " . $username;
                }
                else {
                    $response["msg"] = 'Username invalid: ' . $username . ' can\'t be added';
                }
            } else {
                $response["msg"] = "Can't be empty username and password";
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
    