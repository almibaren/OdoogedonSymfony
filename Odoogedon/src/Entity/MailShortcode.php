<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailShortcode
 *
 * @ORM\Table(name="mail_shortcode", indexes={@ORM\Index(name="mail_shortcode_source_index", columns={"source"}), @ORM\Index(name="mail_shortcode_substitution_index", columns={"substitution"}), @ORM\Index(name="IDX_35E4779E7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_35E4779E4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class MailShortcode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_shortcode_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", nullable=false, options={"comment"="Shortcut"})
     */
    private $source;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unicode_source", type="string", nullable=true, options={"comment"="Unicode Character"})
     */
    private $unicodeSource;

    /**
     * @var string
     *
     * @ORM\Column(name="substitution", type="text", nullable=false, options={"comment"="Substitution"})
     */
    private $substitution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcode_type", type="string", nullable=false, options={"comment"="Shortcode Type"})
     */
    private $shortcodeType;

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
