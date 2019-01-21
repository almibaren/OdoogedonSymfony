<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmibarenWormsHatsAlmibarenWormsImagesRel
 *
 * @ORM\Table(name="almibaren_worms_hats_almibaren_worms_images_rel", uniqueConstraints={@ORM\UniqueConstraint(name="almibaren_worms_hats_almibare_almibaren_worms_hats_id_almib_key", columns={"almibaren_worms_hats_id", "almibaren_worms_images_id"})}, indexes={@ORM\Index(name="almibaren_worms_hats_almibaren_wo_almibaren_worms_images_id_idx", columns={"almibaren_worms_images_id"}), @ORM\Index(name="almibaren_worms_hats_almibaren_wor_almibaren_worms_hats_id_idx1", columns={"almibaren_worms_hats_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\AlmibarenLibreria")
 */
class AlmibarenWormsHatsAlmibarenWormsImagesRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almibaren_worms_hats_almibaren_worms_images_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AlmibarenWormsImages
     *
     * @ORM\ManyToOne(targetEntity="AlmibarenWormsImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almibaren_worms_images_id", referencedColumnName="id")
     * })
     */
    private $almibarenWormsImages;

    /**
     * @var \AlmibarenWormsHats
     *
     * @ORM\ManyToOne(targetEntity="AlmibarenWormsHats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almibaren_worms_hats_id", referencedColumnName="id")
     * })
     */
    private $almibarenWormsHats;

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
     * @return \AlmibarenWormsImages
     */
    public function getAlmibarenWormsImages()
    {
        return $this->almibarenWormsImages;
    }

    /**
     * @param \AlmibarenWormsImages $almibarenWormsImages
     */
    public function setAlmibarenWormsImages($almibarenWormsImages)
    {
        $this->almibarenWormsImages = $almibarenWormsImages;
    }

    /**
     * @return \AlmibarenWormsHats
     */
    public function getAlmibarenWormsHats()
    {
        return $this->almibarenWormsHats;
    }

    /**
     * @param \AlmibarenWormsHats $almibarenWormsHats
     */
    public function setAlmibarenWormsHats($almibarenWormsHats)
    {
        $this->almibarenWormsHats = $almibarenWormsHats;
    }


}
