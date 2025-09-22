# ANALISIS LAPORAN PRAKTIKUM PERTEMUAN 5
## tag.html
```html
<html>
    <head>
        <title>Contoh program javaScript</title>
    </head>
    <body>
        <script lang="javascript">
            document.write("Program javaScript aku di body");
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc1.png?raw=true)
### Analisis :
- Contoh sederhana penggunaan JavaScript dalam HTML
- Menggunakan document.write() untuk menulis konten langsung ke dokumen
- Script ditempatkan di dalam tag *<*body*>*
- Atribut lang="javascript" sudah deprecated, sebaiknya menggunakan type="text/javascript"

## EventTertentu.html
```html
<!DOCTYPE html>
<html>
    <head>
        <title>Belahar javaScript: Mengenal Event pada javaScript</title>
    </head>
    <body>
        <h1></h1>
        <h2></h2>
        <button onclick="tampilkan_nama();">Klik disini</button>
        <div id="hasil"></div>
        <script>
            function tampilkan_nama() {
                document.getElementById("hasil").innerHTML ="<h3>Nama Saya adalah Andi Akram Nur Risal<h3>";
            }
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc2.png?raw=true)
### Analisis :
- Demonstrasi event handling JavaScript dengan event onclick
- Fungsi tampilkan_nama() mengubah konten elemen dengan id "hasil"
- Menggunakan innerHTML untuk memanipulasi konten DOM

## contoh.html
```html
<html>
    <head>
        <title> contoh sederhana javaScript</title>
    </head>
    <body>
        <script language="javascript">
            document.write("Selamat Belajar Angkatan 2019,<br>");
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc3.png?raw=true)
### Analisis :
- Contoh dasar penggunaan JavaScript
- Menggunakan document.write() untuk output teks
- Atribut language="javascript" sudah deprecated

## MasukkanData.html
```html
<html>
    <head>
        <title>Masukkan Data</title>
    </head>
    <body>
        <script language="javascript">
            var nama = prompt("Siapa nama Anda ?");
            document.write("Hai, "+nama);
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc4.png?raw=true)
### Analisis :
- Menggunakan prompt() untuk mengambil input dari pengguna
- Menyimpan input dalam variabel nama
- Menampilkan hasil dengan document.write()
- Demonstrasi interaksi dasar dengan pengguna

## JendelaPeringatan.html
```html
<html>
    <head>
        <title>Alert Box</title>
    </head>
    <body>
        <script language="javaScript">
            window.alert("Apakah anda akan meningalkan laman ini ?");
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc5.png?raw=true) 
### Analisis :
- Menggunakan window.alert() untuk menampilkan dialog peringatan
- Dialog alert memblokir interaksi dengan halaman sampai pengguna menutupnya

## JendelaPeringatanC2.html
```html
<html>
    <head>
        <title>konfirmasi</title>
    </head>
    <body>
        <script language="javaScript">
            var jawaban = window.confirm("Apakah anda sudah yakin ?");
            document.write("Jawaban Anda "+jawaban);
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc6.png?raw=true)
### Analisis :
- Menggunakan window.confirm() untuk menampilkan dialog konfirmasi
- Dialog mengembalikan nilai boolean (true untuk OK, false untuk Cancel)
- Menampilkan hasil konfirmasi ke halaman web

## Variabel.html
```html
<html>
    <head>
        <title>contoh variabel</title>
    </head>
    <body>
        <script language="javaScript">
            var VariabelKu;
            var VariabelKu2 = 3;
            VariabelKu = 1234;
            document.write("VariabelKu = "+VariabelKu2);
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc7.png?raw=true)
### Analisis :
- Demonstrasi deklarasi dan inisialisasi variabel
- Terdapat dua variabel: VariabelKu dan VAriabelKu2
- Output menampilkan nilai VAriabelKu2 (3), bukan VariabelKu (1234)
- JavaScript case-sensitive: VariabelKu ≠ VAriabelKu2

## Global.html
```html
<html>
    <head>
        <title>variabel global dan local</title>
    </head>
    <body>
        <script language="javaScript">
            var a = 12;
            var b = 4;
            function Perkalian_Dengan2(b){
            a = b * 2;
            return a;
            }
            document.write("Dua kali dari ",b," adalah "+Perkalian_Dengan2(b));
            document.write(" Nilai a adalah ",a);
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc8.png?raw=true)
### Analisis :
- Program ini mendemonstrasikan penggunaan variabel global dan parameter fungsi.
- Variabel a didefinisikan secara global, lalu nilainya diubah di dalam fungsi sehingga nilai globalnya ikut berubah (efek side effect).
- Parameter fungsi b melakukan shadowing terhadap variabel global b, sehingga nilai global b tidak berubah.

