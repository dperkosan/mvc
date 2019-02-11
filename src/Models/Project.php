<?php
    namespace Src\Models;
    use PDOException;

    class Project extends Base {

        public function getProjectById($config){
            try {
                $sql = "SELECT id, title FROM projects WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                
                $results = array();
                if ($stmt->execute($config)) {
                    $results = $stmt->fetch();
                }

                return $results;
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }