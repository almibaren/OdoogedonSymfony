<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseLanguageInstall
 *
 * @ORM\Table(name="base_language_install", indexes={@ORM\Index(name="IDX_BF0A07887C455263", columns={"write_uid"}), @ORM\Index(name="IDX_BF0A07884C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BaseLanguageInstall
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_language_install_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", nullable=false, options={"comment"="Language"})
     */
    private $lang;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="overwrite", type="boolean", nullable=true, options={"comment"="Overwrite Existing Terms"})
     */
    private $overwrite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

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
