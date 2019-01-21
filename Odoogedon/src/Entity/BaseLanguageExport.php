<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseLanguageExport
 *
 * @ORM\Table(name="base_language_export", indexes={@ORM\Index(name="IDX_3D2B769B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_3D2B769B4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BaseLanguageExport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_language_export_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="File Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", nullable=false, options={"comment"="Language"})
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", nullable=false, options={"comment"="File Format"})
     */
    private $format;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="blob", nullable=true, options={"comment"="File"})
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="State"})
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
