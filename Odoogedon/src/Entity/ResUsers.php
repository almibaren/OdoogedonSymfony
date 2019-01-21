<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResUsers
 *
 * @ORM\Table(name="res_users", uniqueConstraints={@ORM\UniqueConstraint(name="res_users_login_key", columns={"login"})}, indexes={@ORM\Index(name="IDX_52AE73425C721A3C", columns={"sale_team_id"}), @ORM\Index(name="IDX_52AE73425E564AE2", columns={"alias_id"}), @ORM\Index(name="IDX_52AE73427C455263", columns={"write_uid"}), @ORM\Index(name="IDX_52AE73424C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_52AE7342979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_52AE73429393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class ResUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_users_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", nullable=false)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature", type="text", nullable=true, options={"comment"="Signature"})
     */
    private $signature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="action_id", type="integer", nullable=true, options={"comment"="Home Action"})
     */
    private $actionId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="share", type="boolean", nullable=true, options={"comment"="Share User"})
     */
    private $share;

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
     * @var string|null
     *
     * @ORM\Column(name="password_crypt", type="string", nullable=true, options={"comment"="Encrypted Password"})
     */
    private $passwordCrypt;

    /**
     * @var string
     *
     * @ORM\Column(name="notification_type", type="string", nullable=false, options={"comment"="Notification Management"})
     */
    private $notificationType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_sales_won", type="integer", nullable=true, options={"comment"="Won in Opportunities Target"})
     */
    private $targetSalesWon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_sales_done", type="integer", nullable=true, options={"comment"="Activities Done Target"})
     */
    private $targetSalesDone;

    /**
     * @var \CrmTeam
     *
     * @ORM\ManyToOne(targetEntity="CrmTeam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_team_id", referencedColumnName="id")
     * })
     */
    private $saleTeam;

    /**
     * @var \MailAlias
     *
     * @ORM\ManyToOne(targetEntity="MailAlias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_id", referencedColumnName="id")
     * })
     */
    private $alias;

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
