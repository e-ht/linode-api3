<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the GNU General Public License
//  along with the library. If not, see <http://www.gnu.org/licenses/>.
//
//----------------------------------------------------------------------

require_once(__DIR__ . '/../vendor/autoload.php');

use Linode\NodeBalancer\ConfigApi;
use Linode\BalancingAlgorithm;
use Linode\SessionPersistence;

class NodeBalancerConfigTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var ConfigApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new ConfigApi($this->key, true);
    }

    public function testCreate()
    {
        $NodeBalancerID = rand(1, PHP_INT_MAX);
        $Algorithm      = BalancingAlgorithm::ROUNDROBIN;
        $Stickiness     = SessionPersistence::HTTP_COOKIE;

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.create&NodeBalancerID={$NodeBalancerID}&Algorithm={$Algorithm}&Stickiness={$Stickiness}";
        $query = $this->api->create($NodeBalancerID, $Algorithm, $Stickiness);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $NodeBalancerID = rand(1, PHP_INT_MAX);
        $ConfigID       = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.delete&NodeBalancerID={$NodeBalancerID}&ConfigID={$ConfigID}";
        $query = $this->api->delete($NodeBalancerID, $ConfigID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $NodeBalancerID = rand(1, PHP_INT_MAX);
        $ConfigID       = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.list&NodeBalancerID={$NodeBalancerID}&ConfigID={$ConfigID}";
        $query = $this->api->getList($NodeBalancerID, $ConfigID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $ConfigID   = rand(1, PHP_INT_MAX);
        $Algorithm  = BalancingAlgorithm::ROUNDROBIN;
        $Stickiness = SessionPersistence::HTTP_COOKIE;

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.update&ConfigID={$ConfigID}&Algorithm={$Algorithm}&Stickiness={$Stickiness}";
        $query = $this->api->update($ConfigID, $Algorithm, $Stickiness);
        $this->assertEquals($expected, $query);
    }
}