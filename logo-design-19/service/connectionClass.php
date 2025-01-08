<?php
class database
{
    function connect()
    {
        try
        {
            $conn = new \PDO("mysql:host=localhost;dbname=designvikings_dvlogo19","designvikings_dvlogo19_usr",".2opg^VZ)3k8");
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, TRUE);
            return $conn;
        }
        catch(PDOException $e)
        {
            return "Connection failed: " . $e->getMessage();
        }
    }
    
    function insertRow($tbl_name,$row_data)
    {
        
        try
        {
            if(is_array($row_data) == 1) {
                $conn = new PDO("mysql:host=localhost;dbname=designvikings_dvlogo19","designvikings_dvlogo19_usr",".2opg^VZ)3k8");
                $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, TRUE);
                $sql = "INSERT INTO $tbl_name (".implode(',', array_keys($row_data)).") VALUES ('".implode("','", array_values($row_data))."')";
                $query = $conn->prepare($sql);
                $query->execute();
                return array( "status" => true, "id" => $conn->lastInsertId() );

            } else {
                return array( "status" => false, "message" => "Data should be in Array Format" );
            }
        
        }
        catch(PDOException $e)
        {
            return array( "status" => false, "message"=>"Error while inserting in $tbl_name and " . $e->getMessage() );
        }
    }

    function updateRow($tbl_name,$row_data,$where_clause)
    {
        try
        {

            if(is_array($row_data) == 1) { 

                $sql = "UPDATE $tbl_name SET ";
                foreach (array_keys($row_data) as $column) {
                    $sql .= $column ."='"  . $row_data[$column] . "',";
                }
                $sql = rtrim($sql,",");

                if(empty($where_clause))
                {
                    $sql .= ";";
                    $query = $this->connect()->prepare($sql);
                }
                else if(!empty($where_clause))
                {
                    $sql .= " WHERE ";
                    foreach (array_keys($where_clause) as $column) {
                        $sql .= $column ."=" . $where_clause[$column] . " AND ";
                    }
                    $sql = rtrim($sql," AND ");
                    $sql .= ";";
                    $query = $this->connect()->prepare($sql);
                    foreach ($row_data as $column => $value) {
                        $query->bindValue(":$column",$value);
                    }
                    foreach ($where_clause as $column => $value) {
                        $query->bindValue(":$column",$value);
                    }
                }
                // return $sql;
                $query->execute();

            } else {
                return array( "status" => false, "message" => "Data should be in Array Format" );
            }
            
        }
        catch(PDOException $e)
        {
            return "Error while updating row in $tbl_name and " . $e->getMessage();
        }
    }

    function selectData($tbl_name,$fields,$where_clause)
    {
        try
        {
            if(is_array($fields) == 1) {
                
                if(empty($fields))
            {
                $sql = "SELECT * FROM $tbl_name";
            }
            else if(count($fields)>1)
            {
                $sql = "SELECT " .implode(",",$fields). " FROM $tbl_name";
            }
            else if(count($fields) == 1)
            {
                $sql = "SELECT $fields FROM $tbl_name";
                $query = $this->connect()->query($sql);
            }

            if(empty($where_clause))
            {
                $sql .= ";";
                $query = $this->connect()->query($sql);

            }
            else if (count($where_clause) == 1) {
                $sql .= " WHERE ";
                $sql .= $where_clause;
                $sql .= ";";
                $query = $this->connect()->query($sql);
            }
            else if(count($where_clause) > 1)
            {
                $sql .= " WHERE ";
                foreach (array_keys($where_clause) as $column) {
                    $sql .= $column ."=" . ":" . $column . " AND ";
                }
                $sql = rtrim($sql," AND ");
                $sql .= ";";
                $query = $this->connect()->query($sql);
                foreach ($where_clause as $column => $value) {
                    $query->bindValue(":$column",$value);
                }
            }
            
            $result = $query->fetchAll(); 
            
            return array( "status" => true, "data" => $result );

            } else {
                return array( "status" => false, "message" => "Data should be in Array Format" );
            }

        }
        catch(PDOException $e)
        {
            "Error While Fetching Data From $tbl_name ".$e->getMessage();
        }
    }
}
?>
