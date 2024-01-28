<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
        <div class="formbold-mb-3">
          <h2><center>Form Edit Kost</center></h2>
        </div>
     <!-- <img src="your-image-here.jpg"> -->
    <form method="POST" action="<?php echo base_url ('cprofile/editKost'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="id_kost" value="<?php echo $datakost->id_kost?>" >
      <div class="formbold-input-flex">
        <div>
          <label class="formbold-form-label"> Nama Kost </label>
          <input
            type="text"
            name="namaKost"
            id="namaKost"
            placeholder="Nama Kost yang Baru"
            class="formbold-form-input"
            value="<?php echo $datakost->namaKost?>"
          />
        </div>

        <div>
            <label class="formbold-form-label">Kecamatan</label>
            <select class="formbold-form-input" name="kecamatan" id="kecamatan" required>
            <option value="" disabled selected>--Pilih Kecamatan--</option>
            <option value="Abiansemal">Abiansemal</option>
            <option value="Kuta">Kuta</option>
            <option value="Kuta Selatan">Kuta Selatan</option>
            <option value="Kuta Utara">Kuta Utara</option>
            <option value="Mengwi">Mengwi</option>
            <option value="Petang">Petang</option>
            <option value="Bangli">Bangli</option>
            <option value="Kintamani">Kintamani</option>
            <option value="Susut">Susut</option>
            <option value="Tembuku">Tembuku</option>
            <option value="Banjar">Banjar</option>
            <option value="Buleleng">Buleleng</option>
            <option value="Busung Biu">Busung Biu</option>
            <option value="Gerokgak">Gerokgak</option>
            <option value="Kubutambahan">Kubutambahan</option>
            <option value="Sawan">Sawan</option>
            <option value="Seririt">Seririt</option>
            <option value="Sukasada">Sukasada</option>
            <option value="Tejakula">Tejakula</option>
            <option value="Blahbatuh">Blahbatuh</option>
            <option value="Gianyar">Gianyar</option>
            <option value="Payangan">Payangan</option>
            <option value="Sukawati">Sukawati</option>
            <option value="Tampaksiring">Tampaksiring</option>
            <option value="Tegallalang">Tegallalang</option>
            <option value="Ubud">Ubud</option>
            <option value="Jembrana">Jembrana</option>
            <option value="Melaya">Melaya</option>
            <option value="Mendoyo">Mendoyo</option>
            <option value="Negara">Negara</option>
            <option value="Pekutatan">Pekutatan</option>
            <option value="Abang">Abang</option>
            <option value="Bebandem">Bebandem</option>
            <option value="Karangasem">Karangasem</option>
            <option value="Kubu">Kubu</option>
            <option value="Manggis">Manggis</option>
            <option value="Rendang">Rendang</option>
            <option value="Selat">Selat</option>
            <option value="Sidemen">Sidemen</option>
            <option value="Banjarangkan">Banjarangkan</option>
            <option value="Dawan">Dawan</option>
            <option value="Klungkung">Klungkung</option>
            <option value="Nusa Penida">Nusa Penida</option>
            <option value="Baturiti">Baturiti</option>
            <option value="Kediri">Kediri</option>
            <option value="Kerambitan">Kerambitan</option>
            <option value="Marga">Marga</option>
            <option value="Penebel">Penebel</option>
            <option value="Pupuan">Pupuan</option>
            <option value="Selemadeg">Selemadeg</option>
            <option value="Selemadeg Barat">Selemadeg Barat</option>
            <option value="Selemadeg Timur">Selemadeg Timur</option>
            <option value="Tabanan">Tabanan</option>
            <option value="Denpasar Barat">Denpasar Barat</option>
            <option value="Denpasar Selatan">Denpasar Selatan</option>
            <option value="Denpasar Timur">Denpasar Timur</option>
            <option value="Denpasar Utara">Denpasar Utara</option>
            </select>
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label"> Alamat Lengkap </label>

        <input
          type="text"
          name="alamatKost"
          id="alamatKost"
          placeholder="Alamat Lengkap"
          class="formbold-form-input formbold-mb-3"
          value="<?php echo $datakost->alamatKost?>"
        />

      <div class="formbold-input-flex">
        <div>
            <label class="formbold-form-label"> Kode Pos </label>
            <input
            type="text"
            name="kodepos"
            id="kodepos"
            placeholder="Masukan Kodepos"
            class="formbold-form-input"
            value="<?php echo $datakost->kodepos?>"
            />
        </div>

        <div>
            <label class="formbold-form-label">Harga Kost</label>
            <input
            type="text"
            name="hargaKost"
            id="hargaKost"
            placeholder="Masukan Harga Kost"
            class="formbold-form-input"
            value="<?php echo $datakost->hargaKost?>"
            />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label class="formbold-form-label">
          Deskripsi
        </label>
        <textarea
          rows="6"
          name="deskripsi"
          id="deskripsi"
          class="formbold-form-input"
        ><?php echo $datakost->deskripsi?></textarea>
      </div>

      <div class="formbold-form-file-flex">
        <label for="upload" class="formbold-form-label">
          Gambar Kost :
        </label>
        <input
          type="file"
          name="gambar"
          id="gambar"
          class="formbold-form-file"
          value="<?php echo $datakost->gambar?>"
        />
      </div>

      <button type="submit" class="formbold-btn">Ubah</button>
      <a href="<?php echo base_url ('ctampilan/tabelKostedit'); ?>"><button type="button" class="formbold-btn2">Kembali</button></a>
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Montserrat', sans-serif;
    background-image: url(<?php echo base_url('')?>/img/daftarkos.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }
  .formbold-mb-3 {
    margin-bottom: 20px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
    box-shadow: 10px 5px 10px rgba(0,0,0,0.5);
    padding: 20px;
    border: 1px none;
    border-radius:10px;
    
  }

  .formbold-img {
    display: block;
    margin: 0 auto 45px;
  }

  .formbold-input-wrapp > div {
    display: flex;
    gap: 20px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #333;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder,
  select.formbold-form-input,
  .formbold-form-input[type='date']::-webkit-datetime-edit-text,
  .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-file-flex {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .formbold-form-file-flex .formbold-form-label {
    margin-bottom: 0;
  }
  .formbold-form-file {
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-form-file::-webkit-file-upload-button {
    display: none;
  }
  .formbold-form-file:before {
    content: 'Upload file';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #FBFBFB;
    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: #637381;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #4287f5;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn2 {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #063d96;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-w-45 {
    width: 45%;
  }
</style>