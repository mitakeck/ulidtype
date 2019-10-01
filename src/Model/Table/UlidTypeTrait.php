<?php
namespace mitakeck\UlidTypes\Model\Table;

use Cake\Database\Schema\TableSchema;

trait UlidTypeTrait {
    protected function _initializeSchema(TableSchema $table)
    {
        $table->setColumnType('id', 'ulid'); // set ulid type for id

        return $table;
    }
}
