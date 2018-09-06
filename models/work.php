<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/26/18
 * Time: 2:38 PM
 */
    class Work
    {
        private $id;
        private $title;
        private $start;
        private $end;
        private $status;

        function __construct($id,$title,$start,$end,$status)
        {
            $this->id = $id;
            $this->title = $title;
            $this->start = $start;
            $this->end = $end;
            $this->status = $status;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @return mixed
         */
        public function getStart()
        {
            return $this->start;
        }

        /**
         * @return mixed
         */
        public function getEnd()
        {
            return $this->end;
        }

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->status;
        }
    }
?>