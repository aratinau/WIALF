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

public function getId(): ?int
{
    return $this->id;
}

/**
 * @Groups({"user:read"})
 * @Assert\NotBlank()
 */
private $foo;
```
