<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailFollowers
 *
 * @ORM\Table(name="mail_followers", uniqueConstraints={@ORM\UniqueConstraint(name="mail_followers_mail_followers_res_channel_res_model_id_uniq", columns={"res_model", "res_id", "channel_id"}), @ORM\UniqueConstraint(name="mail_followers_mail_followers_res_partner_res_model_id_uniq", columns={"res_model", "res_id", "partner_id"})}, indexes={@ORM\Index(name="mail_followers_res_id_index", columns={"res_id"}), @ORM\Index(name="mail_followers_partner_id_index", columns={"partner_id"}), @ORM\Index(name="mail_followers_res_model_index", columns={"res_model"}), @ORM\Index(name="mail_followers_channel_id_index", columns={"channel_id"})})
 * @ORM\Entity
 */
class MailFollowers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_followers_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="res_model", type="string", nullable=false, options={"comment"="Related Document Model Name"})
     */
    private $resModel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Related Document ID"})
     */
    private $resId;

    /**
     * @var \MailChannel
     *
     * @ORM\ManyToOne(targetEntity="MailChannel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="channel_id", referencedColumnName="id")
     * })
     */
    private $channel;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}