## lokal.html
```html
<html>
    <head>
        <title> variabel lokal</title>
    </head>
    <body>
        <script language="javaScript">
            var a = 12;
            var b = 4;
            function PerkalianDengan2(b){
                var a = b * 2;
                return a;
            }
            document.write("Dua kali dari ",b," adalah ", PerkalianDengan2(b));
            document.write(" Nilai a adalah ",a);
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc9.png?raw=true)
### Analisis :
- Demonstrasi variabel lokal dalam fungsi
- Variabel a dideklarasikan ulang dalam fungsi dengan var, membuat variabel lokal
- Nilai variabel global a tidak terpengaruh oleh operasi dalam fungsi
- Output menunjukkan perbedaan antara variabel lokal dan global

## KonversiTipeData.html
```html
<html>
    <head>
        <title>Konversi Bilangan</title>
    </head>
    <body>
        <script language="javaScript">
            <!--
            var a = parseInt("27");
            document.write("1. "+ a +"<br>");
            a = parseInt("27.5");
            document.write("2. "+ a +"<br>");
            var a = parseInt("27A");
            document.write("3. "+ a +"<br>");
            a = parseInt("A27.5");
            document.write("4. "+ a +"<br>");
            var b = parseFloat("27");
            document.write("5. "+ b +"<br>  ");
            b = parseFloat("27.5");
            document.write("6. "+ b +"<br>");
            var b = parseFloat("27A");
            document.write("7. "+ b +"<br>");
            b = parseFloat("A27.5"); 
            document.write("8. "+ b +"<br>");
            -->
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc10.png?raw=true)
### Analisis :
- Demonstrasi fungsi parseInt() dan parseFloat() untuk konversi string ke angka
- Menunjukkan perilaku fungsi ketika karakter non-numerik
 parseInt() mengembalikan integer, parseFloat() mengembalikan floating point
- Jika string dimulai dengan angka, fungsi akan mengambil angka yang valid
- Jika string dimulai dengan karakter non-numerik, mengembalikan NaN

## operator.html
```html
<html>
    <head>
        <title>Operasi Matematika</title>
    </head>
    <body>
        <script language="javaScript">
            <!--
            document.write("2 + 3 = "+ (2 + 3));
            document.write("<br>");
            document.write("20 - 3 = "+ (20 - 3));
            document.write("<br>");
            document.write("20* 3 = "+ (20 * 3));
            document.write("<br>");
            document.write("40 / 3 = "+ (40 / 3));
            document.write("<br>");      
            //-->
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc11.png?raw=true)
### Analisis :
- Demonstrasi operator matematika dasar: +, -, *, /
- Menggunakan document.write() untuk menampilkan hasil operasi
- Terdapat kesalahan penulisan: "2 + b = " seharusnya "2 + 3 = "

## LogikaPembanding.html
```html
<html>
    <head>
        <title>Operator ?</title>
    </head>
    <body>
        <script language="javaScript">
            <!--
            var nilai = prompt("Nilai (0-100):",0);
            var hasil = (nilai >= 60) ? "Lulus" : "Tidak Lulus";
            document.write("Hasil: " + hasil);
            //-->
        </script>
    </body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc12_1.png?raw=true)
![alt text](/pertemuan5/Laporan/img/perc12_2.png?raw=true)
![alt text](/pertemuan5/Laporan/img/perc12_3.png?raw=true)
![alt text](/pertemuan5/Laporan/img/perc12_4.png?raw=true)
### Analisis :
- Menggunakan operator ternary ? : untuk kondisional
- Meminta input nilai dari pengguna dengan prompt()
- Mengevaluasi apakah nilai >= 60 untuk menentukan kelulusan
- Menampilkan hasil evaluasi


