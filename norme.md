# Norme

## Entity

```php
$id
$createdAt
$updatedAt

__construct()

/**
 * @ORM\PreRemove()
 */
public function preRemove() {}


/**
 * @Groups({"user:read"})
 * @Assert\NotBlank()
 */
private $foo;
```
