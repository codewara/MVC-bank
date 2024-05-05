<?php
    class nasabah {
        private $nama;
        private $norek;
        private $alamat;
        private $nohp;
        private $saldo;

        public function __construct($nama, $norek, $alamat, $nohp, $saldo){
            $this -> nama = $nama;
            $this -> norek = $norek;
            $this -> alamat = $alamat;
            $this -> nohp = $nohp;
            $this -> saldo = number_format($saldo);
        }

        public function print(){
            echo '
            <div class="attribute">
                <div>
                    <p>Nama Nasabah</p>
                    <p>Nomor Rekening</p>
                    <p>Alamat</p>
                    <p>Nomor Telepon</p>
                    <p>Saldo</p>
                </div>
                <div>
                    <p>: '.$this->nama.'</p>
                    <p>: '.$this->norek.'</p>
                    <p>: '.$this->alamat.'</p>
                    <p>: '.$this->nohp.'</p>
                    <p>: Rp.'.$this->saldo.'</p>
                </div>
            </div>';
        }
    }
?>
