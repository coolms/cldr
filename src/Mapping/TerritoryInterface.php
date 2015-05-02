<?php
/**
 * CoolMS2 CLDR module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/cldr for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsCldr\Mapping;

use CmsCommon\Mapping\Common\IdentifiableInterface,
    CmsCommon\Mapping\Common\NameableInterface,
    CmsCommon\Mapping\Hierarchy\HierarchyInterface;

interface TerritoryInterface extends
    HierarchyInterface,
    IdentifiableInterface,
    NameableInterface
{
    /**
     * @return string
     */
    public function getShort();

    /**
     * @return string
     */
    public function getVariant();

    /**
     * @return Metadata
     */
    public function getMetadata();
}
