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
     * @subpackage     Core::Config
     * @link           www.pdomap.net
     * @since          2.*
     * @version        $Revision$
     */
    
    /**
     * The fields config wrapper
     */          
    class pdoMap_Core_Config_Fields {
        /**
         * @var array the fields array
         */                 
        protected $fields = array();
        
        /**
         * Initialize fields from a configuration array
         */                 
        public function __construct($fields) {
            foreach($fields as $name => $data) {
                $this->Add(
                    new pdoMap_Core_Config_Field($name, $data)
                );
            }
        }
        
        /**
         * Define a configuration field
         */                 
        public function Add(pdoMap_Core_Config_Field $field) {
            $this->fields[$field->getName()] = $field;
        }        
        /**
         * Retrive a field from his name
         * @returns pdoMap_Core_Config_Field  
         * @throw pdoMap_Core_Config_Exceptions_FieldUndefined                
         */                 
        public function Get($name) {
            if (isset($this->fields[$name])) {
                return $this->fields[$name];
            } else 
                throw new pdoMap_Core_Config_Exceptions_FieldUndefined(
                    $name
                );
        }
    }