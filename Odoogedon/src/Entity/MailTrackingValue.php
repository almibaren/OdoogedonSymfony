<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailTrackingValue
 *
 * @ORM\Table(name="mail_tracking_value", indexes={@ORM\Index(name="mail_tracking_value_mail_message_id_index", columns={"mail_message_id"}), @ORM\Index(name="IDX_FF872FB07C455263", columns={"write_uid"}), @ORM\Index(name="IDX_FF872FB04C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class MailTrackingValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_tracking_value_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", nullable=false, options={"comment"="Changed Field"})
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="field_desc", type="string", nullable=false, options={"comment"="Field Description"})
     */
    private $fieldDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_type", type="string", nullable=true, options={"comment"="Field Type"})
     */
    private $fieldType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="old_value_integer", type="integer", nullable=true, options={"comment"="Old Value Integer"})
     */
    private $oldValueInteger;

    /**
     * @var float|null
     *
     * @ORM\Column(name="old_value_float", type="float", precision=10, scale=0, nullable=true, options={"comment"="Old Value Float"})
     */
    private $oldValueFloat;

    /**
     * @var float|null
     *
     * @ORM\Column(name="old_value_monetary", type="float", precision=10, scale=0, nullable=true, options={"comment"="Old Value Monetary"})
     */
    private $oldValueMonetary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="old_value_char", type="string", nullable=true, options={"comment"="Old Value Char"})
     */
    private $oldValueChar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="old_value_text", type="text", nullable=true, options={"comment"="Old Value Text"})
     */
    private $oldValueText;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="old_value_datetime", type="datetime", nullable=true, options={"comment"="Old Value DateTime"})
     */
    private $oldValueDatetime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="new_value_integer", type="integer", nullable=true, options={"comment"="New Value Integer"})
     */
    private $newValueInteger;

    /**
     * @var float|null
     *
     * @ORM\Column(name="new_value_float", type="float", precision=10, scale=0, nullable=true, options={"comment"="New Value Float"})
     */
    private $newValueFloat;

    /**
     * @var float|null
     *
     * @ORM\Column(name="new_value_monetary", type="float", precision=10, scale=0, nullable=true, options={"comment"="New Value Monetary"})
     */
    private $newValueMonetary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="new_value_char", type="string", nullable=true, options={"comment"="New Value Char"})
     */
    private $newValueChar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="new_value_text", type="text", nullable=true, options={"comment"="New Value Text"})
     */
    private $newValueText;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="new_value_datetime", type="datetime", nullable=true, options={"comment"="New Value Datetime"})
     */
    private $newValueDatetime;

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
     * @var \MailMessage
     *
     * @ORM\ManyToOne(targetEntity="MailMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_message_id", referencedColumnName="id")
     * })
     */
    private $mailMessage;


}
