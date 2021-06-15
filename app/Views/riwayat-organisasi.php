<?= $this->extend('layout') ?>
<?= $this->section('title') ?>
Riwayat Organisasi
<?= $this->endSection() ?>
<?= $this->section('css') ?>
<style>
    table, td{
        margin-top: 20px;
        color: black;
        width: 100%;
        border-collapse: collapse;
        table-layout:fixed;
        width: 100%;
    }
    h1{
        text-align: center;
        background-color: rgb(0, 0, 128);
        color: white;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="container">
        <p style="text-align: center; font-weight: bold; font-size: 30px">Riwayat Organisasi</p>
        <div class="content">
            <table style="width:100%">
            <tr>
                <td>2014-2015</td>
                <td>Ketua I MPK SMAN 1 Jember</td>
            </tr>
            <tr>
                <td rowspan="3" style="vertical-align: top;">2015-2016</td>
                <td>Koordinator Komisi A MPK SMAN 1 Jember</td>
            </tr>
            <tr>
                <td>Ketua PASISMA SMAN 1 Jember</td>
            </tr>
            <tr>
                <td>Anggota Divisi Litbang Pramuka SMAN 1 Jember</td>
            </tr>
            <tr>
                <td rowspan="2" style="vertical-align: top;">2019</td>
                <td>Staff Divisi Kamzin Schematics 2019</td>
            </tr>
            <tr>
                <td>Staff Departemen Sosmas HMTC Membara ITS</td>
            </tr>
            <tr>
                <td>2021</td>
                <td>Ketua Departemen Sosmas HMTC Progresif ITS</td>
            </tr>
        </table>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
$(".menu li:eq(1)").addClass("active");
<?= $this->endSection() ?>