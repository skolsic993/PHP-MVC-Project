<?php 

namespace App\Core;

    abstract class Model 
    {
        private $dbc;

        public function __construct(DatabaseConnection &$dbc)
        {
            $this->dbc = $dbc;
        }

        protected function getFields(): array 
        {
            return [];
        }

        final private function checkFieldList(array $data) 
        {
            $fields = $this->getFields();

            $supportedFieldNames = array_keys($fields);
            $requestedFieldNames = array_keys($data);
        }
        

        final protected function getConnection()
        {
            return $this->dbc->getConnection();
        }

        final private function getTableName(): string 
        {
            $matches = [];
            preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|', static::class, $matches);
            return substr(strtolower(preg_replace('|[A-Z]|', '_$0', $matches[1] ?? '')), 1);
        }

        final public function getById(int $id)
        {
            $tableName = $this->getTableName();

            $sql = 'SELECT * FROM ' . $tableName . ' WHERE  id = ?;';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute([$id]);

            $item = NULL;
            if($res)
            {
                $item = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $item;
        }

        final public function getAll(): array
        {
            $tableName = $this->getTableName();

            $sql = 'SELECT * FROM ' . $tableName . ';';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        final private function isFieldNameValid(string $fieldName)
        {
            return boolval(preg_match('|^[a-z][a-z_0-9]+[a-z0-9]$|', $fieldName));
        }

        final public function getByFieldName(string $fieldName, $value)
        {
            if(!$this->isFieldNameValid($fieldName))
            {
                throw new Exception('Invalid field name: ' . $fieldName);
            }

            $tableName = $this->getTableName();

            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' . $fieldName . ' = ?;';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute([$value]);

            $item = NULL;
            if($res)
            {
                $item = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $item;
        }

        final public function getAllByFieldName(string $fieldName, $value): array
        {
            if(!$this->isFieldNameValid($fieldName))
            {
                throw new Exception('Invalid field name: ' . $fieldName);
            }
            
            $tableName = $this->getTableName();

            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' . $fieldName . ' = ?;';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute([$value]);

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        final public function add(array $data) {
            $requestedFieldNames = array_keys($data);
            $tableName = $this->getTableName();

            $sqlFieldNames = implode(', ', $requestedFieldNames);

            $questionMarks = str_repeat('?,', count($data));
            $questionMarks = substr($questionMarks, 0, -1);

            $sql = "INSERT INTO {$tableName} ({$sqlFieldNames}) VALUES ({$questionMarks});";
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute(array_values($data));
            if(!$res)
            {
                return false;
            }
            return $this->dbc->getConnection()->lastInsertId();
        }

        final public function editById(int $id, array $data)
        {
            $this->checkFieldList($data);
            $tableName = $this->getTableName();

            $editList = [];
            $values = [];
            foreach($data as $fieldName => $value)
            {
                $editList[] = "{$fieldName} = ?";
                $values[] = $value;
            }

            $editString = implode(', ', $editList);

            $values[] = $id;

            $sql = "UPDATE {$tableName} SET {$editString} WHERE id = ?;";
            $prep = $this->dbc->getConnection()->prepare($sql);
            return $prep->execute($values);
        }

        final public function deleteById(int $id)
        {
            $tableName = $this->getTableName();

            $sql = 'DELETE FROM ' . $tableName . ' WHERE  id = ?;';
            $prep = $this->dbc->getConnection()->prepare($sql);
            return $prep->execute([$id]);
        }
    }