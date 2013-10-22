<?php
/**
 * VersionProviderInterface.php
 *
 * @copyright 2013 Maxwell Vandervelde
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Ink\VersionTagBundle\Data\Provider;

/**
 * Version Provider Interface
 *
 * @author Maxwell Vandervelde <Max@MaxVandervelde.com>
 */
interface VersionProviderInterface
{
    /**
     * Get Version
     *
     * Gets the application version string or null if none is set
     *
     * @return string|null
     */
    public function getVersion();
}
