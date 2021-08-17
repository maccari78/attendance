<?php
    class user{
        // Private database object
        private $db;

        // Constructor to initialize private variable to the database conection
        function __construct($conn) {
            $this->db = $conn;
        }

        public function insertUser($username, $password) {
            try {
                $result = $this->getUserbyUsername($username);
                if ($result['num'] > 0) {
                    return false;
                } else {
                    $new_password = md5($password.$username);
                    // Define sql statement to be executed
                    $sql = "INSERT INTO users (username,password) VALUES (:username,:password)";
                    // Prepare the sql statement for execution
                    $stmt = $this->db->prepare($sql);
                    // Bind all placeholders to the actual values
                    $stmt->bindparam(':username', $username);
                    $stmt->bindparam(':password', $new_password);
                    
                    // Execute statement
                    $stmt->execute();
                    return true;
                }                

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUser($username, $password) {
            try {
                $sql = "SELECT * FROM `users` WHERE username = :username AND password = :password";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->bindparam(':password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserbyUsername($username) {
            try {
                $sql = "SELECT count(*) AS num FROM users WHERE username = :username";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>