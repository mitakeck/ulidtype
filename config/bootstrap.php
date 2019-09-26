<?php

use Cake\Database\Type;
use Cake\Core\Plugin;
use mitakeck\UlidTypes\Database\Type\UlidType;

Type::map('ulid', 'mitakeck\UlidTypes\Database\Type\UlidType');
