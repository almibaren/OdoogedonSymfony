<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelModulesLangexport
 *
 * @ORM\Table(name="rel_modules_langexport", uniqueConstraints={@ORM\UniqueConstraint(name="rel_modules_langexport_wiz_id_module_id_key", columns={"wiz_id", "module_id"})}, indexes={@ORM\Index(name="rel_modules_langexport_wiz_id_idx", columns={"wiz_id"}), @ORM\Index(name="rel_modules_langexport_module_id_idx", columns={"module_id"})})
 * @ORM\Entity
 */
class RelModulesLangexport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rel_modules_langexport_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \IrModuleModule
     *
     * @ORM\ManyToOne(targetEntity="IrModuleModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     * })
     */
    private $module;

    /**
     * @var \BaseLanguageExport
     *
     * @ORM\ManyToOne(targetEntity="BaseLanguageExport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wiz_id", referencedColumnName="id")
     * })
     */
    private $wiz;


}
