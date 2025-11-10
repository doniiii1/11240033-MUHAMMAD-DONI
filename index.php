<html>
<head>
    <title>11240033 - M DONI</title>
</head>
<body>
    <table border='1' width='100%' cellspacing='0' cellpadding='0'>
        <tr>
            <td colspan='2' height='100%'><img src='image/header1.jpg' width='100%'</td>
        </tr>
        <tr height='400'>
            <td width='150' valign='top'>
                <table border='1' width='100%' cellspacing='0' cellpadding='0'>
                    <tr bgcolor='#98d1d9'>
                        <th>MENU</th>
                    </tr>
                    <tr>
                        <td><a href='index.php'><img src='image/home.png' height='20' width='20'>Beranda</a></td>
                    </tr>
                    <tr>
                        <td><a href='index.php?menu=profil'>Profil</a></td>
                    </tr>
                    <tr>
                        <td><a href='index.php?menu=cv'>CV</a></td>
                    </tr>
                    <tr>
                        <td><a href='index.php?menu=galeri'>Galeri</a></td>
                    </tr>
                </table>
            </td>
            <td valign='top' align='center'>
                <?php
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'profil') {
                        // jalankan file ini
                         echo "<h1><b>Muhammad Doni R</b></h1>";
						 echo "<p>Perkenalkan saya Muhammad Doni seorang mahasiswa semester 3 yang menyukai hal hal teknologi</p>";
						 
                        
                    }

                    if ($_GET['menu'] == 'cv') {
                        // jalankan file ini
                        // echo "test";
						echo "<img src='image/cv1.jpg' height='100%' width='100%'>";
                        
                    }

                    if ($_GET['menu'] == 'galeri') {
                        // jalankan file ini
                        echo "<img src='image/foto1.jpg' height='33%' width='33%' align='left'>";
                        echo "<img src='image/foto2.jpg' height='33%' width='33%'>" ;
                        echo "<img src='image/foto3.jpg' height='33%' width='33%' align='right'>";
                        echo "<img src='image/foto4.jpg' height='33%' width='33%' align='left'>";
                        echo "<img src='image/foto5.jpg' height='33%' width='33%'>";
                        echo "<img src='image/foto6.jpg' height='33%' width='33%' align='right'>";
						
                        
                    }
                } else {
                    echo "<img src='image/beranda1.jpg' height='400'";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan='2' height='100%'><img src='image/footer1.jpg' width='100%'</td>
        </tr>
    </table>
</body>
</html>