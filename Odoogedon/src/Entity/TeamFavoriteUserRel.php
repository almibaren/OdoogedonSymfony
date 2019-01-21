<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamFavoriteUserRel
 *
 * @ORM\Table(name="team_favorite_user_rel", uniqueConstraints={@ORM\UniqueConstraint(name="team_favorite_user_rel_team_id_user_id_key", columns={"team_id", "user_id"})}, indexes={@ORM\Index(name="team_favorite_user_rel_team_id_idx", columns={"team_id"}), @ORM\Index(name="team_favorite_user_rel_user_id_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class TeamFavoriteUserRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="team_favorite_user_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \CrmTeam
     *
     * @ORM\ManyToOne(targetEntity="CrmTeam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;


}
