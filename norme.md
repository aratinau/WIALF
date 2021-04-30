# Norme

## Entity

```php
<?php

/**
 * @ORM\HasLifecycleCallbacks()
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PlanOptionRepository::class)
 * @ApiFilter(OrderFilter::class)
 */
class User 
{
	$id
	$createdAt
	$updatedAt

	/**
	 * @Groups({"user:read"})
	 * @Assert\NotBlank()
	 */
	private $foo;

	public function __construct()
	{

	}

	/**
	 * @ORM\PreRemove()
	 */
	public function preRemove()
	{

	}

	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	* @SerializedName("isRequestPaid")
	* @Groups({"admin:read", "request:read"})
	*/
	public function isRequestPaid()
	{
		return $this->getRequestPayement()->getPayementStatus();
	}

	/**
	* @ORM\PreRemove()
	*/
	public function preRemove()
	{
	if ($this->requestPayement->count() > 0)
	{
	    throw new \Exception("You can't do that.", 403);
	}
	
	/**
	* @Groups({"admin:read", "request_payement:collection:post", "request_payement:read"})
	* @Assert\NotBlank(message="Vous devez choisir une formule.")
	* @ORM\ManyToOne(targetEntity=Plan::class)
	* @ORM\JoinColumn(nullable=false)
	*/
	private $plan;
	
	public function setOwner(?User $owner): self
```