# Tugas Mandiri 
## tugas1.html
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <div class="container">
        <div class="tugas-section">
            <h2>📝 Tugas 1: Konversi Tipe Data</h2>
            <div class="input-group">
                <label>Input String:</label>
                <input type="text" id="stringInput" placeholder="Masukkan string angka" value="123.45">
                <button onclick="konversiTipeData()">Konversi</button>
            </div>
            <div id="hasilKonversi" class="result" style="display:none;"></div>
        </div>
    </div>
    <script language="javascript">
        function konversiTipeData() {
            const input = document.getElementById('stringInput').value;
            const hasil = document.getElementById('hasilKonversi');
            
            let output = `<h4>Hasil Konversi dari: "${input}"</h4>`;
            
            const intValue = parseInt(input);
            output += `<strong>parseInt():</strong> ${intValue} (tipe: ${typeof intValue})<br>`;
            
            const floatValue = parseFloat(input);
            output += `<strong>parseFloat():</strong> ${floatValue} (tipe: ${typeof floatValue})<br>`;
            
            const numberValue = Number(input);
            output += `<strong>Number():</strong> ${numberValue} (tipe: ${typeof numberValue})<br>`;
            
            const stringValue = String(input);
            output += `<strong>String():</strong> "${stringValue}" (tipe: ${typeof stringValue})<br>`;
            
            const booleanValue = Boolean(input);
            output += `<strong>Boolean():</strong> ${booleanValue} (tipe: ${typeof booleanValue})<br>`;
            
            output += `<strong>isNaN():</strong> ${isNaN(input)} (apakah bukan angka?)<br>`;
            
            hasil.innerHTML = output;
            hasil.style.display = 'block';
        }
    </script>
</body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc13_1.png?raw=true)
![alt text](/pertemuan5/Laporan/img/perc13_2.png?raw=true)
### Analisis :
- Halaman untuk demonstrasi konversi tipe data JavaScript
- Menggunakan berbagai metode konversi: parseInt(), parseFloat(), Number(), String(), Boolean()
- Menampilkan hasil konversi dan tipe data hasilnya
- Juga menggunakan isNaN() untuk mengecek apakah nilai bukan angka

## tugas2.html
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="tugas-section">
            <h2>📊 Tugas 2: Tipe Data Array</h2>
            <div class="input-group">
                <label>Tambah Elemen:</label>
                <input type="text" id="arrayInput" placeholder="Masukkan nilai">
                <button onclick="tambahArray()">Tambah</button>
                <button onclick="clearArray()">Clear Array</button>
            </div>
            <div class="input-group">
                <button onclick="sortArray()">Sort Array</button>
                <button onclick="reverseArray()">Reverse Array</button>
                <button onclick="hitungStatistik()">Hitung Statistik</button>
            </div>
            <div id="arrayDisplay" class="array-display">Array: []</div>
            <div id="hasilArray" class="result" style="display:none;"></div>
        </div>
    </div>
    <script language="javascript">
        let myArray = [];

        function tambahArray() {
            const input = document.getElementById('arrayInput').value;
            if (input.trim() !== '') {
                const value = isNaN(input) ? input : parseFloat(input);
                myArray.push(value);
                document.getElementById('arrayInput').value = '';
                updateArrayDisplay();
            }
        }

        function clearArray() {
            myArray = [];
            updateArrayDisplay();
            document.getElementById('hasilArray').style.display = 'none';
        }

        function sortArray() {
            myArray.sort((a, b) => {
                if (typeof a === 'number' && typeof b === 'number') {
                    return a - b;
                }
                return String(a).localeCompare(String(b));
            });
            updateArrayDisplay();
        }

        function reverseArray() {
            myArray.reverse();
            updateArrayDisplay();
        }

        function updateArrayDisplay() {
            document.getElementById('arrayDisplay').innerHTML = 
                `Array: [${myArray.map(item => typeof item === 'string' ? `"${item}"` : item).join(', ')}]<br>
                Panjang Array: ${myArray.length}`;
        }

        function hitungStatistik() {
            const hasil = document.getElementById('hasilArray');
            const numbers = myArray.filter(item => typeof item === 'number');
            
            if (numbers.length === 0) {
                hasil.innerHTML = '<h4>Statistik Array</h4>Tidak ada angka dalam array untuk dihitung statistik.';
            } else {
                const sum = numbers.reduce((a, b) => a + b, 0);
                const avg = sum / numbers.length;
                const min = Math.min(...numbers);
                const max = Math.max(...numbers);
                
                hasil.innerHTML = `
                    <h4>Statistik Array (Angka)</h4>
                    <strong>Jumlah:</strong> ${sum}<br>
                    <strong>Rata-rata:</strong> ${avg.toFixed(2)}<br>
                    <strong>Minimum:</strong> ${min}<br>
                    <strong>Maximum:</strong> ${max}<br>
                    <strong>Total Angka:</strong> ${numbers.length} dari ${myArray.length} elemen
                `;
            }
            hasil.style.display = 'block';
        }
    </script>
