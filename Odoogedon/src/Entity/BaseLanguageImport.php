<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseLanguageImport
 *
 * @ORM\Table(name="base_language_import", indexes={@ORM\Index(name="IDX_E2E9AE127C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E2E9AE124C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BaseLanguageImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_language_import_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Language Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=5, nullable=false, options={"comment"="ISO Code"})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false, options={"comment"="File"})
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", nullable=false, options={"comment"="File Name"})
     */
    private $filename;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="overwrite", type="boolean", nullable=true, options={"comment"="Overwrite Existing Terms"})
     */
    private $overwrite;

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
