<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsSendSms
 *
 * @ORM\Table(name="sms_send_sms", indexes={@ORM\Index(name="IDX_7A4F486F7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7A4F486F4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class SmsSendSms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sms_send_sms_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="recipients", type="string", nullable=false, options={"comment"="Recipients"})
     */
    private $recipients;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false, options={"comment"="Message"})
     */
    private $message;

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


}
