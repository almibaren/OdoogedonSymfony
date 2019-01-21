<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmibarenWormsImages
 *
 * @ORM\Table(name="almibaren_worms_images", indexes={@ORM\Index(name="IDX_B906B3C77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B906B3C74C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AlmibarenWormsImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almibaren_worms_images_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Nombre"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", nullable=false, options={"comment"="Ruta"})
     */
    private $path;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover", type="blob", nullable=true, options={"comment"="Imagen"})
     */
    private $cover;

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
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
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


}
