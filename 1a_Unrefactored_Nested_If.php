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
        if ($status == "Sudah Bayar") {
            return TRUE;
        }
    }

    #Nested if before refactor
    function main($statusAccDosenPembimbing, $statusFormNilaiPembimbingLapangan, $isBukti_Pembayaran_Seminar_KP)
    {
        if ($this->isAcc_Dosen_Pembimbing($statusAccDosenPembimbing) == TRUE) {
            if ($this->isForm_Nilai_Pembimbing_Lapangan($statusFormNilaiPembimbingLapangan) == TRUE) {
                if ($this->isBukti_Pembayaran_Seminar_KP($isBukti_Pembayaran_Seminar_KP) == TRUE) {
                    return 'Selamat Anda Berhasil Mendaftar Seminar Kerja Praktik';
                } else {
                    return 'Anda Wajib Melakukan Pembayaran Seminar KP';
                }
            } else {
                return 'Form Nilai Pembimbing Lapangan Belum Mencukupi';
            }
        } else {
            return 'Anda Wajib Mendapatkan ACC oleh Dosen Pembimbing';
        }
    }
}

$kp = new KerjaPraktik;
$withdrawl = $kp->main("ACC", 75, "Sudah Bayar");
echo $withdrawl;