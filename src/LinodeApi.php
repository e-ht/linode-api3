<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the MIT License along with
//  the library. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------


namespace Linode;

/**
 * This class is autogenerated.
 *
 * @version Linode API v3.3
 */
class LinodeApi extends BaseLinodeApi
{
    /**
     * Issues a boot job for the provided ConfigID.
     * If no ConfigID is provided boots the last used configuration profile, or the first configuration profile if this Linode has never been booted.
     *
     * @param int $LinodeID [required]
     * @param int $ConfigID [optional] The ConfigID to boot, available from linode.config.list().
     *
     * @return array
     */
    public function boot($LinodeID, $ConfigID = null)
    {
        return $this->call('linode.boot', array(
            'LinodeID' => $LinodeID,
            'ConfigID' => $ConfigID,
        ));
    }

    /**
     * Creates a Linode and assigns you full privileges.
     * There is a 75-linodes-per-hour limiter.
     *
     * @param int $DatacenterID [required] The DatacenterID from avail.datacenters() where you wish to place this new Linode
     * @param int $PlanID       [required] The desired PlanID available from avail.LinodePlans()
     * @param int $PaymentTerm  [optional] Subscription term in months for prepaid customers.  One of: 1, 12, or 24
     *
     * @return array
     */
    public function create($DatacenterID, $PlanID, $PaymentTerm = null)
    {
        return $this->call('linode.create', array(
            'DatacenterID' => $DatacenterID,
            'PlanID'       => $PlanID,
            'PaymentTerm'  => $PaymentTerm,
        ));
    }

    /**
     * Immediately removes a Linode from your account and issues a pro-rated credit back to your account, if applicable.
     * To prevent accidental deletes, this requires the Linode has no Disk images.
     * You must first delete its disk images.".
     *
     * @param int  $LinodeID   [required] The LinodeID to delete
     * @param bool $skipChecks [optional] Skips the safety checks and will always delete the Linode
     *
     * @return array
     */
    public function delete($LinodeID, $skipChecks = null)
    {
        return $this->call('linode.delete', array(
            'LinodeID'   => $LinodeID,
            'skipChecks' => $skipChecks,
        ));
    }

    /**
     * Creates a new Linode, assigns you full privileges, and then clones the specified LinodeID to the new Linode.
     * There is a limit of 5 active clone operations per source Linode.
     * It is recommended that the source Linode be powered down during the clone.
     *
     * @param int    $LinodeID     [required] The LinodeID that you want cloned
     * @param int    $DatacenterID [required] The DatacenterID from avail.datacenters() where you wish to place this new Linode
     * @param int    $PlanID       [required] The desired PlanID available from avail.LinodePlans()
     * @param int    $PaymentTerm  [optional] Subscription term in months for prepaid customers.  One of: 1, 12, or 24
     * @param string $hypervisor   [optional]
     *
     * @return array
     */
    public function duplicate($LinodeID, $DatacenterID, $PlanID, $PaymentTerm = null, $hypervisor = null)
    {
        return $this->call('linode.clone', array(
            'LinodeID'     => $LinodeID,
            'DatacenterID' => $DatacenterID,
            'PlanID'       => $PlanID,
            'PaymentTerm'  => $PaymentTerm,
            'hypervisor'   => $hypervisor,
        ));
    }

    /**
     * Returns a list of all Linodes user has access or delete to, including some properties.
     * Status values are -1: Being Created, 0: Brand New, 1: Running, and 2: Powered Off.
     *
     * @param int $LinodeID [optional] Limits the list to the specified LinodeID
     *
     * @return array
     */
    public function getList($LinodeID = null)
    {
        return $this->call('linode.list', array(
            'LinodeID' => $LinodeID,
        ));
    }

    /**
     * Upgrades a Linode to its next generation.
     *
     * @param int $LinodeID [required]
     *
     * @return array
     */
    public function mutate($LinodeID)
    {
        return $this->call('linode.mutate', array(
            'LinodeID' => $LinodeID,
        ));
    }

    /**
     * Issues a shutdown, and then boot job for a given LinodeID.
     *
     * @param int $LinodeID [required]
     * @param int $ConfigID [optional]
     *
     * @return array
     */
    public function reboot($LinodeID, $ConfigID = null)
    {
        return $this->call('linode.reboot', array(
            'LinodeID' => $LinodeID,
            'ConfigID' => $ConfigID,
        ));
    }

