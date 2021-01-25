<?php
// Kasus Pendaftaran Seminar Kerja Praktik
class KerjaPraktik
{
    function isAcc_Dosen_Pembimbing($status)
    {
        if ($status == "ACC") {
            return TRUE;
        }
    }

    function isForm_Nilai_Pembimbing_Lapangan($status)
    {
        if ($status >= 70) {
            return TRUE;
        }
    }

    function isBukti_Pembayaran_Seminar_KP($status)
    {
        if ($status  == "Sudah Bayar") {
            return TRUE;
        }
    }

    #Nested If After Refactored
    function main($statusAccDosenPembimbing, $statusFormNilaiPembimbingLapangan, $isBukti_Pembayaran_Seminar_KP)
    {
        if ($this->isAcc_Dosen_Pembimbing($statusAccDosenPembimbing) == TRUE) {
            return 'Anda Wajib Mendapatkan ACC oleh Dosen Pembimbing';
        }
        if ($this->isForm_Nilai_Pembimbing_Lapangan($statusFormNilaiPembimbingLapangan) == TRUE) {
            return 'Form Nilai Pembimbing Lapangan Belum Mencukupi';
        }
        if ($this->isBukti_Pembayaran_Seminar_KP($statusTbq) == TRUE) {
            return 'Anda Wajib Melakukan Pembayaran Seminar KP';
        }

        return 'Selamat Anda Berhasil Mendaftar Seminar Kerja Praktik';
    }
}

$kp = new KerjaPraktik;
$withdrawl = $kp->main("ACC", 75, "Sudah Bayar");
echo $withdrawl;