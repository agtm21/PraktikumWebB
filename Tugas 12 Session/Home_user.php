<?php
        session_start();

        if($_SESSION['level_user']==""){
            header("location:login.php?pesan=gagal");
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\css.css">
    <title>Perpustakaan</title>
</head>

<body>
    
    <div class="cont-row">
        <!-- sidebar -->
        <div class="content kiri">
            <img src="gambar\foto side.jpg" alt="foto">
            <h3 style="background-color: #6b6969; width: 95%; text-align: center; color: white;">REKOMENDASI</h3>
            <ul style="list-style-type: none;">
                <li> <a href="#"> Buku 1</a></li>
                <li><a href="#"> Buku 2</a></li>
                <li><a href="#"> Buku 3</a></li>
            </ul>
            <p>Selamat Datang <b><?php echo $_SESSION['username'];?></b></p>
            <p>Status Sebagai <?php echo $_SESSION['level_user'];?></p>
            <p><b><a href="logout.php">Logout</a></b></p>
        </div>
        <!-- konten ditengah -->
        <div class="content mid">
            <img src="gambar\sampul.jpg" style="width: 100%; height: 300px;" alt="sampul">
            <p></p>
            <!-- Navigasi bar -->
            <div class="nav">
                <a href="Home.php">HOME</a>
                <a href="#">TENTANG</a>
                <a href="#">GALERI BUKU</a>
                <a href="#">KONTAK</a>
            </div>
            <p></p>

            <input type="text" id="inputan" placeholder="Masukkan Judul Buku" style="width: 83%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;" onkeyup="myFunction();">
            <select name="sort" id="sort"
                style="width: 10%; padding:12px;  text-align: center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border: 1px solid #ddd;">
                <option value="sortby" selected disabled>Sort by</option>
                <option value="Judul" onclick="sortTable()">Judul</option>
            </select>

            <!-- isi  -->
            <div class="list-buku">
                <h3 style="text-align: center;">
                    <p>SELAMAT DATANG</p>
                </h3>
                <p>Selamat datang di Perpustakaan kami</p>
                <p>Silahkan Melihat - lihat Koleksi kami. Buku - buku yang terpajang di website ini dapat dipinjam.
                    Jika ada yang mengembalikan lewat dari batas waktu yang diberikan, maka akan dikenai denda.
                </p>
                <table id="myTable">
                    <tr>
                        <td>

                            <img src="gambar/Harry_Potter_and_the_Order_of_the_Phoenix.jpg" alt="harrypotter">
                            Harry Potter and the Order of the Phoenix
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <img src="gambar/Harry_Potter_and_the_Deathly_Hallows.jpg" alt="">
                            Harry Potter and the Deathly Hallows
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <img src="gambar/Harry_Potter_and_the_Goblet_of_Fire_cover.png" alt="">
                            Harry Potter and the Goblet Of Fire
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <img src="gambar/hunger_games.jpg" alt="hunger_games">
                            The Hunger Games
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <img src="gambar/narnia.jpg" alt="narnia">
                            The Lion, The Witch and The Wardrobe

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <img src="gambar/lightningthief.jpg" alt="lightningthief">
                            The Lightning Thief
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">

        ©Copyright
    </div>
</body>

</html>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("inputan");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;

        while (switching) {

            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {

                shouldSwitch = false;

                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];

                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {

                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
</script>