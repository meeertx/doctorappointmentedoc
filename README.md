 Online Doktor Randevu Sistemi

eDoc, hastaların online olarak doktor randevusu alabileceği, doktorların oturumlarını yönetebileceği ve yöneticilerin tüm sistemi kontrol edebileceği modern bir web tabanlı randevu yönetim sistemidir.

## 📋 İçindekiler

- [Özellikler](#özellikler)
- [Teknolojiler](#teknolojiler)
- [Kurulum](#kurulum)
- [Veritabanı Kurulumu](#veritabanı-kurulumu)
- [Kullanım](#kullanım)
- [Varsayılan Giriş Bilgileri](#varsayılan-giriş-bilgileri)
- [Proje Yapısı](#proje-yapısı)
- [Güvenlik Notları](#güvenlik-notları)
- [Ekran Görüntüleri](#ekran-görüntüleri)

## ✨ Özellikler

### 👨‍💼 Admin Paneli
- Doktor ekleme, düzenleme ve silme
- Doktor oturumlarını planlama ve yönetme
- Hasta detaylarını görüntüleme
- Hasta randevularını görüntüleme ve yönetme
- Dashboard ile genel sistem istatistikleri
- Doktor arama özelliği

### 👨‍⚕️ Doktor Paneli
- Randevularını görüntüleme
- Planlanmış oturumlarını görüntüleme ve yönetme
- Hasta detaylarını görüntüleme
- Hesap ayarlarını düzenleme
- Hesap silme

### 👤 Hasta Paneli
- Online randevu oluşturma
- Kendi hesabını oluşturma
- Geçmiş randevularını görüntüleme
- Hesap ayarlarını düzenleme
- Hesap silme
- Doktorları görüntüleme ve arama

## 🛠️ Teknolojiler

- **Backend:** PHP
- **Veritabanı:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Sunucu:** Apache (XAMPP/WAMP/LAMP)

## 📦 Kurulum

### Gereksinimler
- PHP 7.3 veya üzeri
- MySQL 5.7 veya üzeri
- Apache Web Sunucusu
- XAMPP, WAMP veya LAMP (önerilen: XAMPP)

### Adımlar

1. **Projeyi İndirin**
   ```bash
   git clone <repository-url>
   cd DoctorAppointmentEdoc-main/doctorAppointment
   ```

2. **XAMPP'ı Başlatın**
   - XAMPP Control Panel'i açın
   - Apache ve MySQL servislerini başlatın

3. **Projeyi Web Sunucusu Dizinine Kopyalayın**
   - XAMPP için: `C:\xampp\htdocs\` (Windows) veya `/opt/lampp/htdocs/` (Linux)
   - WAMP için: `C:\wamp64\www\`
   - LAMP için: `/var/www/html/`

4. **Veritabanı Bağlantı Ayarlarını Yapılandırın**
   - `connection.php` dosyasını açın
   - Veritabanı bilgilerinizi güncelleyin:
   ```php
   $servername = "localhost";
   $username = "root";        // MySQL kullanıcı adınız
   $password = "";            // MySQL şifreniz
   $dbname = "edoc";          // Veritabanı adı
   ```

## 🗄️ Veritabanı Kurulumu

1. **phpMyAdmin'e Giriş Yapın**
   - Tarayıcınızda `http://localhost/phpmyadmin` adresine gidin

2. **Veritabanını Oluşturun**
   - Yeni bir veritabanı oluşturun: `edoc`
   - Karakter seti: `utf8mb4`
   - Sıralama: `utf8mb4_general_ci`

3. **SQL Dosyasını İçe Aktarın**
   - `SQL_Database_edoc.sql` dosyasını seçin
   - "İçe Aktar" (Import) sekmesine gidin
   - Dosyayı seçin ve "Git" (Go) butonuna tıklayın

   Alternatif olarak, SQL dosyasını doğrudan çalıştırabilirsiniz:
   ```sql
   -- phpMyAdmin'de SQL sekmesine gidin
   -- SQL_Database_edoc.sql dosyasının içeriğini yapıştırın ve çalıştırın
   ```

4. **Veritabanı Tabloları**
   Sistem aşağıdaki tabloları içerir:
   - `admin` - Yönetici bilgileri
   - `doctor` - Doktor bilgileri
   - `patient` - Hasta bilgileri
   - `appointment` - Randevu kayıtları
   - `schedule` - Doktor oturum planları
   - `specialties` - Tıbbi uzmanlık alanları
   - `webuser` - Kullanıcı tipi eşleştirmeleri

## 🚀 Kullanım

1. **Web Tarayıcısında Açın**
   ```
   http://localhost/doctorAppointment/
   ```

2. **Ana Sayfa**
   - Sistem hakkında bilgi
   - Giriş ve kayıt bağlantıları

3. **Kayıt Ol**
   - Hasta olarak kayıt olmak için "REGISTER" butonuna tıklayın
   - Kişisel bilgilerinizi doldurun
   - E-posta ve şifre oluşturun

4. **Giriş Yap**
   - Admin, Doktor veya Hasta olarak giriş yapabilirsiniz
   - Varsayılan giriş bilgileri için aşağıdaki bölüme bakın

## 🔐 Varsayılan Giriş Bilgileri

Sistemi test etmek için aşağıdaki varsayılan hesapları kullanabilirsiniz:

| Rol | E-posta | Şifre |
|-----|---------|-------|
| **Admin** | `admin@edoc.com` | `123` |
| **Doktor** | `doctor@edoc.com` | `123` |
| **Hasta** | `patient@edoc.com` | `123` |

⚠️ **Önemli:** Üretim ortamında mutlaka bu şifreleri değiştirin!

## 📁 Proje Yapısı

```
doctorAppointment/
├── admin/              # Admin paneli dosyaları
│   ├── index.php      # Admin dashboard
│   ├── doctors.php    # Doktor yönetimi
│   ├── schedule.php   # Oturum yönetimi
│   ├── appointment.php # Randevu yönetimi
│   └── patient.php    # Hasta listesi
├── doctor/            # Doktor paneli dosyaları
│   ├── index.php      # Doktor dashboard
│   ├── appointment.php # Randevular
│   ├── schedule.php   # Oturumlar
│   └── settings.php   # Ayarlar
├── patient/           # Hasta paneli dosyaları
│   ├── index.php      # Hasta dashboard
│   ├── booking.php    # Randevu oluşturma
│   ├── doctors.php    # Doktor listesi
│   └── settings.php   # Ayarlar
├── css/               # Stil dosyaları
│   ├── main.css       # Ana stil dosyası
│   ├── admin.css      # Admin paneli stilleri
│   ├── patient.css    # Hasta paneli stilleri
│   └── animations.css # Animasyonlar
├── img/               # Görseller ve ikonlar
├── connection.php     # Veritabanı bağlantısı
├── login.php          # Giriş sayfası
├── signup.php         # Kayıt sayfası
├── logout.php         # Çıkış işlemi
└── SQL_Database_edoc.sql # Veritabanı yapısı
```

## 🔒 Güvenlik Notları

⚠️ **Önemli Güvenlik Uyarıları:**

1. **SQL Injection:** Mevcut kodda SQL injection açıkları bulunmaktadır. Üretim ortamında kullanmadan önce:
   - Prepared statements kullanın
   - Kullanıcı girdilerini doğrulayın ve temizleyin
   - PDO veya mysqli prepared statements kullanın

2. **Şifre Güvenliği:**
   - Şifreler düz metin olarak saklanmaktadır
   - Üretim ortamında mutlaka `password_hash()` ve `password_verify()` kullanın

3. **Oturum Güvenliği:**
   - Oturum yönetimini güçlendirin
   - CSRF koruması ekleyin
   - XSS koruması için `htmlspecialchars()` kullanın

4. **Veritabanı Bağlantısı:**
   - Üretim ortamında veritabanı bilgilerini güvenli bir şekilde saklayın
   - `.env` dosyası kullanmayı düşünün

5. **Dosya İzinleri:**
   - Hassas dosyaların web erişimini kısıtlayın
   - `.htaccess` dosyası kullanın


