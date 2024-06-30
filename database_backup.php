<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Backup Database</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include 'backup_function.php'; // Sesuaikan dengan nama file dan path yang benar

	if (isset($_POST['backupnow'])) {
		$server = isset($_POST['server']) ? $_POST['server'] : '';
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$dbname = isset($_POST['dbname']) ? $_POST['dbname'] : '';
		$backup_type = isset($_POST['backup_type']) ? $_POST['backup_type'] : '';
		$lastBackupTime = isset($_POST['lastbackuptime']) ? $_POST['lastbackuptime'] : '';


		if ($server !== 'localhost' || $username !== 'root') {
			echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Data tidak sesuai, periksa kembali field anda.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.history.back(); // Kembali ke halaman sebelumnya
                });
              </script>";
			exit();
		}



		// Cek koneksi ke database
		$db = new mysqli($server, $username, $password, $dbname);
		if ($db->connect_errno) {
			echo "<script>
                    Swal.fire({
                        title: 'Error',
                        text: 'Failed to connect to database: " . $db->connect_error . "',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.history.back(); // Kembali ke halaman sebelumnya
                    });
                  </script>";
			exit();
		}

		logError("Initiate backup: Host=$server, User=$username, Database=$dbname, Type=$backup_type");

		// Lakukan backup sesuai dengan jenis yang dipilih
		if ($backup_type == 'full') {
			backDb($server, $username, $password, $dbname);
		} elseif ($backup_type == 'diff') {
			backupDiffDb($server, $username, $password, $dbname, $lastBackupTime);
		} elseif ($backup_type == 'transaction_log') {
			backupTransactionLog($server, $username, $password, $dbname);
		} elseif ($backup_type == 'log_shipping') {
			$secondaryHost = $server;
			$secondaryUser = $username;
			$secondaryPass = $password;
			$secondaryDb = 'backuplog';
			logShipping($server, $username, $password, $dbname, $secondaryHost, $secondaryUser, $secondaryPass, $secondaryDb);
		} elseif ($backup_type == 'automated') {
			automatedBackup($server, $username, $password, $dbname);
		}

		// Menampilkan SweetAlert setelah backup berhasil dilakukan
		echo "<script>
                Swal.fire({
                    title: 'Success',
                    text: 'Backup initiated successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'index.php'; // Ganti dengan halaman tujuan setelah backup berhasil
                });
              </script>";

		$db->close(); // Tutup koneksi database
		exit();
	} else {
		echo 'Add All Required Fields'; // Pesan ini akan ditampilkan jika form tidak lengkap
	}
	?>

</body>

</html>