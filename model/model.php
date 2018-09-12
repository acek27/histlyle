<?php 
	class model {
		protected $connect;

		function __construct(){
			$this->connect = mysqli_connect("localhost", "root", "", "histyle");
		}

		function execute($query) {
			return mysqli_query($this->connect, $query);
		}

		function fetch($var){
			return mysqli_fetch_array($var);
		}

		function num_rows($var) {
			return mysqli_num_rows($var);
		}

		

// ===================Page Login===================
		function cekLogin($NamaPengguna, $Sandi) {
			$query = "select* from pengguna u join level l on u.ID_Level=l.ID_Level where NamaPengguna='$NamaPengguna' AND Sandi='$Sandi'";
			return $this->execute($query);
		}
// ==================Page Kelurahan==================
		function viewKelurahan() {
			$query = "select* from kelurahan order by NoDesa";
			return $this->execute($query);
		}

// ================Page RW===============
		function viewRW() {
			$query = "select r.NoRW, r.NamaRW, k.NamaDesa from rw r join kelurahan k on r.NoDesa=k.NoDesa order by r.NoRW ASC";
			return $this->execute($query);
		}

		function insertDaftar($Firstname, $Lastname, $Email, $Password, $Confirm, $Gender, $Birthday, $Handphone, $Address, $Province, $City, $District, $Postal, $Account, $Bank){
			$query = "INSERT INTO signup VALUES ('', '$Firstname', '$Lastname', '$Email', '$Password', '$Confirm', '$Gender', '$Birthday', '$Handphone', '$Address', '$Province', '$City', '$District', '$Postal', '$Account', '$Bank')";
			return $this->execute($query);
		}

		function editRW($id) {
			$query = "select * from rw where NoRW='$id'";
			return $this->execute($query);
		}

		function updateRW($NoRW,$NamaRW,$NoDesa) {
			$query = "update rw set NamaRW='$NamaRW', NoDesa='$NoDesa' where NoRW='$NoRW'";
			return $this->execute($query);
		}

		function deleteRW($id) {
			$query = "DELETE from rw where NoRW='$id'";
			return $this->execute($query);
		}

		function findRW($a) {
			$query = "select r.NoRW, r.NamaRW, k.NamaDesa from rw r join kelurahan k on r.NoDesa=k.NoDesa where (NamaRW LIKE '%$a%' or NamaDesa LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page RT===============
		function viewRT() {
			$query = "select t.NoRT, t.NamaRT, w.NamaRW, k.NamaDesa from rt t join rw w on t.NoRW=w.NoRW join kelurahan k on w.NoDesa=k.NoDesa order by t.NoRT ASC";
			return $this->execute($query);
		}

		function insertRT($NamaRT,$NoRW,$NoDesa){
			$query = "INSERT INTO rt values ('','$NamaRT','$NoRW')";
			return $this->execute($query);
		}

		function editRT($id) {
			$query = "select * from rt where NoRT='$id'";
			return $this->execute($query);
		}

		function updateRT($NoRT,$NamaRT,$NoRW) {
			$query = "update rt set NamaRT='$NamaRT', NoRW='$NoRW' where NoRT='$NoRT'";
			return $this->execute($query);
		}

		function deleteRT($id) {
			$query = "DELETE from rt where NoRT='$id'";
			return $this->execute($query);
		}

		function findRT($a) {
			$query = "select t.NoRT, t.NamaRT, w.NamaRW, k.NamaDesa from rt t join rw w on t.NoRW=w.NoRW join kelurahan k on w.NoDesa=k.NoDesa where (NamaRT LIKE '%$a%' or NamaRW LIKE '%$a%' or NamaDesa LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Dasawisma===============
		function viewDasawisma() {
			$query = "select d.NoKelDawis, d.KelDawis, t.NamaRT, w.NamaRW, k.NamaDesa from dasawisma d join rt t on d.NoRT=t.NoRT join rw w on t.NoRW=w.NoRW join kelurahan k on w.NoDesa=k.NoDesa order by d.NoKelDawis ASC";
			return $this->execute($query);
		}

		function insertDasawisma($KelDawis,$NoRT){
			$query = "INSERT INTO dasawisma values ('','$KelDawis','$NoRT')";
			return $this->execute($query);
		}

		function editDasawisma($id) {
			$query = "select * from dasawisma where NoKelDawis='$id'";
			return $this->execute($query);
		}

		function updateDasawisma($NoKelDawis,$KelDawis,$NoRT) {
			$query = "update dasawisma set KelDawis='$KelDawis', NoRT='$NoRT' where NoKelDawis='$NoKelDawis'";
			return $this->execute($query);
		}

		function deleteDasawisma($id) {
			$query = "DELETE from dasawisma where NoKelDawis='$id'";
			return $this->execute($query);
		}

		function findDasawisma($a) {
			$query = "select d.NoKelDawis, d.KelDawis, t.NamaRT, w.NamaRW, k.NamaDesa from dasawisma d join rt t on d.NoRT=t.NoRT join rw w on t.NoRW=w.NoRW join kelurahan k on w.NoDesa=k.NoDesa where (KelDawis LIKE '%$a%' or NamaRT LIKE '%$a%' or NamaRW LIKE '%$a%' or NamaDesa LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Keluarga===============
		function viewKeluarga() {
			$query = "select NoKK, JmlAnggota, JmlLaki,JmlWanita, JmlBalita, JmlLansia, JmlBumil, JmlPUS, JmlWUS from keluarga order by NoKK ASC";
			return $this->execute($query);
		}

		function insertKeluarga($NoKK,$JmlAnggota,$JmlLaki,$JmlWanita,$JmlBalita,$JmlLansia,$JmlBumil,$JmlPUS,$JmlWUS){
			$query = "INSERT INTO keluarga values ('','$NoKK','$JmlAnggota','$JmlLaki','$JmlWanita','$JmlBalita','$JmlLansia','$JmlBumil','$JmlPUS','$JmlWUS')";
			return $this->execute($query);
		}

		function editKeluarga($id) {
			$query = "select NoKK, JmlAnggota, JmlLaki, JmlWanita, JmlBalita, JmlLansia, JmlBumil, JmlPUS, JmlWUS from keluarga where NoKK='$id'";
			return $this->execute($query);
		}

		function updateKeluarga($NoKK,$JmlAnggota,$JmlLaki,$JmlWanita,$JmlBalita,$JmlLansia,$JmlBumil,$JmlPUS,$JmlWUS) {
			$query = "update keluarga set JmlAnggota='$JmlAnggota', JmlLaki='$JmlLaki', JmlWanita='$JmlWanita', JmlBalita='$JmlBalita', JmlLansia='$JmlLansia',JmlBumil='$JmlBumil', JmlPUS='$JmlPUS', JmlWUS='$JmlWUS' where NoKK='$NoKK'";
			return $this->execute($query);
		}

		function deleteKeluarga($id) {
			$query = "DELETE from keluarga where NoKK='$id'";
			return $this->execute($query);
		}

		function findKeluarga($a) {
			$query = "select NoKK, JmlAnggota, JmlLaki, JmlWanita, JmlBalita, JmlLansia, JmlBumil, JmlPUS, JmlWUS from keluarga where (NoKK LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Warga===============
		function viewWarga() {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga order by w.NIK ASC";
			return $this->execute($query);
		}

		function insertWarga($NoKeluarga,$StatusKeluarga,$NIK,$Nama,$JenisKelamin,$KotaLahir,$TglLahir,$Agama,$Status,$Alamat,$Pendidikan,$Pekerjaan){
			$query = "INSERT INTO warga values ('','$NoKeluarga','$StatusKeluarga','$NIK','$Nama','$JenisKelamin','$KotaLahir','$TglLahir','$Agama','$Status','$Alamat','$Pendidikan', '$Pekerjaan')";
			return $this->execute($query);
		}

		function editWarga($id) {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama, w.JenisKelamin, w.KotaLahir, w.TglLahir, w.Agama, w.Status, w.Alamat, w.Pendidikan, w.Pekerjaan from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga where NIK='$id'";
			return $this->execute($query);
		}

		function updateWarga($NoKeluarga,$StatusKeluarga,$NIK,$Nama,$JenisKelamin,$KotaLahir,$TglLahir,$Agama,$Status,$Alamat,$Pendidikan,$Pekerjaan) {
			$query = "update warga set StatusKeluarga='$StatusKeluarga', Nama='$Nama', JenisKelamin='$JenisKelamin', KotaLahir='$KotaLahir', TglLahir='$TglLahir', Agama='$Agama', Status='$Status', Alamat='$Alamat', Pendidikan='$Pendidikan', Pekerjaan='$Pekerjaan' where NIK='$NIK' ";
			return $this->execute($query);
		}

		function deleteWarga($id) {
			$query = "DELETE from warga where NIK='$id'";
			return $this->execute($query);
		}

		function findWarga($a) {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga where (NoKK LIKE '%$a%' or NIK LIKE '%$a%' or Nama LIKE '%$a%') ";
			return $this->execute($query);
		}

		function showWarga($id) {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama, w.JenisKelamin, w.KotaLahir, w.TglLahir, w.Agama, w.Status, w.Alamat, w.Pendidikan, w.Pekerjaan from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga where NIK='$id'";
			return $this->execute($query);
		}

// ================Page Kader===============
		function viewKader() {
			$query = "select a.NoKader, a.Nama, k.NamaDesa, r.NamaRW, t.NamaRT, a.Jabatan, a.TglMasuk, a.Status from kader a join pengguna p on a.NoPengguna=p.ID join rt t on a.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa order by a.NoKader ASC";
			return $this->execute($query);
		}

		function insertKader($NoPengguna,$Nama,$NoRT,$Jabatan,$TglMasuk,$Status){
			$query = "INSERT INTO kader values ('','$NoPengguna','$Nama','$NoRT','$Jabatan','$TglMasuk','$Status')";
			return $this->execute($query);
		}

		function editKader($id) {
			$query = "select a.NoKader, p.NamaPengguna, a.Nama, k.NamaDesa, r.NamaRW, a.NoRT, a.Jabatan, a.TglMasuk, a.Status from kader a join pengguna p on a.NoPengguna=p.ID join rt t on a.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa where NoKader='$id'";
			return $this->execute($query);
		}

		function updateKader($NoKader,$Nama,$NoRT,$Jabatan,$TglMasuk,$Status) {
			$query = "update kader set Nama='$Nama',NoRT='$NoRT',Jabatan='$Jabatan',TglMasuk='$TglMasuk',Status='$Status' where NoKader='$NoKader'";
			return $this->execute($query);
		}

		function deleteKader($id) {
			$query = "DELETE from kader where NoKader='$id'";
			return $this->execute($query);
		}

		function findKader($a) {
			$query = "select a.NoKader, a.Nama, k.NamaDesa, r.NamaRW, t.NamaRT, a.Jabatan, a.TglMasuk, a.Status from kader a join pengguna p on a.NoPengguna=p.ID join rt t on a.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa where (Jabatan LIKE '%$a%' or NamaDesa LIKE '%$a%' or NamaRW LIKE '%$a%' or NamaRT LIKE '%$a%' or Nama LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Pelatihan===============
		function viewPelatihan() {
			$query = "select p.NoPelatihan, k.Nama, p.NamaPelatihan, p.TempatPelatihan, p.TanggalPelatihan, p.Penyelenggara, p.Bersertifikat, p.Keikutsertaan from pelatihan p join kader k on p.NoKader=k.NoKader order by p.NoPelatihan ASC";
			return $this->execute($query);
		}

		function insertPelatihan($NoKader,$NamaPelatihan,$TempatPelatihan,$TanggalPelatihan,$Penyelenggara,$Bersertifikat){
			$query = "INSERT INTO pelatihan values ('','$NoKader','$NamaPelatihan','$TempatPelatihan','$TanggalPelatihan','$Penyelenggara','$Bersertifikat','Belum Disetujui')";
			return $this->execute($query);
		}

		function editPelatihan($id) {
			$query = "select p.NoPelatihan, k.Nama, p.NamaPelatihan, p.TempatPelatihan, p.TanggalPelatihan, p.Penyelenggara, p.Bersertifikat from pelatihan p join kader k on p.NoKader=k.NoKader where NoPelatihan='$id'";
			return $this->execute($query);
		}

		function updatePelatihan($NoPelatihan,$NamaPelatihan,$TempatPelatihan,$TanggalPelatihan,$Penyelenggara,$Bersertifikat) {
			$query = "update pelatihan set NamaPelatihan='$NamaPelatihan',TempatPelatihan='$TempatPelatihan',TanggalPelatihan='$TanggalPelatihan',Penyelenggara='$Penyelenggara',Bersertifikat='$Bersertifikat' where NoPelatihan='$NoPelatihan'";
			return $this->execute($query);
		}

		function deletePelatihan($id) {
			$query = "DELETE from pelatihan where NoPelatihan='$id'";
			return $this->execute($query);
		}

		function findPelatihan($a) {
			$query = "select p.NoPelatihan, k.Nama, p.NamaPelatihan, p.TempatPelatihan, p.TanggalPelatihan, p.Penyelenggara, p.Bersertifikat, p.Keikutsertaan from pelatihan p join kader k on p.NoKader=k.NoKader where (NamaPelatihan LIKE '%$a%' or Penyelenggara LIKE '%$a%' or Keikutsertaan LIKE '%$a%' or Bersertifikat LIKE '%$a%' or Nama LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Pelatihan===============
		function data_pelatihan($a) {
			$query = "select p.NoPelatihan, k.Nama, p.NamaPelatihan, p.TempatPelatihan, p.TanggalPelatihan, p.Penyelenggara, p.Bersertifikat, p.Keikutsertaan from pelatihan p join kader k on p.NoKader=k.NoKader join pengguna u on k.NoPengguna=u.ID where p.NoKader = k.NoKader and u.NamaPengguna = '$a'";
			return $this->execute($query);
		}

		function dataPelatihan($a) {
			$query = "select p.NoPelatihan, k.Nama, p.NamaPelatihan, p.TempatPelatihan, p.TanggalPelatihan, p.Penyelenggara, p.Bersertifikat, p.Keikutsertaan from pelatihan p join kader k on p.NoKader=k.NoKader where p.NoPelatihan = $a";
			return $this->execute($query);
		}

		function validPelatihan($id) {
			$query = "select p.NoPelatihan, k.Nama, p.NamaPelatihan, p.TempatPelatihan, p.TanggalPelatihan, p.Penyelenggara, p.Bersertifikat, p.Keikutsertaan from pelatihan p join kader k on p.NoKader=k.NoKader where NoPelatihan='$id'";
			return $this->execute($query);
		}

		function validPelatihan2($NoPelatihan,$Keikutsertaan) {
			$query = "update pelatihan set Keikutsertaan='$Keikutsertaan' where NoPelatihan='$NoPelatihan'";
			return $this->execute($query);
		}

// ================Page Warung===============
		function viewWarung() {
			$query = "select w.NoWarung, w.NamaWarung, w.NamaPengelola, w.Komoditi, k.NamaDesa, r.NamaRW, t.NamaRT from warung w join rt t on w.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa order by w.NoWarung ASC";
			return $this->execute($query);
		}

		function insertWarung($NamaWarung,$NamaPengelola,$Komoditi,$NoRT){
			$query = "INSERT INTO warung values ('','$NamaWarung','$NamaPengelola','$Komoditi','$NoRT')";
			return $this->execute($query);
		}

		function editWarung($id) {
			$query = "select * from warung where NoWarung='$id'";
			return $this->execute($query);
		}

		function updateWarung($NoWarung,$NamaWarung,$NamaPengelola,$Komoditi,$NoRT) {
			$query = "update warung set NamaWarung='$NamaWarung',NamaPengelola='$NamaPengelola',Komoditi='$Komoditi',NoRT='$NoRT' where NoWarung='$NoWarung'";
			return $this->execute($query);
		}

		function deleteWarung($id) {
			$query = "DELETE from warung where NoWarung='$id'";
			return $this->execute($query);
		}

		function findWarung($a) {
			$query = "select w.NoWarung, w.NamaWarung, w.NamaPengelola, w.Komoditi, k.NamaDesa, r.NamaRW, t.NamaRT from warung w join rt t on w.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa where (NamaPengelola LIKE '%$a%' or NamaWarung LIKE '%$a%' or NamaDesa LIKE '%$a%' or NamaRT LIKE '%$a%' or NamaRW LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Posyandu===============
		function viewPosyandu() {
			$query = "select p.NoPosyandu, p.NamaPosyandu, p.NamaPengelola, p.JenisPosyandu, p.JmlKader, k.NamaDesa, r.NamaRW, t.NamaRT from posyandu p join rt t on p.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa order by p.NoPosyandu ASC";
			return $this->execute($query);
		}

		function insertPosyandu($NamaPosyandu,$NamaPengelola,$JenisPosyandu,$JmlKader,$NoRT){
			$query = "INSERT INTO posyandu values ('','$NamaPosyandu','$NamaPengelola','$JenisPosyandu','$JmlKader','$NoRT')";
			return $this->execute($query);
		}

		function editPosyandu($id) {
			$query = "select * from posyandu where NoPosyandu='$id'";
			return $this->execute($query);
		}

		function updatePosyandu($NoPosyandu,$NamaPosyandu,$NamaPengelola,$JenisPosyandu,$JmlKader,$NoRT) {
			$query = "update posyandu set NamaPosyandu='$NamaPosyandu',NamaPengelola='$NamaPengelola',JenisPosyandu='$JenisPosyandu',JmlKader='$JmlKader',NoRT='$NoRT' where NoPosyandu='$NoPosyandu'";
			return $this->execute($query);
		}

		function deletePosyandu($id) {
			$query = "DELETE from posyandu where NoPosyandu='$id'";
			return $this->execute($query);
		}

		function findPosyandu($a) {
			$query = "select p.NoPosyandu, p.NamaPosyandu, p.NamaPengelola, p.JenisPosyandu, p.JmlKader, k.NamaDesa, r.NamaRW, t.NamaRT from posyandu p join rt t on p.NoRT=t.NoRT join rw r on t.NoRW=r.NoRW join kelurahan k on r.NoDesa=k.NoDesa where (NamaPengelola LIKE '%$a%' or NamaPosyandu LIKE '%$a%' or NamaDesa LIKE '%$a%' or NamaRT LIKE '%$a%' or NamaRW LIKE '%$a%' or JenisKelamin LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Keluarga2==============
		function viewKeluarga2() {
			$query = "select NoKK, JmlAnggota, JmlLaki,JmlWanita, JmlBalita, JmlLansia, JmlBumil, JmlPUS, JmlWUS from keluarga order by NoKK ASC";
			return $this->execute($query);
		}

		function findKeluarga2($a) {
			$query = "select NoKK, JmlAnggota, JmlLaki, JmlWanita, JmlBalita, JmlLansia, JmlBumil, JmlPUS, JmlWUS from keluarga where (NoKK LIKE '%$a%') ";
			return $this->execute($query);
		}

// ================Page Warga2==============
		function viewWarga2() {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga order by w.NIK ASC";
			return $this->execute($query);
		}

		function findWarga2($a) {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga where (NoKK LIKE '%$a%' or NIK LIKE '%$a%' or Nama LIKE '%$a%') ";
			return $this->execute($query);
		}

		function showWarga2($id) {
			$query = "select k.NoKK, w.StatusKeluarga, w.NIK, w.Nama, w.JenisKelamin, w.KotaLahir, w.TglLahir, w.Agama, w.Status, w.Alamat, w.Pendidikan, w.Pekerjaan from warga w join keluarga k on w.NoKeluarga=k.NoKeluarga where NIK='$id'";
			return $this->execute($query);
		}

	}

 ?>