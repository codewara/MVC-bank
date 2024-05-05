<?php
    include_once ('bank.php');

    class model{
        private $book = array();
        private $user = array();

        public function _create ($xuser){
            $this -> user[] = $xuser;
            echo '<p><b>Data nasabah baru telah ditambahkan!</b></p>';
        }

        public function _show () {
            foreach ($this -> user as $users) {
                $users -> print ();
            }
        }

        public function _find ($id) {
            $this -> user[$id] -> print ();
        }

        public function _update ($id, $xuser){
            $this -> user[$id] = $xuser;
            echo '<p><b>Data nasabah ke-'.$id.' telah diubah!</b></p>';
        }
        
        public function _destroy ($id){
            unset($this -> user[$id]);
            echo '<p><b>Data nasabah ke-'.$id.' telah dihapus!</b></p>';
        }
    }
?>