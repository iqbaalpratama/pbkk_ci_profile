<?= $this->extend('layout') ?>
<?= $this->section('title') ?>
Riwayat Pendidikan
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
        <p style="text-align: center; font-weight: bold; font-size: 30px">Riwayat Pendidikan</p>
        <div class="content">
            <table style="width:100%">
            <tr>
          <td>2004-2006</td>
          <td>TK Kartika IV-73 Jember</td>
        </tr>
        <tr>
          <td>2006-2012</td>
          <td>SDN Kepatihan 5 Jember</td>
        </tr>
        <tr>
            <td>2012-2015</td>
            <td>SMPN 2 Jember</td>
        </tr>
        <tr>
            <td>2015-2018</td>
            <td>SMAN 1 Jember</td>
        </tr>
        <tr>
            <td>2018-Sekarang</td>
            <td>ITS Surabaya </td>
        </tr>
        </table>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
$(".menu li:first").addClass("active");
<?= $this->endSection() ?>