## Mogo
> Mogo is php library for export MYSQL database.
## Table of Contents
* Get started with Mogo
  * [Installation](#installation)
* Usage
  * [How to use](#usage)

## Installation

`
composer require synon/mogo
`

## How to use

```php
use Synon\Mogo\Mogo;

$object = new Mogo('localhost', 'username', 'password', 'database', 'exported database name');

echo $object->export();
```
Good Luck :)
