# UlidType plugin for CakePHP

## Setup

### Install

```bash
$ composer require mitakeck/ulidtypes
```

### Model

- add `_initializeSchema()` method to `Model\Table` class to make id `ulid` type

```php
...
use Cake\Database\Schema\TableSchema;
...
class XXXXXXXXTable extends Table
{
    protected function _initializeSchema(TableSchema $table)
    {
        parent::_initializeSchema($table);
        $table->setColumnType('id', 'ulid'); // set ulid type for id

        return $table;
    }
}
...
```
