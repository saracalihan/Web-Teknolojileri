# Web Teknolojileri Projesi
### Proje Amacı:
Bu repository _Sakarya Üniversitesi_ bilgisayar mühendisliği ***Web Teknolojileri*** dersi projesinin paylaşılması amacıyla oluşturulmuştur.Kod incelemesi yaparak bana destek olun.Benimle aşağıdaki adreslerden iletişime geçebilirsiniz.

### Projede Kullanılacak teknolojiler:
+ HTML
+ CSS
+ PHP
+ Javascript
+ Vue.js
+ Bootstrap

### Proje Detayları:
  Bu projede amaç yukarıdaki bahsi geçen teknolojilerdeki tecrübemi arttırmak amacıyla kişisel web sitesi yapılmasıdır.Söz konusu sitede giriş niteliğinde kendimi tanıttığım bir ***[hakkımda](/src/views/hakkimda.vue)*** sayfası , cv niteliğinde ***[eğitim](/src/views/egitim.vue)*** sayfası , memleketim olan _[Görele](https://www.gorele.bel.tr)_'nin nüfus, ünlü şeyleri, gezilecek yerler gibi özelliklerini anlatan ve sayfa başında slider ile anlatılan konular hakkında grafikler ve resimler bulunacağı ***[şehrim](/src/views/sehrim.vue)*** sayfası , _Görele_'nin kültürel mirasını anlatan ve tüm _HTML_ elemanlarını içeren ***[mirasımız](/src/views/mirasimiz.vue)*** sayfası , _PHP_ ile girilen şifre kullanıcı adı gibi değişkenleri _[regex](https://tr.wikipedia.org/wiki/D%C3%BCzenli_ifade)_ ve _Vue.js_ ile düzenleneceği ve  doğrulanınca bir ***[admin](/src/views/admin.vue)*** sayfasına yönlendirileceği ***[login](/src/views/login.vue)*** sayfası bulunacaktır.

Sayfalar arası geçiş bir navigasyon barı ile yapılacaktır.Site responsive yapıda olacaktır .Web sayfasının *[single page application](https://tr.wikipedia.org/wiki/Tek_sayfa_uygulamas%C4%B1)* olması planlanmıştır <sup id="a1"> [1](#f1)</sup> .

#### Sayfanın canlı haline adres çubuğuna "[https://g191210057.000webhostapp.com/](https://g191210057.000webhostapp.com/)" yazarak ulaçabilirsiniz.

> **Aşağıdaki kodları terminalde dosya konumundayken kullanın.**

### Derlemele ve yeniden yüklemele
```
npm run serve
yarn serve
```

### Üretim için derler ve küçültür
```
npm run build
```

### Dosyaları Lintler ve fixler
```
npm run lint
```

### Konfigrasyon 
Bkz: [Konfigrasyon referansı](https://cli.vuejs.org/config/).

***
_Alihan SARAÇ_

E // <saracalihan@gmail.com>

A // [Saü Bilişim ve Bilgisayar Fakültesi/Serdivan/SAKARYA](https://goo.gl/maps/9vEdj7QYgKpruSus7 "Okul")

>30/03/2020

![SAÜ](https://upload.wikimedia.org/wikipedia/tr/d/de/Sakarya_%C3%9Cniversitesi_Logosu.png) ![Web Teknolojileri](https://polatpanel.com/public/default/upload/service/56f3a669e5e2aweb-yazilim.jpg) 

***
<b id="f1"> [1]: </b> Kesinlik bulunmamakla birlikte planlama bu şekilde yapılmıştır, değişiklik yapılabilir. [?](#a1)
== Dosya boyutunun yüksekliği nedeniyle proje single page yapılmamıştır.Vue.js bu yüzden tercih edilmemiştir. ==
