<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		echo "<h1> Perkenalan </h1>";
		echo "Nama 				: Thania Dwi Aprilia Nababan <br>
			  Tempat Lahir		: Pematangsiantar            <br>	
			  Tanggal Lahir		: 30 April 2001              <br>
			  Tempat Tinggal	: Kota Pematangsiantar, Sumatra Utara <br>
			  Motivasi Kuliah 	: Untuk menempuh jenjang pendidikan yang lebih tinggi,dan sebagai bekal di masa depan untuk megabdi di masyarakat, karena ilmu itu sangat penting </br>";
	}
}
