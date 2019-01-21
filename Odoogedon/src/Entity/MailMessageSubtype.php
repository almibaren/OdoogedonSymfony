<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMessageSubtype
 *
 * @ORM\Table(name="mail_message_subtype", indexes={@ORM\Index(name="IDX_87582BAC7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_87582BAC4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_87582BAC727ACA70", columns={"parent_id"})})
 * @ORM\Entity
 */
class MailMessageSubtype
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_message_subtype_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Message Type"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="internal", type="boolean", nullable=true, options={"comment"="Internal Only"})
     */
    private $internal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relation_field", type="string", nullable=true, options={"comment"="Relation field"})
     */
    private $relationField;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_model", type="string", nullable=true, options={"comment"="Model"})
     */
    private $resModel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default", type="boolean", nullable=true, options={"comment"="Default"})
     */
    private $default;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=true, options={"comment"="Hidden"})
     */
    private $hidden;

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
     * @var \MailMessageSubtype
     *
     * @ORM\ManyToOne(targetEntity="MailMessageSubtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}
