<?php
    class nasabah {
        private $id;
        private $nama;
        private $norek;
        private $alamat;
        private $nohp;
        private $saldo;

        public function __construct($id, $nama, $norek, $alamat, $nohp, $saldo){
            $this -> id = $id;
            $this -> nama = $nama;
            $this -> norek = $norek;
            $this -> alamat = $alamat;
            $this -> nohp = $nohp;
            $this -> saldo = number_format($saldo);
        }

        public function print(){
            echo '<p>
            Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: ' . $this -> nama . '<br>
            No Rekening : ' . $this -> norek . '<br>
            Alamat &nbsp &nbsp &nbsp &nbsp &nbsp: ' . $this -> alamat . '<br>
            No HP &nbsp &nbsp &nbsp &nbsp &nbsp : ' . $this -> nohp . '<br>
            Saldo &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : Rp.' . $this -> saldo . '<br>
            </p>';
        }
    }
?>