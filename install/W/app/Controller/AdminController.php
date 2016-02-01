<?php

	namespace Controller;

	use \W\Controller\Controller;

	class AdminController extends Controller
	{
		public function adm_home()
		{
			$this->show('admin/adm_home');
		}

		public function adm_users()
		{
			$this->show('admin/adm_users');
		}

		public function adm_data()
		{
			$this->show('admin/adm_data');
		}

		public function adm_content()
		{
			$this->show('admin/adm_content');
		}

		public function adm_sav()
		{
			$this->show('admin/adm_sav');
		}

		public function adm_forum()
		{
			$this->show('admin/adm_forum');
		}

		public function adm_reporting()
		{
			$this->show('admin/adm_reporting');
		}

		public function adm_data_import()
		{
			$this->show('admin/adm_data_import');
		}
	}

?>