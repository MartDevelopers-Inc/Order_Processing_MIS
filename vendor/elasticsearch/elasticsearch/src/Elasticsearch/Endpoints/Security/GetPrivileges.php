<?php
/* 
 *  This is the default license template.
 *  
 *  File: GetPrivileges.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetPrivileges
 * Elasticsearch API name security.get_privileges
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.14.0-SNAPSHOT (0c2e2f790af0e57b13ad6bf883541a4fea9651d4)
 */
class GetPrivileges extends AbstractEndpoint
{
    protected $application;
    protected $name;

    public function getURI(): string
    {
        $application = $this->application ?? null;
        $name = $this->name ?? null;

        if (isset($application) && isset($name)) {
            return "/_security/privilege/$application/$name";
        }
        if (isset($application)) {
            return "/_security/privilege/$application";
        }
        return "/_security/privilege";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setApplication($application): GetPrivileges
    {
        if (isset($application) !== true) {
            return $this;
        }
        $this->application = $application;

        return $this;
    }

    public function setName($name): GetPrivileges
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
