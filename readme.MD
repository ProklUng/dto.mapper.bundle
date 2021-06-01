# Надстройка над [AutoMapperPlusBundle](https://github.com/mark-gerarts/automapper-plus-bundle)

**INTERNAL**

### Установка

composer.json:

```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/proklung/dto.mapper.bundle"
        }
    ]
```

```bash

composer require proklung/dto-mapper-bundle

```

### Функционал

Сервис `dto_mapper_bundle.mapper` с двумя методами:

1) `convert($source, $destination)`
2) `convertCollection(iterable $sources, string $destination): iterable`

### Пример

Как-то так:

```php
class EmployeVersionTwo
{
    /**
     * @var string $firstName
     */
    private $firstName = 'first name version two';

    /**
     * @var string $lastName
     */
    private $lastName = 'last name version two';

    /**
     * @var string $unused
     */
    private $unused = '';

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
class EmployeDtoVersionTwo
{
    /**
     * @var string $firstName
     */
    public $firstName = 'first name dto';

    /**
     * @var string $lastName
     */
    public $lastName = 'last name dto';
}


$mapper = container()->get('dto_mapper_bundle.mapper');
$srcObj = new EmployeVersionTwo();

$result = $mapper->convert($srcObj, EmployeDtoVersionTwo::class);
var_dump($result);
```

Результат (замаппились свойства из исходного класса):

`object(EmployeDtoVersionTwo)#7268 (2) { ["firstName"]=> string(22) "first name version two" ["lastName"]=> string(21) "last name version two" } `