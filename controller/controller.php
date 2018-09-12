<?php 
	include "model/model.php";
	
	class Controller {
		public $model;

		function __construct(){
			$this->model = new model();
		}

		function home() {
			include "view/Home.php";
		}

		function homeAdmin(){
			include "view/homeAdmin.php";
		}

		function homeLogin{
			include "view/homeLogin.php";
		}

		function signUp(){
			include "view/signup.php";
		}

		function insertDaftar() {
			$Firstname = $_POST['firstname'];
		  	$Lastname = $_POST['lastname'];
		  	$Email = $_POST['email'];
		  	$Password = $_POST['password'];
		  	$Confirm = $_POST['confirm'];
		  	$Gender = $_POST['gender']; 
		  	$Birthday = $_POST['birthday'];
		  	$Handphone = $_POST['nohp'];
		  	$Address = $_POST['address'];
		  	$Province = $_POST['province'];
		  	$City = $_POST['city']; 
		  	$District = $_POST['district'];
		  	$Postal = $_POST['postal_code'];
		  	$Account = $_POST['account'];
		  	$Bank = $_POST['bank'];

			$insert = $this->model->insertDaftar($Firstname, $Lastname, $Email, $Password, $Confirm, $Gender, $Birthday, $Handphone, $Address, $Province, $City, $District, $Postal, $Account, $Bank);
			header("location: homelogin.php")
			//header("location: index.php?page=pRW");
		}

		function tampilKelurahan() {
			$data = $this->model->viewKelurahan();
			include "view/dataKelurahan.php";
		}

// =================Tampil RW================
		function tampilRW() {
			$data = $this->model->viewRW();
			include "view/datarw.php";
		}

// =================Tampil RT================
		function tampilRT() {
			$data = $this->model->viewRT();
			include "view/dataRt.php";
		}

// =================Tampil Dasawisma================
		function tampilDasawisma() {
			$data = $this->model->viewDasawisma();
			include "view/dataDasawisma.php";
		}

// =================Tampil Keluarga================
		function tampilKeluarga() {
			$data = $this->model->viewKeluarga();
			include "view/dataKeluarga.php";
		}

// =================Tampil Warga================
		function tampilWarga() {
			$data = $this->model->viewWarga();
			include "view/dataWarga.php";
		}

// =================Tampil Kader================
		function tampilKader() {
			$data = $this->model->viewKader();
			include "view/dataKader.php";
		}

// =================Tampil Pelatihan================
		function tampilPelatihan() {
			$data = $this->model->viewPelatihan();
			include "view/dataPelatihan.php";
		}

// =================Tampil Warung================
		function tampilWarung() {
			$data = $this->model->viewWarung();
			include "view/dataWarung.php";
		}

// =================Tampil Posyandu================
		function tampilPosyandu() {
			$data = $this->model->viewPosyandu();
			include "view/dataPosyandu.php";
		}

// =================Tampil Keluarga2================
		function tampilkeluarga2() {
			$data = $this->model->viewKeluarga2();
			include "view/dataKeluarga2.php";
		}

// =================Tampil Warga================
		function tampilWarga2() {
			$data = $this->model->viewWarga2();
			include "view/dataWarga2.php";
		}

// =================Tampil Pelatihan2================
		function tampilPelatihan2($id = NULL) {
			session_start();
			$form = ($id == NULL) ? NULL : $this->model->dataPelatihan($id); //pada class ini (controller), akses class model, akses fungsi data_menu_id (kalo bingung lihat di class model ada fungsi data_pemilik)
			$data = $this->model->data_pelatihan($_SESSION['NamaPengguna']); //pada class ini (controller), akses class model, akses fungsi data_menu (kalo bingung lihat di class model ada fungsi data_menu)
			include "view/dataPelatihan2.php"; //memamnggil index.php pada folder view
		}

// ===================Page Login===================
		function cekLogin() {
			error_reporting(0);
			session_start();
			$NamaPengguna = $_POST['NamaPengguna'];
			$Sandi = $_POST['Sandi'];
			if ($NamaPengguna == "" || $Sandi == "") {
				$_SESSION['pesan_sistem'] = "alert('Email atau Password tidak boleh kosong')";
				header("location:index.php?p=loginHome");
			} else {
				$data = $this->model->cekLogin($NamaPengguna, $Sandi);

				$row = $this->model->fetch($data);
				if ($row['ID_Level'] == 1) {
					$_SESSION['ID'] = $row['ID'];
					header("location:index.php?page=homeKepala");
				} else if ($row['ID_Level'] == 2) {
					$_SESSION['ID'] = $row['ID'];
					header("location:index.php?page=homeAdmin");
				} else if ($row['ID_Level'] == 3) {
					if ($this->model->num_rows($data) > 0){
						$_SESSION['NamaPengguna'] = $NamaPengguna;
						header("location:index.php?page=homePengurus");
					}					
				} else {
					$_SESSION['pesan_sistem'] = "alert('Email atau Password salah')";
					header("location:index.php?p=loginHome");
				}
			}
		}

// ===================Logout===================
		function logout() {
			session_start();
			session_destroy();
			header("location: index.php?p=loginHome");
		}

// =================RW=================
		function insertRW() {
			$NamaRW = $_POST['NamaRW'];
			$NoDesa = $_POST['NoDesa'];

			$insert = $this->model->insertRW($NamaRW,$NoDesa);
			header("location: index.php?page=pRW");
		}

		function editRW($id) {
			$data = $this->model->editRW($id);
			$row = $this->model->fetch($data);
			include "view/editRW.php";
		}

		function updateRW() {
			$NoRW = $_POST['NoRW'];
			$NamaRW = $_POST['NamaRW'];
			$NoDesa = $_POST['NoDesa'];

			$update = $this->model->updateRW($NoRW,$NamaRW,$NoDesa);
			header("location: index.php?page=pRW");
		}

		function deleteRW($id) {
			$delete = $this->model->deleteRW($id);
			header("location: index.php?page=pRW");
		}
		
		function findRW() {
			$a = $_POST['RW'];
			$data = $this->model->findRW($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/datarw.php"; //memamnggil view.php pada folder view
		}

// =================RT=================
		function insertRT() {
			$NamaRT = $_POST['NamaRT'];
			$NoDesa = $_POST['NoDesa'];
			$NoRW = $_POST['NoRW'];

			$insert = $this->model->insertRT($NamaRT, $NoRW, $NoDesa);
			header("location: index.php?page=pRT");
		}

		function editRT($id) {
			$data = $this->model->editRT($id);
			$row = $this->model->fetch($data);
			include "view/editDataRT.php";
		}

		function updateRT() {
			$NoRT = $_POST['NoRT'];
			$NoRW = $_POST['NoRW'];
			$NamaRT = $_POST['NamaRT'];


			$update = $this->model->updateRT($NoRT,$NamaRT,$NoRW);
			header("location: index.php?page=pRT");
		}

		function deleteRT($id) {
			$delete = $this->model->deleteRT($id);
			header("location: index.php?page=pRT");
		}

		function findRT() {
			$a = $_POST['RT'];
			$data = $this->model->findRT($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataRt.php"; //memamnggil view.php pada folder view
		}

// =================Dasawisma=================		
		function insertDasawisma() {
			$KelDawis = $_POST['KelDawis'];
			$NoRT = $_POST['NoRT'];

			$insert = $this->model->insertDasawisma($KelDawis, $NoRT);
			header("location: index.php?page=pDasawisma");
		}

		function editDasawisma($id) {
			$data = $this->model->editDasawisma($id);
			$row = $this->model->fetch($data);
			include "view/editDasawisma.php";
		}

		function updateDasawisma() {
			$NoKelDawis = $_POST['NoRT'];
			$NoRW = $_POST['NoRW'];
			$NamaRT = $_POST['NamaRT'];


			$update = $this->model->updateDasawisma($NoRT,$NamaRT,$NoRW);
			header("location: index.php?page=pDasawisma");
		}

		function deleteDasawisma($id) {
			$delete = $this->model->deleteDasawisma($id);
			header("location: index.php?page=pDasawisma");
		}

		function findDasawisma() {
			$a = $_POST['Dasawisma'];
			$data = $this->model->findDasawisma($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataDasawisma.php"; //memamnggil view.php pada folder view
		}

// =================Keluarga=================
		function insertKeluarga() {
			$NoKK = $_POST['NoKK'];
			$JmlAnggota = $_POST['JmlAnggota'];
			$JmlLaki = $_POST['JmlLaki'];
			$JmlWanita = $_POST['JmlWanita'];
			$JmlBalita = $_POST['JmlBalita'];
			$JmlLansia = $_POST['JmlLansia'];
			$JmlBumil = $_POST['JmlBumil'];
			$JmlPUS = $_POST['JmlPUS'];
			$JmlWUS = $_POST['JmlWUS'];

			$insert = $this->model->insertKeluarga($NoKK,$JmlAnggota,$JmlLaki,$JmlWanita,$JmlBalita,$JmlLansia,$JmlBumil,$JmlPUS,$JmlWUS);
			header("location: index.php?page=pKeluarga");
		}

		function findKeluarga() {
			$a = $_POST['Keluarga'];
			$data = $this->model->findKeluarga($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataKeluarga.php"; //memamnggil view.php pada folder view
		}

		function editKeluarga($id) {
			$data = $this->model->editKeluarga($id);
			$row = $this->model->fetch($data);
			include "view/editKeluarga.php";
		}

		function updateKeluarga() {
			$NoKK = $_POST['NoKK'];
			$JmlAnggota = $_POST['JmlAnggota'];
			$JmlLaki = $_POST['JmlLaki'];
			$JmlWanita = $_POST['JmlWanita'];
			$JmlBalita = $_POST['JmlBalita'];
			$JmlLansia = $_POST['JmlLansia'];
			$JmlBumil = $_POST['JmlBumil'];
			$JmlPUS = $_POST['JmlPUS'];
			$JmlWUS = $_POST['JmlWUS'];

			$update = $this->model->updateKeluarga($NoKK,$JmlAnggota,$JmlLaki,$JmlWanita,$JmlBalita,$JmlLansia,$JmlBumil,$JmlPUS,$JmlWUS);
			header("location: index.php?page=pKeluarga");
		}

		function deleteKeluarga($id) {
			$delete = $this->model->deleteKeluarga($id);
			header("location: index.php?page=pKeluarga");
		}

// =================Warga=================
		function insertWarga() {
			$NoKeluarga = $_POST['NoKeluarga'];
			$StatusKeluarga = $_POST['StatusKeluarga'];
			$NIK = $_POST['NIK'];
			$Nama = $_POST['Nama'];
			$JenisKelamin = $_POST['JenisKelamin'];
			$KotaLahir = $_POST['KotaLahir'];
			$TglLahir = $_POST['TglLahir'];
			$TglLahir = date('Y-m-d', strtotime($TglLahir));
			$Agama = $_POST['Agama'];
			$Status = $_POST['Status'];
			$Alamat = $_POST['Alamat'];
			$Pendidikan = $_POST['Pendidikan'];
			$Pekerjaan = $_POST['Pekerjaan'];

			$insert = $this->model->insertWarga($NoKeluarga,$StatusKeluarga,$NIK,$Nama,$JenisKelamin,$KotaLahir,$TglLahir,$Agama,$Status,$Alamat,$Pendidikan,$Pekerjaan);
			header("location: index.php?page=pWarga");
		}

		function findWarga() {
			$a = $_POST['Warga'];
			$data = $this->model->findWarga($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataWarga.php"; //memamnggil view.php pada folder view
		}

		function editWarga($id) {
			$data = $this->model->editWarga($id);
			$row = $this->model->fetch($data);
			include "view/editWarga.php";
		}

		function updateWarga() {
			$NoKeluarga = $_POST['NoKeluarga'];
			$StatusKeluarga = $_POST['StatusKeluarga'];
			$NIK = $_POST['NIK'];
			$Nama = $_POST['Nama'];
			$JenisKelamin = $_POST['JenisKelamin'];
			$KotaLahir = $_POST['KotaLahir'];
			$TglLahir = $_POST['TglLahir'];
			$TglLahir = date('Y-m-d', strtotime($TglLahir));
			$Agama = $_POST['Agama'];
			$Status = $_POST['Status'];
			$Alamat = $_POST['Alamat'];
			$Pendidikan = $_POST['Pendidikan'];
			$Pekerjaan = $_POST['Pekerjaan'];

			$update = $this->model->updateWarga($NoKeluarga,$StatusKeluarga,$NIK,$Nama,$JenisKelamin,$KotaLahir,$TglLahir,$Agama,$Status,$Alamat,$Pendidikan,$Pekerjaan);
			header("location: index.php?page=pWarga");
		}

		function deleteWarga($id) {
			$delete = $this->model->deleteWarga($id);
			header("location: index.php?page=pWarga");
		}

		function showWarga($id) {
			$data = $this->model->showWarga($id);
			$row = $this->model->fetch($data);
			include "view/showWarga.php";
		}

// =================Kader=================
		function insertKader() {
			$NoPengguna = $_POST['NoPengguna'];
			$Nama = $_POST['Nama'];
			$NoRT = $_POST['NoRT'];
			$Jabatan = $_POST['Jabatan'];
			$TglMasuk = $_POST['TglMasuk'];
			$TglMasuk = date('Y-m-d', strtotime($TglMasuk));
			$Status = $_POST['Status'];

			      if($NoRT== '30'){
			        if($Status=='Aktif'){
			            $Status = 'Tidak Aktif';
			        } else if($Status=='Tidak Aktif'){
			            $Status = 'Aktif';
			        }
			      }


			$insert = $this->model->insertKader($NoPengguna,$Nama,$NoRT,$Jabatan,$TglMasuk,$Status);
			header("location: index.php?page=pKader");
		}

		function editKader($id) {
			$data = $this->model->editKader($id);
			$row = $this->model->fetch($data);
			include "view/editKader.php";
		}

		function updateKader() {
			$NoKader = $_POST['NoKader'];
			$Nama = $_POST['Nama'];
			$NoRT = $_POST['NoRT'];
			$Jabatan = $_POST['Jabatan'];
			$TglMasuk = $_POST['TglMasuk'];
			$TglMasuk = date('Y-m-d', strtotime($TglMasuk));
			$Status = $_POST['Status'];

			$update = $this->model->updateKader($NoKader,$Nama,$NoRT,$Jabatan,$TglMasuk,$Status);
			header("location: index.php?page=pKader");
		}

		function deleteKader($id) {
			$delete = $this->model->deleteKader($id);
			header("location: index.php?page=pKader");
		}

		function findKader() {
			$a = $_POST['Kader'];
			$data = $this->model->findKader($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataKader.php"; //memamnggil view.php pada folder view
		}

// =================Pelatihan=================
		function insertPelatihan() {
			$NoKader = $_POST['NoKader'];
			$NamaPelatihan = $_POST['NamaPelatihan'];
			$TempatPelatihan = $_POST['TempatPelatihan'];
			$TanggalPelatihan = $_POST['TanggalPelatihan'];
			$TanggalPelatihan = date('Y-m-d', strtotime($TanggalPelatihan));
			$Penyelenggara = $_POST['Penyelenggara'];
			$Bersertifikat = $_POST['Bersertifikat'];

			$insert = $this->model->insertPelatihan($NoKader,$NamaPelatihan,$TempatPelatihan,$TanggalPelatihan,$Penyelenggara,$Bersertifikat);
			header("location: index.php?page=pPelatihan");
		}

		function editPelatihan($id) {
			$data = $this->model->editPelatihan($id);
			$row = $this->model->fetch($data);
			include "view/editPelatihan.php";
		}

		function updatePelatihan() {
			$NoPelatihan = $_POST['NoPelatihan'];
			$NamaPelatihan = $_POST['NamaPelatihan'];
			$TempatPelatihan = $_POST['TempatPelatihan'];
			$TanggalPelatihan = $_POST['TanggalPelatihan'];
			$TanggalPelatihan = date('Y-m-d', strtotime($TanggalPelatihan));
			$Penyelenggara = $_POST['Penyelenggara'];
			$Bersertifikat = $_POST['Bersertifikat'];

			$update = $this->model->updatePelatihan($NoPelatihan,$NamaPelatihan,$TempatPelatihan,$TanggalPelatihan,$Penyelenggara,$Bersertifikat);
			header("location: index.php?page=pPelatihan");
		}

		function deletePelatihan($id) {
			$delete = $this->model->deletePelatihan($id);
			header("location: index.php?page=pPelatihan");
		}

		function findPelatihan() {
			$a = $_POST['Pelatihan'];
			$data = $this->model->findPelatihan($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataPelatihan.php"; //memamnggil view.php pada folder view
		}

// =================Validasi Pelatihan=================
		function validPelatihan($id) {
			$data = $this->model->validPelatihan($id);
			$row = $this->model->fetch($data);
			include "view/validPelatihan.php";
		}

		function validPelatihan2() {
			$NoPelatihan = $_POST['NoPelatihan'];
			$Keikutsertaan = $_POST['Keikutsertaan'];

			$update = $this->model->validPelatihan2($NoPelatihan, $Keikutsertaan);
			header("location: index.php?page=pPelatihan2");
		}

// =================Warung=================
		function insertWarung() {
			$NamaWarung = $_POST['NamaWarung'];
			$NamaPengelola = $_POST['NamaPengelola'];
			$Komoditi = $_POST['Komoditi'];
			$NoRT = $_POST['NoRT'];

			$insert = $this->model->insertWarung($NamaWarung,$NamaPengelola,$Komoditi,$NoRT);
			header("location: index.php?page=pWarung");
		}

		function editWarung($id) {
			$data = $this->model->editWarung($id);
			$row = $this->model->fetch($data);
			include "view/editWarung.php";
		}

		function updateWarung() {
			$NoWarung = $_POST['NoWarung'];
			$NamaWarung = $_POST['NamaWarung'];
			$NamaPengelola = $_POST['NamaPengelola'];
			$Komoditi = $_POST['Komoditi'];
			$NoRT = $_POST['NoRT'];

			$update = $this->model->updateWarung($NoWarung,$NamaWarung,$NamaPengelola,$Komoditi,$NoRT);
			header("location: index.php?page=pWarung");
		}

		function deleteWarung($id) {
			$delete = $this->model->deleteWarung($id);
			header("location: index.php?page=pWarung");
		}

		function findWarung() {
			$a = $_POST['Warung'];
			$data = $this->model->findWarung($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataWarung.php"; //memamnggil view.php pada folder view
		}

// =================Posyandu=================
		function insertPosyandu() {
			$NamaPosyandu = $_POST['NamaPosyandu'];
			$NamaPengelola = $_POST['NamaPengelola'];
			$JenisPosyandu = $_POST['JenisPosyandu'];
			$JmlKader = $_POST['JmlKader'];
			$NoRT = $_POST['NoRT'];

			$insert = $this->model->insertPosyandu($NamaPosyandu,$NamaPengelola,$JenisPosyandu,$JmlKader,$NoRT);
			header("location: index.php?page=pPosyandu");
		}

		function editPosyandu($id) {
			$data = $this->model->editPosyandu($id);
			$row = $this->model->fetch($data);
			include "view/editPosyandu.php";
		}

		function updatePosyandu() {
			$NoPosyandu = $_POST['NoPosyandu'];
			$NamaPosyandu = $_POST['NamaPosyandu'];
			$NamaPengelola = $_POST['NamaPengelola'];
			$JenisPosyandu = $_POST['JenisPosyandu'];
			$JmlKader = $_POST['JmlKader'];
			$NoRT = $_POST['NoRT'];

			$update = $this->model->updatePosyandu($NoPosyandu,$NamaPosyandu,$NamaPengelola,$JenisPosyandu,$JmlKader,$NoRT);
			header("location: index.php?page=pPosyandu");
		}

		function deletePosyandu($id) {
			$delete = $this->model->deletePosyandu($id);
			header("location: index.php?page=pPosyandu");
		}

		function findPosyandu() {
			$a = $_POST['Posyandu'];
			$data = $this->model->findPosyandu($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataPosyandu.php"; //memamnggil view.php pada folder view
		}

// =================Keluarga2=================
		function findKeluarga2() {
			$a = $_POST['Keluarga2'];
			$data = $this->model->findKeluarga2($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataKeluarga2.php"; //memamnggil view.php pada folder view
		}

// =================Warga2=================
		function findWarga2() {
			$a = $_POST['Warga2'];
			$data = $this->model->findWarga2($a); //pada class ini (controller), akses class model, akses fungsi find (kalo bingung lihat di class model ada fungsi find)
			include "view/dataWarga2.php"; //memamnggil view.php pada folder view
		}

		function showWarga2($id) {
			$data = $this->model->showWarga2($id);
			$row = $this->model->fetch($data);
			include "view/showWarga2.php";
		}


		function __destruct(){
			
		}


}
 ?>