</body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc14.png?raw=true)
### Analisis :
- Demonstrasi operasi array JavaScript
- Fitur: menambah elemen, mengosongkan array, mengurutkan, membalik, dan menghitung statistik
- Menggunakan method array: push(), sort(), reverse(), filter(), reduce()
- Menghitung statistik seperti jumlah, rata-rata, minimum, maximum
- Menampilkan array dan panjangnya secara real-time

## tugas3.html
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <div class="container">
        <div class="tugas-section">
            <h2>🧮 Tugas 3: Calculator Sederhana</h2>
            <div class="calculator">
                <input type="text" id="display" readonly>
                <button onclick="clearCalculator()">C</button>
                <button onclick="deleteLast()">⌫</button>
                <button onclick="appendToDisplay('/')" class="operator">÷</button>
                <button onclick="appendToDisplay('*')" class="operator">×</button>
                
                <button onclick="appendToDisplay('7')">7</button>
                <button onclick="appendToDisplay('8')">8</button>
                <button onclick="appendToDisplay('9')">9</button>
                <button onclick="appendToDisplay('-')" class="operator">-</button>
                
                <button onclick="appendToDisplay('4')">4</button>
                <button onclick="appendToDisplay('5')">5</button>
                <button onclick="appendToDisplay('6')">6</button>
                <button onclick="appendToDisplay('+')" class="operator">+</button>
                
                <button onclick="appendToDisplay('1')">1</button>
                <button onclick="appendToDisplay('2')">2</button>
                <button onclick="appendToDisplay('3')">3</button>
                <button onclick="calculate()" class="equals" style="grid-row: span 2;">=</button>
                
                <button onclick="appendToDisplay('0')" style="grid-column: span 2;">0</button>
                <button onclick="appendToDisplay('.')">.</button>
            </div>
        </div>
    </div>
    <script>
        function appendToDisplay(value) {
            const display = document.getElementById('display');
            display.value += value;
        }

        function clearCalculator() {
            document.getElementById('display').value = '';
        }

        function deleteLast() {
            const display = document.getElementById('display');
            display.value = display.value.slice(0, -1);
        }

        function calculate() {
            const display = document.getElementById('display');
            try {
                let expression = display.value.replace(/×/g, '*').replace(/÷/g, '/');
                const result = eval(expression);
                display.value = result;
            } catch (error) {
                display.value = 'Error';
                setTimeout(() => {
                    display.value = '';
                }, 1500);
            }
        }
    </script>
