<?php
/**
 * CoolMS2 CLDR Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/cldr for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsCldr\Mapping\Traits;

use Zend\Form\Annotation as Form,
    CmsCldr\Mapping\TerritoryInterface;

trait TerritoryProviderTrait
{
    /**
     * @var TerritoryInterface
     *
     * @Form\Type("ObjectSelect")
     * @Form\Required(true)
     * @Form\Options({
     *      "empty_option":"Select territory",
     *      "target_class":"CmsCldr\Mapping\TerritoryInterface",
     *      "label":"Select territory",
     *      })
     */
    protected $territory;

    /**
     * @param TerritoryInterface $types
     */
    public function setTerritory(TerritoryInterface $territory)
    {
        $this->territory = $territory;
    }

    /**
     * @return TerritoryInterface
     */
    public function getTerritory()
    {
        return $this->territory;
    }
}
