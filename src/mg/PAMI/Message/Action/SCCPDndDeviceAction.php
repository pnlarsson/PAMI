<?php
/**
 * SCCPDndDevice action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Diederik de Groot <ddegroot@users.sf.net>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2015 Diederik de Groot ddegroot@users.sf.net>, Marcelo Gornstein <marcelog@gmail.com>
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
namespace PAMI\Message\Action;

use PAMI\Exception\PAMIException;

/**
 * SCCP Set Do not Disturb action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Diederik de Groot <ddegroot@users.sf.net>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class SCCPDndDeviceAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $DeviceId DeviceId
     * @param string $State State on of ['off', 'reject', 'silent']
     *
     * @return void
     */
    public function __construct($DeviceName, $State)
    {
        parent::__construct('SCCPDndDevice');
        
        $this->setKey('DeviceId', $DeviceName);
        if (in_array(strtolower($State), array('off', 'reject', 'silent'))) {
		    $this->setKey('State', $State);
	    } else {
	        throw new PAMIException('State has to be one of \'off\', \'reject\', \'silent\'.');
        }
    }
}