</body>
</html>
```
### output :
![alt text](/pertemuan5/Laporan/img/perc15_1.png?raw=true)
![alt text](/pertemuan5/Laporan/img/perc15_2.png?raw=true)
### Analisis :
- Calculator sederhana dengan antarmuka grid
- Mendukung operasi dasar: +, -, *, /
- Fitur: clear, delete, dan kalkulasi
- Menggunakan eval() untuk mengevaluasi ekspresi matematika (catatan: penggunaan eval() berisiko keamanan)
- Error handling dengan try-catch
- Desain tombol dengan class berbeda untuk operator dan equals

## tugas4.html
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="tugas-section">
            <h2>📐 Tugas 4: Hitungan Bangun Ruang</h2>
            <div class="geometry-grid">
                <div class="geometry-item">
                    <h3>🟫 Kubus</h3>
                    <div class="input-group">
                        <label>Sisi (cm):</label>
                        <input type="number" id="sisiKubus" placeholder="Masukkan sisi" step="0.01">
                        <button onclick="hitungKubus()">Hitung</button>
                    </div>
                    <div id="hasilKubus" class="result" style="display:none;"></div>
                </div>

                <div class="geometry-item">
                    <h3>📦 Balok</h3>
                    <div class="input-group">
                        <label>Panjang (cm):</label>
                        <input type="number" id="panjangBalok" placeholder="Panjang" step="0.01">
                    </div>
                    <div class="input-group">
                        <label>Lebar (cm):</label>
                        <input type="number" id="lebarBalok" placeholder="Lebar" step="0.01">
                    </div>
                    <div class="input-group">
                        <label>Tinggi (cm):</label>
                        <input type="number" id="tinggiBalok" placeholder="Tinggi" step="0.01">
                        <button onclick="hitungBalok()">Hitung</button>
                    </div>
                    <div id="hasilBalok" class="result" style="display:none;"></div>
                </div>

                <div class="geometry-item">
                    <h3>🥫 Tabung</h3>
                    <div class="input-group">
                        <label>Jari-jari (cm):</label>
                        <input type="number" id="jariJariTabung" placeholder="Jari-jari" step="0.01">
                    </div>
                    <div class="input-group">
                        <label>Tinggi (cm):</label>
                        <input type="number" id="tinggiTabung" placeholder="Tinggi" step="0.01">
                        <button onclick="hitungTabung()">Hitung</button>
                    </div>
                    <div id="hasilTabung" class="result" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hitungKubus() {
            const sisi = parseFloat(document.getElementById('sisiKubus').value);
            const hasil = document.getElementById('hasilKubus');
            
            if (isNaN(sisi) || sisi <= 0) {
                hasil.innerHTML = 'Masukkan nilai sisi yang valid!';
                hasil.style.display = 'block';
                return;
            }
            
            const volume = sisi * sisi * sisi;
            const luasPermukaan = 6 * sisi * sisi;
            
            hasil.innerHTML = `
                <h4>Hasil Perhitungan Kubus</h4>
                <strong>Sisi:</strong> ${sisi} cm<br>
                <strong>Volume:</strong> ${volume.toFixed(2)} cm³<br>
                <strong>Luas Permukaan:</strong> ${luasPermukaan.toFixed(2)} cm²
            `;
            hasil.style.display = 'block';
        }

        function hitungBalok() {
            const panjang = parseFloat(document.getElementById('panjangBalok').value);
            const lebar = parseFloat(document.getElementById('lebarBalok').value);
            const tinggi = parseFloat(document.getElementById('tinggiBalok').value);
            const hasil = document.getElementById('hasilBalok');
            
            if (isNaN(panjang) || isNaN(lebar) || isNaN(tinggi) || 
                panjang <= 0 || lebar <= 0 || tinggi <= 0) {
                hasil.innerHTML = 'Masukkan semua nilai dengan benar!';
                hasil.style.display = 'block';
                return;
            }
            
            const volume = panjang * lebar * tinggi;
            const luasPermukaan = 2 * (panjang * lebar + panjang * tinggi + lebar * tinggi);
            
            hasil.innerHTML = `
                <h4>Hasil Perhitungan Balok</h4>
                <strong>Panjang:</strong> ${panjang} cm<br>
                <strong>Lebar:</strong> ${lebar} cm<br>
                <strong>Tinggi:</strong> ${tinggi} cm<br>
                <strong>Volume:</strong> ${volume.toFixed(2)} cm³<br>
                <strong>Luas Permukaan:</strong> ${luasPermukaan.toFixed(2)} cm²
            `;
            hasil.style.display = 'block';
        }

        function hitungTabung() {
            const r = parseFloat(document.getElementById('jariJariTabung').value);
            const t = parseFloat(document.getElementById('tinggiTabung').value);
            const hasil = document.getElementById('hasilTabung');
            
            if (isNaN(r) || isNaN(t) || r <= 0 || t <= 0) {
                hasil.innerHTML = 'Masukkan semua nilai dengan benar!';
                hasil.style.display = 'block';
                return;
            }
            
            const volume = Math.PI * r * r * t;
            const luasPermukaan = 2 * Math.PI * r * (r + t);
            
            hasil.innerHTML = `
                <h4>Hasil Perhitungan Tabung</h4>
                <strong>Jari-jari:</strong> ${r} cm<br>
                <strong>Tinggi:</strong> ${t} cm<br>
                <strong>Volume:</strong> ${volume.toFixed(2)} cm³<br>
                <strong>Luas Permukaan:</strong> ${luasPermukaan.toFixed(2)} cm²
            `;
            hasil.style.display = 'block';
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('stringInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') konversiTipeData();
            });
            
            document.getElementById('arrayInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') tambahArray();
            });
        });
    </script>
</body>
</html>
```
### analisis :
![alt text](/pertemuan5/Laporan/img/perc16.png?raw=true)
### Analisis :
- File ini adalah halaman web untuk menghitung volume dan luas permukaan bangun ruang
- Menggunakan struktur HTML5 dengan viewport yang responsive
- Terdapat tiga bentuk geometri: Kubus, Balok, dan Tabung
- Setiap bentuk memiliki input field untuk memasukkan dimensi
- Menggunakan JavaScript untuk melakukan perhitungan:
- hitungKubus(): Menghitung volume (sisi³) dan luas permukaan (6 × sisi²)
- hitungBalok(): Menghitung volume (p × l × t) dan luas permukaan (2(pl + pt + lt))
- hitungTabung(): Menghitung volume (πr²t) dan luas permukaan (2πr(r + t))
- Validasi input untuk memastikan nilai positif
- Hasil ditampilkan dengan format yang rapi dan presisi 2 angka desimal

