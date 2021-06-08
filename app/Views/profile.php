<?= $this->extend('layout') ?>
<?= $this->section('title') ?>
Data Diri
<?= $this->endSection() ?>
<?= $this->section('css') ?>
<style>
    img{
        display: block;
        margin: auto;
    }
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
    img{
        border-radius: 50%;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="container">
        <p style="text-align: center; font-weight: bold; font-size: 30px">Data Diri</p>
        <div class="content">
            <img src="img/IMG_6056.jpg" alt="Iqbaal Pratama" width="300" height="300" >
            <table style="width:100%">
            <tr>
                <td>Nama</td>
                <td>: Iqbaal Pratama Putra</td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>: 05111840000021</td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>: Bondowoso, 20 Mei 2000</td>
            </tr>
            <tr>
                <td>Universitas</td>
                <td>: Institut Teknologi Sepuluh Nopember Surabaya</td>
            </tr>
            <tr>
                <td>Departemen</td>
                <td>: Teknik Informatika</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: 5</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>: Menonton Sepakbola</td>
            </tr>
        </table>
        </div>
    </div>

<?= $this->endSection() ?>