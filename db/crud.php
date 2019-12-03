<?php

    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn; 
        }

        public function insertAccounts($firstname, $lname, $gender, $email, $address, $specialty,$avatar_path){
            try {
                $sql = "INSERT INTO account (firstname, lastname, gender, email, homeaddress, specialty_id, avatar_path) 
                        VALUES (:firstname,:lname,:gender,:email,:homeaddress,:specialty,:avatar_path)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':firstname',$firstname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':homeaddress',$address);
                $stmt->bindparam(':specialty',$specialty);
                $stmt->bindparam(':avatar_path',$avatar_path);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function getAccounts(){
            try{
                $sql = "SELECT * FROM `account` a inner join specialties s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
           
        }

        public function getSpecialties(){
            try{
                $sql = "SELECT * FROM `specialties`";
                $result = $this->db->query($sql);
                return $result; 
                
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

            
        }


        public function getGender(){
            try{
                $sql = "SELECT * FROM `gender`";
                $result = $this->db->query($sql);
                return $result; 
                
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

            
        }
    

        public function getSpecialtyById($id){
            try{
                $sql = "SELECT * FROM `specialties` where specialty_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result; 
                
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getGenderById($id){
            try{
                $sql = "SELECT * FROM `gender` where gender_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result; 
                
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function editAccount($id, $firstname, $lastname, $gender, $email, $address, $specialty){
            try{
            
            $sql = "UPDATE `account` SET `firstname`=:fname,`lastname`=:lname,
            `gender`=:gender,`email`=:email,`homeaddress`=:homeaddress,`specialty_id`=:specialty
                WHERE account_id=:id";
    
                        $stmt = $this->db->prepare($sql);
    
                        $stmt->bindparam(':id',$id);
                        $stmt->bindparam(':fname',$firstname);
                        $stmt->bindparam(':lname',$lastname);
                        $stmt->bindparam(':gender',$gender);
                        $stmt->bindparam(':email',$email);
                        $stmt->bindparam(':homeaddress',$address);
                        $stmt->bindparam(':specialty',$specialty);
                        
    
                        $stmt->execute();
                        return true;
    
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        public function getAccountDetails($id){
            try{
                $sql = "SELECT * FROM `account` a inner join specialties s on a.specialty_id = s.specialty_id 
                    where account_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function deleteAccount($id){
            try{
                $sql = "DELETE FROM `account` WHERE account_id =:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }








    }











?>