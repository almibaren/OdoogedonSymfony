<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrAttachment
 *
 * @ORM\Table(name="ir_attachment", indexes={@ORM\Index(name="ir_attachment_checksum_index", columns={"checksum"}), @ORM\Index(name="ir_attachment_url_index", columns={"url"}), @ORM\Index(name="ir_attachment_res_idx", columns={"res_model", "res_id"}), @ORM\Index(name="IDX_3FF011707C455263", columns={"write_uid"}), @ORM\Index(name="IDX_3FF01170979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_3FF011704C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrAttachment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_attachment_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Attachment Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datas_fname", type="string", nullable=true, options={"comment"="File Name"})
     */
    private $datasFname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_name", type="string", nullable=true, options={"comment"="Resource Name"})
     */
    private $resName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_model", type="string", nullable=true, options={"comment"="Resource Model"})
     */
    private $resModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_field", type="string", nullable=true, options={"comment"="Resource Field"})
     */
    private $resField;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Resource ID"})
     */
    private $resId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Date Created"})
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=1024, nullable=true, options={"comment"="Url"})
     */
    private $url;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="public", type="boolean", nullable=true, options={"comment"="Is public document"})
     */
    private $public;

    /**
     * @var string|null
     *
     * @ORM\Column(name="access_token", type="string", nullable=true, options={"comment"="Access Token"})
     */
    private $accessToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="db_datas", type="blob", nullable=true, options={"comment"="Database Data"})
     */
    private $dbDatas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="store_fname", type="string", nullable=true, options={"comment"="Stored Filename"})
     */
    private $storeFname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_size", type="integer", nullable=true, options={"comment"="File Size"})
     */
    private $fileSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="checksum", type="string", length=40, nullable=true, options={"comment"="Checksum/SHA1"})
     */
    private $checksum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mimetype", type="string", nullable=true, options={"comment"="Mime Type"})
     */
    private $mimetype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="index_content", type="text", nullable=true, options={"comment"="Indexed Content"})
     */
    private $indexContent;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

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
