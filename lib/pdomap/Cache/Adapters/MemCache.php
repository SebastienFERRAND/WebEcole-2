<?php

    /*
     *  $Id$
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
     * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
     * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
     * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
     * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
     * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
     * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
     * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
     * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     * This software consists of voluntary contributions made by many individuals
     * and is licensed under the LGPL. For more information, see
     * <http://www.pdomap.net>.
     */    
    
    /**
     * @author         Ioan CHIRIAC <i dot chiriac at yahoo dot com>
     * @license        http://www.opensource.org/licenses/lgpl-2.1.php LGPL
     * @package        pdoMap
     * @subpackage     Cache::Adapters
     * @link           www.pdomap.net
     * @since          2.*
     * @version        $Revision$
     */

    /**
     * Cache Manager with memcache plugin 
     */         
    class pdoMap_Cache_Adapters_MemCache implements pdoMap_Cache_IAdapter {
        public function openSession() {
        }       
        public function closeSession() {
        }
        public function check($key, $timeout = 0) {
        }
        public function set($key, $value) {
        }
        public function get($key) {
        }
        public function remove($key) {
        }
        public function clear() {
        }                        
    }