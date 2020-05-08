<?php

class SqlStructure
{
    private array $tableNames;
    private object $link;

    public function __construct($link)
    {
        $this->tableNames = [];
        $this->link = $link;
        $this->getTableNames();
    }

    private function getTableNames()
    {
        $sql = 'SHOW TABLES';
        $tables = mysqli_query($this->link, $sql);
        $result = mysqli_fetch_all($tables);

        foreach ($result as $value) {
            foreach ($value as $v) {
                array_push($this->tableNames, $v);
            }
        }
    }

    private function printFieldValues($tableName)
    {
        $sql = 'SELECT * FROM '.$tableName;
        $fields = mysqli_query($this->link, $sql);
        $result = mysqli_fetch_all($fields);

        foreach ($result as $value) {
            echo '<tr>';
            foreach ($value as $v) {
                echo '<td>';
                echo $v;
                echo '</td>';
            }
            echo '</tr>';
        }
    }

    private function printTableFields($name)
    {
        $buffArray = [];

        $sql = 'SHOW COLUMNS FROM '.$name;
        $fields = mysqli_query($this->link, $sql);
        $result = mysqli_fetch_all($fields, MYSQLI_ASSOC);

        foreach ($result as $value) {
            $buffName = $value['Field'];
            if ('' != $value['Key']) {
                $buffName = $buffName.' ['.$value['Key'].']';
            }
            $buffName = $buffName.'<br>'.$value['Type'];
            array_push($buffArray, $buffName);
        }

        echo '<tr>';
        foreach ($buffArray as $fieldName) {
            echo '<td>';
            echo $fieldName;
            echo '</td>';
        }
        echo '</tr>';
    }

    public function outputTables()
    {
        foreach ($this->tableNames as $tableName) {
            echo '<table style="font-size: 17px; border-spacing: 20px; text-align: left">';
            echo '<tr>';
            echo $tableName;
            echo '</tr>';
            $this->printTableFields($tableName);
            $this->printFieldValues($tableName);
            echo '</table>';
        }
    }
}
