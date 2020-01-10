<?php
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectById($table, $id = 0)
    {
        $statement = $this->pdo->prepare("select * from {$table} WHERE ID = :id");
        $statement->execute([':id' => $id]);

        $result = $statement->fetchAll(PDO::FETCH_CLASS);
        return empty($result) ? [] : reset($result);
    } 
    public function deleteById($table, $id = 0)
    {
        $statement = $this->pdo->prepare("delete from {$table} WHERE ID= :id");
        return $statement->execute([':id' => $id]);
        
    } 
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s);',
            $table,
            implode(', ',array_keys($parameters)),
            ':' . implode(', :',array_keys($parameters))
            
        );
    }
    public function updateByID ($table, $id, $parameters) {
        $updateCols = [];
        foreach($parameters as $key => $value ) {
            $updateCols[] = $key . '=:' . $key;
        }

        $sql = sprintf(
            'UPDATE %s SET %s WHERE id=%s',
            $table,
            implode(', ', $updateCols),
            $id
        ); 

        try {
            $statement = $this->pdo->prepare($sql);
            
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Oops, midagi on valesti');
        }
        //die(var_dump($sql));
    }

    public function getUserByEmail($table, $username ) {
        $statement = $this->pdo->prepare("select * from {$table} WHERE name =:username LIMIT 1");
        $statement->execute([':username' => $username]);

        $result = $statement->fetchAll(PDO::FETCH_CLASS);
        return empty($result) ? [] : reset($result);

    }
}