<?php namespace DCarbone\PHPConsulAPI\Operator;

/*
   Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractModel;

/**
 * Class Area
 * @package DCarbone\PHPConsulAPI\Operator
 */
class Area extends AbstractModel {
    /** @var string */
    public $ID = '';
    /** @var string */
    public $PeerDatacenter = '';
    /** @var string[] */
    public $RetryJoin = [];
    /** @var bool */
    public $UseTLS = false;

    /**
     * @return string
     */
    public function getID(): string {
        return $this->ID;
    }

    /**
     * @param string $id
     * @return Area
     */
    public function setID(string $id): Area {
        $this->ID = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeerDatacenter(): string {
        return $this->PeerDatacenter;
    }

    /**
     * @param string $peerDatacenter
     * @return Area
     */
    public function setPeerDatacenter(string $peerDatacenter): Area {
        $this->PeerDatacenter = $peerDatacenter;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRetryJoin(): array {
        return $this->RetryJoin;
    }

    /**
     * @param string[] $retryJoin
     * @return Area
     */
    public function setRetryJoin(array $retryJoin): Area {
        $this->RetryJoin = $retryJoin;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUseTLS(): bool {
        return $this->UseTLS;
    }

    /**
     * @param bool $useTLS
     * @return Area
     */
    public function setUseTLS(bool $useTLS): Area {
        $this->UseTLS = $useTLS;
        return $this;
    }
}