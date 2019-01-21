<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailFollowersMailMessageSubtypeRel
 *
 * @ORM\Table(name="mail_followers_mail_message_subtype_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_followers_mail_message_s_mail_followers_id_mail_messag_key", columns={"mail_followers_id", "mail_message_subtype_id"})}, indexes={@ORM\Index(name="mail_followers_mail_message_subtype_mail_message_subtype_id_idx", columns={"mail_message_subtype_id"}), @ORM\Index(name="mail_followers_mail_message_subtype_rel_mail_followers_id_idx", columns={"mail_followers_id"})})
 * @ORM\Entity
 */
class MailFollowersMailMessageSubtypeRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_followers_mail_message_subtype_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MailMessageSubtype
     *
     * @ORM\ManyToOne(targetEntity="MailMessageSubtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_message_subtype_id", referencedColumnName="id")
     * })
     */
    private $mailMessageSubtype;

    /**
     * @var \MailFollowers
     *
     * @ORM\ManyToOne(targetEntity="MailFollowers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_followers_id", referencedColumnName="id")
     * })
     */
    private $mailFollowers;


}