# ANALISIS CSS
## Body Styling
```css
body {
    font-family: Arial, sans-serif;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
}
```
### Analisis :
- font-family: Arial, sans-serif - Menggunakan font Arial sebagai default dengan fallback sans-serif
- max-width: 1200px - Membatasi lebar maksimal halaman untuk readability
- margin: 0 auto - Memusatkan konten secara horizontal
- padding: 20px - Memberikan ruang di sekeliling konten
- background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) - Gradient diagonal dari biru ke ungu
- min-height: 100vh - Memastikan background memenuhi tinggi viewport minimal

## Container Utama
```css
.container {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    margin-bottom: 30px;
}
```
### Analisis :
- background: white - Background putih untuk kontras dengan gradient body
- border-radius: 15px - Sudut melengkung untuk tampilan modern
- padding: 30px - Ruang dalam yang generous
- box-shadow: 0 10px 30px rgba(0,0,0,0.3) - Bayangan dramatis untuk efek floating
- margin-bottom: 30px - Jarak bawah antar container

## Heading Styles
```css
h1, h2 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    background: linear-gradient(45deg, #667eea, #764ba2);
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 2.5em;
    margin-bottom: 40px;
}
```
### Analisis : 
- h1, h2 - Styling dasar untuk semua heading utama
- color: #333 - Warna teks gelap untuk kontras baik
- text-align: center - Perataan tengah
>
- H1 khusus:
- * background: linear-gradient(45deg, #667eea, #764ba2) - Gradient background untuk teks
- * background-clip: text - Memotong background sesuai bentuk teks
- * -webkit-text-fill-color: transparent - Membuat teks transparan agar gradient terlihat
- * font-size: 2.5em - Ukuran besar untuk hierarchy

## Section Tugas
```css
.tugas-section {
    margin-bottom: 50px;
    padding: 25px;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}
```
### Analisis :
- margin-bottom: 50px - Jarak besar antar section
- padding: 25px - Ruang dalam yang cukup
- border: 2px solid #e0e0e0 - Border tipis abu-abu muda
- border-radius: 12px - Sudut melengkung konsisten
- background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%) - Gradient subtle dari putih ke abu-abu

## Input Group Layout
```css
.input-group {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}
```
### Analisis :
- display: flex - Menggunakan flexbox untuk layout horizontal
- align-items: center - Menyelaraskan elemen secara vertikal
- gap: 10px - Jarak konsisten antar elemen
- flex-wrap: wrap - Memungkinkan pembungkusan pada layar kecil
- margin-bottom: 15px - Jarak antar group input

