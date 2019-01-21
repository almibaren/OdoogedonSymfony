<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResGroupsReportRel
 *
 * @ORM\Table(name="res_groups_report_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_groups_report_rel_uid_gid_key", columns={"uid", "gid"})}, indexes={@ORM\Index(name="res_groups_report_rel_uid_idx", columns={"uid"}), @ORM\Index(name="res_groups_report_rel_gid_idx", columns={"gid"})})
 * @ORM\Entity
 */
class ResGroupsReportRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_groups_report_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gid", referencedColumnName="id")
     * })
     */
    private $gid;

    /**
     * @var \IrActReportXml
     *
     * @ORM\ManyToOne(targetEntity="IrActReportXml")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uid", referencedColumnName="id")
     * })
     */
    private $uid;


}
