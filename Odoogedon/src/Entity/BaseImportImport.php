<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseImportImport
 *
 * @ORM\Table(name="base_import_import", indexes={@ORM\Index(name="IDX_69C441BC7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_69C441BC4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BaseImportImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_import_import_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_model", type="string", nullable=true, options={"comment"="Model"})
     */
    private $resModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="blob", nullable=true, options={"comment"="File"})
     */
    private $file;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_name", type="string", nullable=true, options={"comment"="File Name"})
     */
    private $fileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_type", type="string", nullable=true, options={"comment"="File Type"})
     */
    private $fileType;

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
