<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModuleModule
 *
 * @ORM\Table(name="ir_module_module", uniqueConstraints={@ORM\UniqueConstraint(name="name_uniq", columns={"name"}), @ORM\UniqueConstraint(name="ir_module_module_name_uniq", columns={"name"})}, indexes={@ORM\Index(name="ir_module_module_name_index", columns={"name"}), @ORM\Index(name="ir_module_module_category_id_index", columns={"category_id"}), @ORM\Index(name="ir_module_module_state_index", columns={"state"}), @ORM\Index(name="IDX_7E97FCDF7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7E97FCDF4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModuleModule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_module_module_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true)
     */
    private $writeDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="string", nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author", type="string", nullable=true)
     */
    private $author;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", nullable=true)
     */
    private $icon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=16, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latest_version", type="string", nullable=true)
     */
    private $latestVersion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shortdesc", type="string", nullable=true)
     */
    private $shortdesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="application", type="boolean", nullable=true)
     */
    private $application = false;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="demo", type="boolean", nullable=true)
     */
    private $demo = false;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="web", type="boolean", nullable=true)
     */
    private $web = false;

    /**
     * @var string|null
     *
     * @ORM\Column(name="license", type="string", length=32, nullable=true)
     */
    private $license;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"default"="100"})
     */
    private $sequence = '100';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_install", type="boolean", nullable=true)
     */
    private $autoInstall = false;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maintainer", type="string", nullable=true, options={"comment"="Maintainer"})
     */
    private $maintainer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contributors", type="text", nullable=true, options={"comment"="Contributors"})
     */
    private $contributors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="published_version", type="string", nullable=true, options={"comment"="Published Version"})
     */
    private $publishedVersion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", nullable=true, options={"comment"="URL"})
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menus_by_module", type="text", nullable=true, options={"comment"="Menus"})
     */
    private $menusByModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reports_by_module", type="text", nullable=true, options={"comment"="Reports"})
     */
    private $reportsByModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="views_by_module", type="text", nullable=true, options={"comment"="Views"})
     */
    private $viewsByModule;

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
     * @var \IrModuleCategory
     *
     * @ORM\ManyToOne(targetEntity="IrModuleCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}
