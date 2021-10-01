<?php

class About {
    public function index($nama = 'Ardan Herdiasnyah', $pekerjaan = 'Pengembang Google') 
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() 
    {
        echo 'About/page';
    }
}