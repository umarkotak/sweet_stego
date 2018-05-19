# Sweet Stego #
A steganography application that will protect your certificate with certain data

---

### Protect Certificate ###
Proses pemasukan data kepimilikan sertifikat ke dalam gambar sertifikat

---

### Check Certificate ###
Proses pembacaan data rahasia yang ada di dalam sertifikat

---

### Data Strucutre ###
Aplikasi ini menyimpan data berupa json file yang telah dienkripsi dengan menggunakan SHA512
Kemudian dienkripsi kembali dengan AES dan key berasal dari SHA512 yang dibalik
```
{"certificate_name":"workshop uml","certificate_publisher":"lab lanjut stt pln","certificate_date_published":"2015-05-15","certificate_number":"201501","certificate_additional_information":"sertifikat uml di lab lanjut stt pln, peserta dengan hasil baik","certificate_owner_name":"m umar ramadhana"}
```

### Features ###
1. AES Encryption
2. SHA 512
3. Least Significant Bit Steganography
4. Encrypt 800 x 450 pixels