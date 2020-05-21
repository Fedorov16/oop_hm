<?php
    class Update 
    {
        private $from;
        private $set = '';
        private $where = '';
        

        public function __construct($from) {
			$this->from = $from; 
			return $this;
        }
        
        public function set($data){
            if(empty($data)){
                echo 'Необходимо передать данные в функцию set';
                exit();
            }
            $set = '';
            foreach ($data as $k => $v){
                $set .= "`$k` = '$v', ";
            }
            $set = rtrim($set, ', ');
            $this->set = $set;
            return $this;
        
        }

        public function where($where){
            $this->where = $where;
            return $this;
        }

        public function build(){
            $query = 
            "UPDATE $this->from
            SET $this->set
            WHERE $this->where;
            ";
            return $query;
        }

    }