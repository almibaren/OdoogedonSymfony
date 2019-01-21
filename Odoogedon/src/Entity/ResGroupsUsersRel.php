<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResGroupsUsersRel
 *
 * @ORM\Table(name="res_groups_users_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_groups_users_rel_gid_uid_key", columns={"gid", "uid"})}, indexes={@ORM\Index(name="res_groups_users_rel_gid_idx", columns={"gid"}), @ORM\Index(name="res_groups_users_rel_uid_idx", columns={"uid"})})
 * @ORM\Entity
 */
class ResGroupsUsersRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_groups_users_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uid", referencedColumnName="id")
     * })
     */
    private $uid;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gid", referencedColumnName="id")
     * })
     */
    private $gid;


}
