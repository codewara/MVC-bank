<?php
    include_once ("model.php");

    class controller{
        private $model;

        public function __construct(){
            $this -> model = new model();
        }

        public function newUser($id, $nama, $norek, $alamat, $nohp, $saldo){
            $xuser = new nasabah ($id, $nama, $norek, $alamat, $nohp, $saldo);
            $this -> model -> _create ($xuser);
        }

        public function getUsers(){
            return $this -> model -> _show();
        }

        public function getUser($id){
            return $this -> model -> _find($id);
        }

        public function editUser($id, $xuser){
            $this -> model -> _update ($id, $xuser);
        }

        public function deleteUser($id){
            $this -> model -> _destroy($id);
        }
    }
?>