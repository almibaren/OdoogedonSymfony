<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RuleGroupRel
 *
 * @ORM\Table(name="rule_group_rel", uniqueConstraints={@ORM\UniqueConstraint(name="rule_group_rel_rule_group_id_group_id_key", columns={"rule_group_id", "group_id"})}, indexes={@ORM\Index(name="rule_group_rel_rule_group_id_idx", columns={"rule_group_id"}), @ORM\Index(name="rule_group_rel_group_id_idx", columns={"group_id"})})
 * @ORM\Entity
 */
class RuleGroupRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rule_group_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \IrRule
     *
     * @ORM\ManyToOne(targetEntity="IrRule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rule_group_id", referencedColumnName="id")
     * })
     */
    private $ruleGroup;


}
