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
    CmsCommon\Mapping\Common\NameableInterface;

interface ScriptInterface extends IdentifiableInterface, NameableInterface
{
    /**
     * @param string $numberCode
     */
    public function setNumberCode($numberCode);

    /**
     * @return string
     */
    public function getNumberCode();

    /**
     * @param string $alias
     */
    public function setUnicodeAlias($alias);

    /**
     * @return string
     */
    public function getUnicodeAlias();

    /**
     * @param array|Traversable $languages
     */
    public function setLanguages($languages);

    /**
     * @param array|Traversable $languages
     */
    public function addLanguages($languages);

    /**
     * @param LanguageInterface $language
     */
    public function addLanguage(LanguageInterface $language);

    /**
     * @param array|Traversable $languages
     */
    public function removeLanguages($languages);

    /**
     * @param LanguageInterface $language
     */
    public function removeLanguage(LanguageInterface $language);

    /**
     * Removes all languages
     */
    public function clearLanguages();

    /**
     * @return LanguageInterface[]
     */
    public function getLanguages();
}
