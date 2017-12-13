<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Address
 *
 * @ORM\Embeddable()
 */
class Address
{
    /**
     * @var string
     * @ORM\Column()
     * @Assert\NotBlank()
     */
    private $line1;

    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $line2;

    /**
     * @var string
     * @ORM\Column()
     * @Assert\NotBlank()
     */
    private $city;

    public function __construct(string $line1, string $city, string $line2 = null)
    {
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->city  = $city;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}
