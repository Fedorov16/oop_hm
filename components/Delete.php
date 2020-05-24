<?php

    class Delete
    {
        private $from;
        private $where = '';

        private $limit = '';
        private $orderBy = '';
       

        public function __construct($from) {
			$this->from = $from; 
			return $this;
		}
        public function where($where){
            $this->where = $where;
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
        public function limit($limit, $offset = 0){
            $this->limit = "LIMIT $offset, $limit";
            return $this;
        }
        public function orderBy($field, $type = 'DESC'){
            $this->orderBy = "ORDER BY $field $type";
            return $this;
        }

        public function build(){
            $query = 
            "UPDATE $this->from
            SET $this->set
            WHERE $this->where
            $this->orderBy
            $this->limit;
            ";
            return $query;
        }

    }