<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Activity
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="activity")
 */
class Activity
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Activity
     */
    public function setId(int $id): Activity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrevHash(): string
    {
        return $this->prevHash;
    }

    /**
     * @param string $prevHash
     * @return Activity
     */
    public function setPrevHash(string $prevHash): Activity
    {
        $this->prevHash = $prevHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextHash(): string
    {
        return $this->nextHash;
    }

    /**
     * @param string $nextHash
     * @return Activity
     */
    public function setNextHash(string $nextHash): Activity
    {
        $this->nextHash = $nextHash;
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
     * @return Activity
     */
    public function setName(string $name): Activity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Activity
     */
    public function setDescription(string $description): Activity
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param array $files
     * @return Activity
     */
    public function setFiles(array $files): Activity
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @return int
     */
    public function getPatient(): int
    {
        return $this->patient;
    }

    /**
     * @param int $patient
     * @return Activity
     */
    public function setPatient(int $patient): Activity
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoctor(): int
    {
        return $this->doctor;
    }

    /**
     * @param int $doctor
     * @return Activity
     */
    public function setDoctor(int $doctor): Activity
    {
        $this->doctor = $doctor;
        return $this;
    }

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $prevHash;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nextHash;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var array
     * @ORM\ManyToMany(targetEntity="ActivityFile")
     * @ORM\JoinTable(name="activity_files",
     *      joinColumns={@ORM\JoinColumn(name="activity_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="activity_file_id", referencedColumnName="id", unique=true)}
     *      )
     *
     */
    private $files;


    /**
     * @var int
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="doctor_id", referencedColumnName="id")
     */
    private $doctor;
}