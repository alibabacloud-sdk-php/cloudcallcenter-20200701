<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCampaignTrendingReportRequest extends Model
{
    /**
     * @example 111
     *
     * @var string
     */
    public $campaignId;

    /**
     * @example 1111
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 111
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 111
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCampaignTrendingReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
