<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '60191223',
            'nidn' => '0514079201',
            'nama' => 'Dinan Yulianto, S.T., M.Eng.',
            'jabfung' => 'Tenaga Pengajar',
            'email_dosen' => 'dinan.yulianto@tif.uad.ac.id',
            'avatar' => 'DinanYulianto.jpg'
        ]);

        $this->assertEquals('60191223', $dosen->nipy);
        $this->assertEquals('0514079201', $dosen->nidn);
        $this->assertEquals('Dinan Yulianto, S.T., M.Eng.', $dosen->nama);
        $this->assertEquals('Tenaga Pengajar', $dosen->jabfung);
        $this->assertEquals('dinan.yulianto@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('DinanYulianto.jpg', $dosen->avatar);
    }
}