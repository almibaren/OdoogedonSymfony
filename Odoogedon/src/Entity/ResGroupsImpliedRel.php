<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResGroupsImpliedRel
 *
 * @ORM\Table(name="res_groups_implied_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_groups_implied_rel_gid_hid_key", columns={"gid", "hid"})}, indexes={@ORM\Index(name="res_groups_implied_rel_gid_idx", columns={"gid"}), @ORM\Index(name="res_groups_implied_rel_hid_idx", columns={"hid"})})
 * @ORM\Entity
 */
class ResGroupsImpliedRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_groups_implied_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hid", referencedColumnName="id")
     * })
     */
    private $hid;

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
