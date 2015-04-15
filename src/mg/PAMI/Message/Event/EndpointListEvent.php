<?php
/**
 * Event from PJSIPShowEndpoints
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Niklas Larsson <niklas@tese.se>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2015 Niklas Larsson <niklas@tese.se>, Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PAMI\Message\Event;

use PAMI\Message\Event\EventMessage;

/**
 * Event from PJSIPShowEndpoints
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Niklas Larsson <niklas@tese.se>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class EndpointListEvent extends EventMessage
{
    /**
     * Returns key: 'ObjectType'.
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->getKey('ObjectType');
    }

    /**
     * Returns key: 'ObjectName'.
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->getKey('ObjectName');
    }

    /**
     * Returns key: 'Transport'.
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->getKey('Transport');
    }

    /**
     * Returns key: 'Aor'.
     *
     * @return string
     */
    public function getAor()
    {
        return $this->getKey('Aor');
    }

    /**
     * Returns key: 'Auths'.
     *
     * @return string
     */
    public function getAuths()
    {
        return $this->getKey('Auths');
    }

    /**
     * Returns key: 'OutboundAuths'.
     *
     * @return string
     */
    public function getOutboundAuths()
    {
        return $this->getKey('OutboundAuths');
    }

    /**
     * Returns key: 'Contacts'.
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->getKey('Contacts');
    }

    /**
     * Returns key: 'DeviceState'.
     *
     * @return string
     */
    public function getDeviceState()
    {
        return $this->getKey('DeviceState');
    }

    /**
     * Returns key: 'ActiveChannels'.
     *
     * @return boolean
     */
    public function getActiveChannels()
    {
        return $this->getBoolKey('ActiveChannels');
    }
}
