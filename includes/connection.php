<?php
	class ConnectionDataBase {
		private const HOST = 'localhost';
		private const USER = 'root';
		private const PASSWORD = 'DedSec44678@';
		private const DATABASE = 'bookstoredatabase';

		public function connection_database() {
			
			$mysqli = new mysqli(HOST, );
			return $mysqli;
		}
	}
?>