    /**
     * Resizes a Linode from one plan to another.
     * Immediately shuts the Linode down, charges/credits the account, and issue a migration to another host server.
     *
     * @param int $LinodeID [required]
     * @param int $PlanID   [required] The desired PlanID available from avail.LinodePlans()
     *
     * @return array
     */
    public function resize($LinodeID, $PlanID)
    {
        return $this->call('linode.resize', array(
            'LinodeID' => $LinodeID,
            'PlanID'   => $PlanID,
        ));
    }

    /**
     * Issues a shutdown job for a given LinodeID.
     *
     * @param int $LinodeID [required]
     *
     * @return array
     */
    public function shutdown($LinodeID)
    {
        return $this->call('linode.shutdown', array(
            'LinodeID' => $LinodeID,
        ));
    }

    /**
     * Updates a Linode's properties.
     *
     * @param int    $LinodeID                [required]
     * @param string $Label                   [optional] This Linode's label
     * @param string $lpm_displayGroup        [optional] Display group in the Linode list inside the Linode Manager
     * @param bool   $Alert_cpu_enabled       [optional] Enable the cpu usage email alert
     * @param int    $Alert_cpu_threshold     [optional] CPU Alert threshold, percentage 0-800
     * @param bool   $Alert_diskio_enabled    [optional] Enable the disk IO email alert
     * @param int    $Alert_diskio_threshold  [optional] IO ops/sec
     * @param bool   $Alert_bwin_enabled      [optional] Enable the incoming bandwidth email alert
     * @param int    $Alert_bwin_threshold    [optional] Mb/sec
     * @param bool   $Alert_bwout_enabled     [optional] Enable the outgoing bandwidth email alert
     * @param int    $Alert_bwout_threshold   [optional] Mb/sec
     * @param bool   $Alert_bwquota_enabled   [optional] Enable the bw quote email alert
     * @param int    $Alert_bwquota_threshold [optional] Percentage of monthly bw quota
     * @param int    $backupWindow            [optional]
     * @param int    $backupWeeklyDay         [optional]
     * @param bool   $watchdog                [optional] Enable the Lassie shutdown watchdog
     * @param bool   $ms_ssh_disabled         [optional]
     * @param string $ms_ssh_user             [optional]
     * @param string $ms_ssh_ip               [optional]
     * @param int    $ms_ssh_port             [optional]
     *
     * @return array
     */
    public function update($LinodeID, $Label = null, $lpm_displayGroup = null, $Alert_cpu_enabled = null, $Alert_cpu_threshold = null, $Alert_diskio_enabled = null, $Alert_diskio_threshold = null, $Alert_bwin_enabled = null, $Alert_bwin_threshold = null, $Alert_bwout_enabled = null, $Alert_bwout_threshold = null, $Alert_bwquota_enabled = null, $Alert_bwquota_threshold = null, $backupWindow = null, $backupWeeklyDay = null, $watchdog = null, $ms_ssh_disabled = null, $ms_ssh_user = null, $ms_ssh_ip = null, $ms_ssh_port = null)
    {
        return $this->call('linode.update', array(
            'LinodeID'                => $LinodeID,
            'Label'                   => $Label,
            'lpm_displayGroup'        => $lpm_displayGroup,
            'Alert_cpu_enabled'       => $Alert_cpu_enabled,
            'Alert_cpu_threshold'     => $Alert_cpu_threshold,
            'Alert_diskio_enabled'    => $Alert_diskio_enabled,
            'Alert_diskio_threshold'  => $Alert_diskio_threshold,
            'Alert_bwin_enabled'      => $Alert_bwin_enabled,
            'Alert_bwin_threshold'    => $Alert_bwin_threshold,
            'Alert_bwout_enabled'     => $Alert_bwout_enabled,
            'Alert_bwout_threshold'   => $Alert_bwout_threshold,
            'Alert_bwquota_enabled'   => $Alert_bwquota_enabled,
            'Alert_bwquota_threshold' => $Alert_bwquota_threshold,
            'backupWindow'            => $backupWindow,
            'backupWeeklyDay'         => $backupWeeklyDay,
            'watchdog'                => $watchdog,
            'ms_ssh_disabled'         => $ms_ssh_disabled,
            'ms_ssh_user'             => $ms_ssh_user,
            'ms_ssh_ip'               => $ms_ssh_ip,
            'ms_ssh_port'             => $ms_ssh_port,
        ));
    }

    /**
     * Generates a console token starting a web console LISH session for the requesting IP.
     *
     * @param int $LinodeID [required]
     *
     * @return array
     */
    public function webConsoleToken($LinodeID)
    {
        return $this->call('linode.webconsoletoken', array(
            'LinodeID' => $LinodeID,
        ));
    }
}
