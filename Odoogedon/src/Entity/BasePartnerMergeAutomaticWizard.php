<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BasePartnerMergeAutomaticWizard
 *
 * @ORM\Table(name="base_partner_merge_automatic_wizard", indexes={@ORM\Index(name="IDX_63B5C5D87C455263", columns={"write_uid"}), @ORM\Index(name="IDX_63B5C5D84C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_63B5C5D8FFE76A5E", columns={"dst_partner_id"}), @ORM\Index(name="IDX_63B5C5D8E776F0C7", columns={"current_line_id"})})
 * @ORM\Entity
 */
class BasePartnerMergeAutomaticWizard
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_partner_merge_automatic_wizard_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_by_email", type="boolean", nullable=true, options={"comment"="Email"})
     */
    private $groupByEmail;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_by_name", type="boolean", nullable=true, options={"comment"="Name"})
     */
    private $groupByName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_by_is_company", type="boolean", nullable=true, options={"comment"="Is Company"})
     */
    private $groupByIsCompany;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_by_vat", type="boolean", nullable=true, options={"comment"="VAT"})
     */
    private $groupByVat;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_by_parent_id", type="boolean", nullable=true, options={"comment"="Parent Company"})
     */
    private $groupByParentId;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="State"})
     */
    private $state;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_group", type="integer", nullable=true, options={"comment"="Group of Contacts"})
     */
    private $numberGroup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="exclude_contact", type="boolean", nullable=true, options={"comment"="A user associated to the contact"})
     */
    private $excludeContact;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="exclude_journal_item", type="boolean", nullable=true, options={"comment"="Journal Items associated to the contact"})
     */
    private $excludeJournalItem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maximum_group", type="integer", nullable=true, options={"comment"="Maximum of Group of Contacts"})
     */
    private $maximumGroup;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dst_partner_id", referencedColumnName="id")
     * })
     */
    private $dstPartner;

    /**
     * @var \BasePartnerMergeLine
     *
     * @ORM\ManyToOne(targetEntity="BasePartnerMergeLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="current_line_id", referencedColumnName="id")
     * })
     */
    private $currentLine;


}
