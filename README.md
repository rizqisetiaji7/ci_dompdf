# Ci_dompdf

Codeigniter library untuk generate file HTML ke format PDF menggunakan DomPdf

## Cara Menggunakan

1. Clone atau download repositori ini

   ```
   git clone https://github.com/rizqisetiaji7/ci_dompdf
   ```

2. Install / Update library DomPdf (menggunakan composer), dengan peritah berikut:

   ```
   composer update
   ```

3. Ubah config composer_autoload pada direktori `application/config/config.php` menjadi sebagai berikut:

   ```
   $config['composer_autoload'] = "vendor/autoload.php";
   ```

4. Load library Cipdf pada controller yang akan digunakan
   ```
   $this->load->library('cipdf');
   ```

_Untuk langkah ke-2 wajib install composer terlebih dahulu pada komputer._
