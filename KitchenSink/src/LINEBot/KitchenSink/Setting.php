<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('XuAPgE5eH13Hbgj7mSSCmqe5wheTgVDhiE805ypPKx1hyHXCXLgshl02rpLCe+rUUVTfBE6SkoXrkRD0c1omm6o8RFZMgCETtwF7nDTKSg3PDQG6OIHE2npC1e3YfWXhvBMcXBwFrF5zE8s9T83cgQdB04t89/1O/w1cDnyilFU=') ?: '<your channel token>',
                    'channelSecret' => getenv('3eda0f01f6b2fe05aace973e39707edc') ?: '<your channel secret>',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
