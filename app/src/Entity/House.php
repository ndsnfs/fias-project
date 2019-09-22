<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HouseRepository")
 * @ApiResource(
 *      itemOperations = {
 *          "get"={
 *              "method"="GET",
 *              "path"="/house/{guid}.{_format}",
 *          },
 *      },
 *      collectionOperations = {
 *          "get"={
 *              "method"="GET",
 *              "path"="/house.{_format}",
 *              "controller"="App\Controller\HouseController::list",
 *          },
 *     },
 * )
 */
class House
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $guid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }
}
