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
     * @subpackage     Database::Adapters
     * @link           www.pdomap.net
     * @since          2.*
     * @version        $Revision$
     */
     
    /**
     * Interface de définition de la structure d'une table
     */         
    interface pdoMap_Database_Request_Adapters_IStructure {
        /**
         * Retourns an array with tables names for database
         */                 
        function All();
        /**
         * Charge la structure d'une table
         * @params pdoMap_Dao_Metadata_Table Table Structure to load
         * @returns pdoMap_Database_Request_Adapters_ITable         
         */
        function get(pdoMap_Dao_Metadata_Table $structure);    
        /**
         * Charge la structure d'une table
         * @params mixed Nom de la table
         * @returns IRequestTable         
         */
        function Read($name);    
        /**
         * Create current database
         */                 
        function Create($drop = false);
        /**
         * Drop current database
         */                 
        function Drop();
    }     