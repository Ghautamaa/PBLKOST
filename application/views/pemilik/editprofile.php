<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
        <div class="formbold-mb-3">
          <h2><center>Form Edit Profile</center></h2>
        </div>
     <!-- <img src="your-image-here.jpg"> -->
    <form method="POST" action="<?php echo base_url ('cprofile/editKost'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>" >
      <div class="formbold-input-flex">
        <div>
          <label class="formbold-form-label"> Nama Lengkap </label>
          <input
            type="text"
            name="nama_user"
            id="nama_user"
            placeholder="Nama yang Baru"
            class="formbold-form-input"
            value="<?php echo $this->session->userdata('nama_user');?>"
          />
        </div>

        <div>
          <label  class="formbold-form-label"> Whatsapp </label>
          <input
            type="text"
            name="nomor_whatsapp"
            id="nomor_whatsapp"
            placeholder="Masukan No. Whatsapp"
            class="formbold-form-input"
            value="<?php echo $this->session->userdata('nomor_whatsapp');?>"
          />
        </div>
      </div>

      <!-- <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label"> Email </label>

        <input
          type="text"
          name="alamat_email"
          id="alamat_email"
          placeholder="Masukan Email baru"
          class="formbold-form-input formbold-mb-3"
          value=""
        /> -->

      <!-- <div class="formbold-input-flex">
        <div>
            <label class="formbold-form-label"> Kode Pos </label>
            <input
            type="text"
            name="kodepos"
            id="kodepos"
            placeholder="Masukan Kodepos"
            class="formbold-form-input"
            value=""
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
            value=""
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
        ></textarea>
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
          value=""
        />
      </div> -->

      <button type="submit" class="formbold-btn">Ubah</button>
      <a href="<?php echo base_url ('cprofile/tampilPemilik'); ?>"><button type="button" class="formbold-btn2">Kembali</button></a>
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