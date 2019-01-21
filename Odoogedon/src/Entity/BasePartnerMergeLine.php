<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BasePartnerMergeLine
 *
 * @ORM\Table(name="base_partner_merge_line", indexes={@ORM\Index(name="IDX_99AB08607C455263", columns={"write_uid"}), @ORM\Index(name="IDX_99AB08604C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_99AB086098899D61", columns={"wizard_id"})})
 * @ORM\Entity
 */
class BasePartnerMergeLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_partner_merge_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_id", type="integer", nullable=true, options={"comment"="MinID"})
     */
    private $minId;

    /**
     * @var string
     *
     * @ORM\Column(name="aggr_ids", type="string", nullable=false, options={"comment"="Ids"})
     */
    private $aggrIds;

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
     * @var \BasePartnerMergeAutomaticWizard
     *
     * @ORM\ManyToOne(targetEntity="BasePartnerMergeAutomaticWizard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wizard_id", referencedColumnName="id")
     * })
     */
    private $wizard;


}
