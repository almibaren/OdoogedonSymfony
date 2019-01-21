<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailActivityRel
 *
 * @ORM\Table(name="mail_activity_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_activity_rel_activity_id_recommended_id_key", columns={"activity_id", "recommended_id"})}, indexes={@ORM\Index(name="mail_activity_rel_recommended_id_idx", columns={"recommended_id"}), @ORM\Index(name="mail_activity_rel_activity_id_idx", columns={"activity_id"})})
 * @ORM\Entity
 */
class MailActivityRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_activity_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MailActivityType
     *
     * @ORM\ManyToOne(targetEntity="MailActivityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recommended_id", referencedColumnName="id")
     * })
     */
    private $recommended;

    /**
     * @var \MailActivityType
     *
     * @ORM\ManyToOne(targetEntity="MailActivityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     * })
     */
    private $activity;


}
