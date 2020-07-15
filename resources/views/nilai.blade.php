<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Percobaan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <table>
            <tr>
                <td><h1 align="center">Ranking</h1></td>
            </tr>

            <?php
            $i=1;
            $array_nilai = array (
            89 => 'Agus',
            90 => 'Juni',
            97 => 'Yanuar',
            85 => 'Desi',
            88 => 'Nopi',
            93 => 'Febi' 
            );


            // Menampilkan array film diurutkan berdasarkan rating:
            krsort($array_nilai);

            echo '  <tr><td>nama</td>
                    <td>nilai</td>
                    <td>rank</td></tr>';
            foreach ($array_nilai as $nilai => $nama) {
                echo "<tbody>
                        <tr>
                            <td>$nama</td>
                            <td>$nilai</td>
                            <td>$i</td>
                        </tr>\n
                    </tbody>";
                    $i++;
            }
        ?>
    </table>
    </body>
</html>