## Label Styling
```css
label {
    font-weight: bold;
    color: #555;
    min-width: 120px;
}
```
### Analisis :
- font-weight: bold - Tebal untuk penekanan
- color: #555 - Abu-abu medium untuk hierarchy
- min-width: 120px - Lebar minimum untuk alignment yang rapi

## Input Fields
```css
input[type="text"], input[type="number"] {
    padding: 10px;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="text"]:focus, input[type="number"]:focus {
    border-color: #667eea;
    outline: none;
}
```
### Analisis :
- padding: 10px - Ruang dalam yang nyaman untuk mengetik
- border: 2px solid #ddd - Border abu-abu muda
- border-radius: 8px - Sudut melengkung kecil
- font-size: 16px - Ukuran font yang mudah dibaca
- transition: border-color 0.3s - Animasi smooth saat focus
- Focus state: Border berubah ke warna tema dengan - outline dihilangkan

## Button Styling
```css
button {
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.2s;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
```
### Analisis :
- background: linear-gradient(45deg, #667eea, #764ba2) - Gradient tema
- color: white - Teks putih untuk kontras
- border: none - Menghilangkan border default
- padding: 12px 20px - Ruang dalam horizontal lebih besar
- cursor: pointer - Menunjukkan elemen clickable
- Hover effect: Lift animation 2px ke atas dengan shadow enhancement

## Result Display
```css
.result {
    margin-top: 15px;
    padding: 15px;
    background: #f8f9fa;
    border-left: 4px solid #667eea;
    border-radius: 0 8px 8px 0;
    font-weight: bold;
    color: #333;
}
```
### Analisis :
- background: #f8f9fa - Background abu-abu sangat muda
- border-left: 4px solid #667eea - Accent border kiri dengan warna tema
- border-radius: 0 8px 8px 0 - Radius hanya di sisi kanan
- font-weight: bold - Teks tebal untuk emphasis
- padding: 15px - Ruang dalam yang cukup

## Calculator Grid
```css
.calculator {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
    max-width: 300px;
    margin: 20px auto;
}

.calculator input {
    grid-column: 1 / -1;
    padding: 15px;
    font-size: 18px;
    text-align: right;
    border: 2px solid #ddd;
    border-radius: 8px;
}

.calculator button {
    padding: 15px;
    font-size: 18px;
    border-radius: 8px;
}
```
### Analisis :
- display: grid - Menggunakan CSS Grid untuk layout kalkulator
- grid-template-columns: repeat(4, 1fr) - 4 kolom dengan lebar sama
- gap: 10px - Jarak antar button
- max-width: 300px - Ukuran maksimal kalkulator
- Input display: grid-column: 1 / -1 membuat input span semua kolom
- text-align: right - Alignment kanan seperti kalkulator standar

## Special Calculator Buttons
```css
.operator {
    background: linear-gradient(45deg, #ff6b6b, #ee5a24) !important;
}

.equals {
    background: linear-gradient(45deg, #2ecc71, #27ae60) !important;
}
```
### Analisis :
- .operator - Button operator dengan gradient orange-red untuk distinction
- .equals - Button sama dengan menggunakan gradient hijau
- !important - Override styling button default

## Geometry Grid
```css
.geometry-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.geometry-item {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border: 2px solid #e0e0e0;
}
```
### Analisis :
- repeat(auto-fit, minmax(300px, 1fr)) - Responsive grid yang menyesuaikan jumlah kolom
- minmax(300px, 1fr) - Minimum 300px, maximum mengisi ruang tersedia
- Geometry items: Card putih dengan shadow subtle dan border tipis

## Array Display
```css
.array-display {
    background: #f1f3f4;
    padding: 15px;
    border-radius: 8px;
    font-family: 'Courier New', monospace;
    margin: 10px 0;
}
```
### Analisis :
- background: #f1f3f4 - Background abu-abu muda untuk code display
- font-family: 'Courier New', monospace - Font monospace untuk data terstruktur
- padding: 15px - Ruang dalam yang cukup
- margin: 10px 0 - Jarak vertikal