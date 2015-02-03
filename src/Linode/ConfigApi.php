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

namespace Linode\Linode;

use Linode\BaseLinodeApi;

/**
 * This class is autogenerated.
 *
 * @version Linode API v3.3
 */
class ConfigApi extends BaseLinodeApi
{
    /**
     * Creates a Linode Configuration Profile.
     *
     * @param   integer $LinodeID               [required]
     * @param   string  $Label                  [required] The Label for this profile
     * @param   integer $KernelID               [required] The KernelID for this profile.  Found in avail.kernels()
     * @param   string  $DiskList               [required] A comma delimited list of DiskIDs; position reflects device node.  The 9th element for specifying the initrd.
     * @param   string  $RunLevel               [optional] One of 'default', 'single', 'binbash'
     * @param   integer $RAMLimit               [optional] RAMLimit in MB.  0 for max.
     * @param   string  $RootDeviceCustom       [optional] A custom root device setting.
     * @param   integer $RootDeviceNum          [optional] Which device number (1-8) that contains the root partition.  0 to utilize RootDeviceCustom.
     * @param   boolean $RootDeviceRO           [optional] Enables the 'ro' kernel flag.  Modern distros want this.
     * @param   boolean $devtmpfs_automount     [optional] Controls if pv_ops kernels should automount devtmpfs at boot.
     * @param   boolean $helper_xen             [optional] Enable the Xen filesystem helper.  Corrects fstab and inittab/upstart entries depending on the kernel you're booting.  You want this.
     * @param   boolean $helper_disableUpdateDB [optional] Enable the disableUpdateDB filesystem helper
     * @param   boolean $helper_depmod          [optional] Creates an empty modprobe file for the kernel you're booting.
     * @param   boolean $helper_network         [optional] Automatically creates network configuration files for your distro and places them into your filesystem.
     * @param   string  $Comments               [optional] Comments you wish to save along with this profile
     *
     * @return  array
     */
    public function create($LinodeID, $Label, $KernelID, $DiskList, $RunLevel = null, $RAMLimit = null, $RootDeviceCustom = null, $RootDeviceNum = null, $RootDeviceRO = null, $devtmpfs_automount = null, $helper_xen = null, $helper_disableUpdateDB = null, $helper_depmod = null, $helper_network = null, $Comments = null)
    {
        return $this->call('linode.config.create', array(
            'LinodeID'               => $LinodeID,
            'Label'                  => $Label,
            'KernelID'               => $KernelID,
            'DiskList'               => $DiskList,
            'RunLevel'               => $RunLevel,
            'RAMLimit'               => $RAMLimit,
            'RootDeviceCustom'       => $RootDeviceCustom,
            'RootDeviceNum'          => $RootDeviceNum,
            'RootDeviceRO'           => $RootDeviceRO,
            'devtmpfs_automount'     => $devtmpfs_automount,
            'helper_xen'             => $helper_xen,
            'helper_disableUpdateDB' => $helper_disableUpdateDB,
            'helper_depmod'          => $helper_depmod,
            'helper_network'         => $helper_network,
            'Comments'               => $Comments,
        ));
    }

    /**
     * Deletes a Linode Configuration Profile.
     *
     * @param   integer $LinodeID [required]
     * @param   integer $ConfigID [required]
     *
     * @return  array
     */
    public function delete($LinodeID, $ConfigID)
    {
        return $this->call('linode.config.delete', array(
            'LinodeID' => $LinodeID,
            'ConfigID' => $ConfigID,
        ));
    }

    /**
     * Lists a Linode's Configuration Profiles.
     *
     * @param   integer $LinodeID [required]
     * @param   integer $ConfigID [optional]
     *
     * @return  array
     */
    public function getList($LinodeID, $ConfigID = null)
    {
        return $this->call('linode.config.list', array(
            'LinodeID' => $LinodeID,
            'ConfigID' => $ConfigID,
        ));
    }

    /**
     * Updates a Linode Configuration Profile.
     *
     * @param   integer $LinodeID               [optional]
     * @param   integer $ConfigID               [required]
     * @param   string  $Label                  [required] The Label for this profile
     * @param   integer $KernelID               [required] The KernelID for this profile.  Found in avail.kernels()
     * @param   string  $DiskList               [required] A comma delimited list of DiskIDs; position reflects device node.  The 9th element for specifying the initrd.
     * @param   string  $RunLevel               [optional] One of 'default', 'single', 'binbash'
     * @param   integer $RAMLimit               [optional] RAMLimit in MB.  0 for max.
     * @param   string  $RootDeviceCustom       [optional] A custom root device setting.
     * @param   integer $RootDeviceNum          [optional] Which device number (1-8) that contains the root partition.  0 to utilize RootDeviceCustom.
     * @param   boolean $RootDeviceRO           [optional] Enables the 'ro' kernel flag.  Modern distros want this.
     * @param   boolean $devtmpfs_automount     [optional] Controls if pv_ops kernels should automount devtmpfs at boot.
     * @param   boolean $helper_xen             [optional] Enable the Xen filesystem helper.  Corrects fstab and inittab/upstart entries depending on the kernel you're booting.  You want this.
     * @param   boolean $helper_disableUpdateDB [optional] Enable the disableUpdateDB filesystem helper
     * @param   boolean $helper_depmod          [optional] Creates an empty modprobe file for the kernel you're booting.
     * @param   boolean $helper_network         [optional] Automatically creates network configuration files for your distro and places them into your filesystem.
     * @param   string  $Comments               [optional] Comments you wish to save along with this profile
     *
     * @return  array
     */
    public function update($LinodeID, $ConfigID, $Label, $KernelID, $DiskList, $RunLevel = null, $RAMLimit = null, $RootDeviceCustom = null, $RootDeviceNum = null, $RootDeviceRO = null, $devtmpfs_automount = null, $helper_xen = null, $helper_disableUpdateDB = null, $helper_depmod = null, $helper_network = null, $Comments = null)
    {
        return $this->call('linode.config.update', array(
            'LinodeID'               => $LinodeID,
            'ConfigID'               => $ConfigID,
            'Label'                  => $Label,
            'KernelID'               => $KernelID,
            'DiskList'               => $DiskList,
            'RunLevel'               => $RunLevel,
            'RAMLimit'               => $RAMLimit,
            'RootDeviceCustom'       => $RootDeviceCustom,
            'RootDeviceNum'          => $RootDeviceNum,
            'RootDeviceRO'           => $RootDeviceRO,
            'devtmpfs_automount'     => $devtmpfs_automount,
            'helper_xen'             => $helper_xen,
            'helper_disableUpdateDB' => $helper_disableUpdateDB,
            'helper_depmod'          => $helper_depmod,
            'helper_network'         => $helper_network,
            'Comments'               => $Comments,
        ));
    }
}