<?php

declare(strict_types=1);

// These are not recognized as "used" even though it is defined in the glob pattern of composer-unused.php
use CmsIg\Seal\Schema\Field;
use CmsIg\Seal\Schema\Index;

return new Index('test', [
    'id' => new Field\IdentifierField('id'),
    'name' => new Field\TextField('name'),
]);
