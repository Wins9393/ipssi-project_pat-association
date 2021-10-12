<?php

namespace App\Entity;

class Pet{

    public int $id;
    public string $name;
    public int $age;
    public bool $booked;
    public string $image;
    public $createdAt;

    public function hydrate (array $pets)
    {
        foreach ($pets as $key => $pet) {
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($pet);
            }
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getBooked()
    {
        return $this->booked;
    }

    /**
     * @param bool $booked
     */
    public function setBooked(bool $booked): void
    {
        $this->booked = $booked;
    }

     /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}