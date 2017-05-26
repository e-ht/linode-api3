<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2016 Artem Rodygin
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
class VolumeApi extends BaseLinodeApi
{
    /**
     * Creates a new block storage volume.
     *
     * @param int    $DatacenterID [required] Sets the datacenter where the volume should be provisioned
     * @param string $Label        [required] A unique name for the volume
     * @param int    $Size         [required] Sets the size of the new volume in GiB
     * @param int    $LinodeID     [optional] The Linode which this volume is attached to
     *
     * @return array
     */
    public function create($DatacenterID, $Label, $Size, $LinodeID = null)
    {
        return $this->call('volume.create', [
            'DatacenterID' => $DatacenterID,
            'Label'        => $Label,
            'Size'         => $Size,
            'LinodeID'     => $LinodeID,
        ]);
    }

    /**
     * Deletes a block storage volume.
     *
     * @param int $VolumeID [required] The VolumeID to delete
     *
     * @return array
     */
    public function delete($VolumeID)
    {
        return $this->call('volume.delete', [
            'VolumeID' => $VolumeID,
        ]);
    }

    /**
     * Returns a list of block storage Volumes.
     *
     * @param int $VolumeID [optional] Limits the list to the specified Volume
     *
     * @return array
     */
    public function getList($VolumeID = null)
    {
        return $this->call('volume.list', [
            'VolumeID' => $VolumeID,
        ]);
    }

    /**
     * Updates a volume's properties.
     *
     * @param int    $VolumeID [required] The volume to modify
     * @param string $Label    [optional] A unique name for the volume
     * @param int    $Size     [optional] Sets the new size of the new volume in GiB; volumes can only be made larger
     * @param int    $LinodeID [optional] The Linode to attach the volume to, or 0 to detach
     *
     * @return array
     */
    public function update($VolumeID, $Label = null, $Size = null, $LinodeID = null)
    {
        return $this->call('volume.update', [
            'VolumeID' => $VolumeID,
            'Label'    => $Label,
            'Size'     => $Size,
            'LinodeID' => $LinodeID,
        ]);
    }
}
