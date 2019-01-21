<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmibarenWormsHats
 *
 * @ORM\Table(name="almibaren_worms_hats", indexes={@ORM\Index(name="IDX_2E6A1EFD7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2E6A1EFD4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AlmibarenWormsHats
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almibaren_worms_hats_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_name", type="string", length=20, nullable=true, options={"comment"="Titulo corto"})
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Nombre"})
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_release", type="date", nullable=true, options={"comment"="Release Date"})
     */
    private $dateRelease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Descripcion"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prize", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Precio"})
     */
    private $prize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover", type="blob", nullable=true, options={"comment"="Imagen"})
     */
    private $cover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rating", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Valoración"})
     */
    private $rating;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Created on"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Updated on"})
     */
    private $writeDate;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param null|string $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateRelease()
    {
        return $this->dateRelease;
    }

    /**
     * @param \DateTime|null $dateRelease
     */
    public function setDateRelease($dateRelease)
    {
        $this->dateRelease = $dateRelease;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getPrize()
    {
        return $this->prize;
    }

    /**
     * @param null|string $prize
     */
    public function setPrize($prize)
    {
        $this->prize = $prize;
    }

    /**
     * @return null|string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param null|string $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    /**
     * @return null|string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param null|string $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }


}
