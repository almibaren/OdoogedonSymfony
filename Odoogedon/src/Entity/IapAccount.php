<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IapAccount
 *
 * @ORM\Table(name="iap_account", indexes={@ORM\Index(name="IDX_E2C4DD7A7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E2C4DD7A4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_E2C4DD7A979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class IapAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="iap_account_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_name", type="string", nullable=true, options={"comment"="Service Name"})
     */
    private $serviceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_token", type="string", nullable=true, options={"comment"="Account Token"})
     */
    private $accountToken;

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

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
