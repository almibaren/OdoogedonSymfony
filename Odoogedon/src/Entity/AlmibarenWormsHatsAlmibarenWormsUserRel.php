<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmibarenWormsHatsAlmibarenWormsUserRel
 *
 * @ORM\Table(name="almibaren_worms_hats_almibaren_worms_user_rel", uniqueConstraints={@ORM\UniqueConstraint(name="almibaren_worms_hats_almibare_almibaren_worms_user_id_almib_key", columns={"almibaren_worms_user_id", "almibaren_worms_hats_id"})}, indexes={@ORM\Index(name="almibaren_worms_hats_almibaren_worm_almibaren_worms_hats_id_idx", columns={"almibaren_worms_hats_id"}), @ORM\Index(name="almibaren_worms_hats_almibaren_worm_almibaren_worms_user_id_idx", columns={"almibaren_worms_user_id"})})
 * @ORM\Entity
 */
class AlmibarenWormsHatsAlmibarenWormsUserRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almibaren_worms_hats_almibaren_worms_user_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \AlmibarenWormsUser
     *
     * @ORM\ManyToOne(targetEntity="AlmibarenWormsUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almibaren_worms_user_id", referencedColumnName="id")
     * })
     */
    private $almibarenWormsUser;

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

    /**
     * @return \AlmibarenWormsUser
     */
    public function getAlmibarenWormsUser()
    {
        return $this->almibarenWormsUser;
    }

    /**
     * @param \AlmibarenWormsUser $almibarenWormsUser
     */
    public function setAlmibarenWormsUser($almibarenWormsUser)
    {
        $this->almibarenWormsUser = $almibarenWormsUser;
    }


}
