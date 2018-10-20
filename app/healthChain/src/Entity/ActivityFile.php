<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class ActivityFile
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="activity_file")
 */
class ActivityFile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ActivityFile
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ActivityFile
     */
    public function setName(string $name): ActivityFile
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return ActivityFile
     */
    public function setFile(string $file): ActivityFile
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $file;
}