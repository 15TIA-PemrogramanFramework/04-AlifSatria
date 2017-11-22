<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li><a href="'.site_url('home').'"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="'.site_url('member').'"><i class="glyphicon glyphicon-calendar"></i> Member</a></li>
                    <li><a href="'.site_url('admin').'"><i class="glyphicon glyphicon-stats"></i>Admin</a></li>
                    <li><a href="'.site_url('team').'"><i class="glyphicon glyphicon-list"></i> Team</a></li>
                    <li><a href="'.site_url('perbasi').'"><i class="glyphicon glyphicon-record"></i> Perbasi</a></li>
                    <li><a href="'.site_url('datascore').'"><i class="glyphicon glyphicon-pencil"></i> Data Score</a></li>';
	}

	function generate_sidemenu_member()
	{
		return '<li><a href="'.site_url('home').'"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="'.site_url('member').'"><i class="glyphicon glyphicon-calendar"></i> Member</a></li>';
	}

	function menu_utama(){
		return '
		<li><a href="'.site_url('home').'" class="scroll">Home</a></li>
							<li><a href="'.site_url('admin').'">Admin</a></li>
							<li><a href="'.site_url('score/scoring').'">Score</a></li>

							<li><a href="'.site_url('score').'">Pertandingan</a></li>
							<li><a href="'.site_url('login/logout').'">Logout</a></li>

		';
		
	}

function menu_utama_member(){
		return '
		<li><a href="'.site_url('home').'" class="scroll">Home</a></li>
							<li><a href="'.site_url('score').'">Pertandingan</a></li>
							<li><a href="'.site_url('member').'">Data Member</a></li>
							<li><a href="'.site_url('login/logout').'">Logout</a></li>
		';
		
	}
	function menu_member2(){
		return '<li><a href="'.site_url('home').'"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="'.site_url('member').'"><i class="glyphicon glyphicon-calendar"></i> Member</a></li>
		';
		
	}

	function menu_utama_non_member(){
		return '
		<li><a href="'.site_url('home').'" class="scroll">Home</a></li>
						
							<li><a href="'.site_url('score').'">Pertandingan</a></li>
							<li><a href="'.site_url('login').'">Login</a></li>
		';
		
	}