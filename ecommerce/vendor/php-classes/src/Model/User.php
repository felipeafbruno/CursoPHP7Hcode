<?php

	namespace Hcode\Model;

	use \Hcode\DB\Sql;
	use \Hcode\Model;
	use \Hcode\Mailer;

	class User extends Model {

		const SESSION = "User";
		const SECRET = "HcodePhp7_Secret";
		const CIPHER = "AES-256-CBC";
		

		public static function login($login, $password) {

			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b ON a.idperson = b.idperson WHERE a.deslogin = :LOGIN", array(
				":LOGIN"=>$login
			));

			if(count($results) === 0) {

				throw new \Exception("Usuário inexistente ou senha inválida.");

			}

			$data = $results[0];


			if(password_verify($password, $data["despassword"]) === true) {

				$user = new User();	

				$user->setData($data);
				
				$data['desperson'] = utf8_encode($data['desperson']);

				$_SESSION[User::SESSION] = $user->getValues();

				return $user;

			} else {

				throw new \Exception("Usuário inexistente ou senha inválida.");

			}

		}

		public static function verifyLogin($inadmin = true) {

			if(
				!isset($_SESSION[User::SESSION])
				&&
				!$_SESSION[User::SESSION]
				&&
				!(int)$_SESSION[User::SESSION]["iduser"] > 0
				&&
				(bool)$_SESSION[User::SESSION]["inadmin"] !== $inadmin
			) {

				header("Location: /admin/login");
				exit;

			}

		}

		public static function logout() {

			$_SESSION[User::SESSION] = NULL;

		}

		public static function listAll() {

			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY b.desperson");

		}

		public function save() {
			
			$sql = new Sql();

			$results = $sql->select("CALL sp_users_save(:desperson, :deslogin, :despassword, :desemail, :nrphone, :inadmin)", array(
				":desperson"=>$this->getdesperson(),
				":deslogin"=>$this->getdeslogin(),
				":despassword"=>$this->getdespassword(),
				":desemail"=>$this->getdesemail(),
				":nrphone"=>$this->getnrphone(),
				":inadmin"=>$this->getinadmin()
			));

			$this->setData($results[0]);

		}

		public function get($iduser) {

			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) where a.iduser = :iduser", array(
				":iduser"=>$iduser
			));

			$this->setData($results[0]);

		}

		public function update() {

			$sql = new Sql();

			$results = $sql->select("CALL sp_usersupdate_save(:iduser, :desperson, :deslogin, :despassword, :desemail, :nrphone, :inadmin)", array(
				":iduser"=>$this->getiduser(),
				":desperson"=>$this->getdesperson(),
				":deslogin"=>$this->getdeslogin(),
				":despassword"=>$this->getdespassword(),
				":desemail"=>$this->getdesemail(),
				":nrphone"=>$this->getnrphone(),
				":inadmin"=>$this->getinadmin()
			));

			$this->setData($results[0]);

		}

		public function delete() {

			$sql = new Sql();

			$sql->select("CALL sp_users_delete(:iduser)", array(
				":iduser"=>$this->getiduser()
			));

		}

		public static function getForgot($email, $inadmin = true) {

			$sql = new Sql();

			$results = $sql->select("
				SELECT * FROM tb_persons a 
				INNER JOIN tb_users b USING(idperson) 
				WHERE a.desemail = :email",
				array(
					":email"=>$email
				));

			if(count($results) === 0){

				echo "Algo de errado ocorreu";

			} else {

				
				if(count($results) === 0) {

					throw new \Exeception("Não foi possível recuperar a senha.");

				} else {


				$data = $results[0];

				$resultsRecovery = $sql->select("CALL sp_userspasswordsrecoveries_create(:iduser, :desip)", array(
					":iduser"=>$data["iduser"],
					":desip"=>$_SERVER["REMOTE_ADDR"]
				));

					if(count($resultsRecovery) === 0) {

						throw new \Exception("Não foi possível recuperar a senha.");

					} else {

						$dataRecovery = $resultsRecovery[0];

						$key = hex2bin('5ae1b8a17bad4da4fdac796f64c16ecd');
						$iv = hex2bin('34857d973953e44afb49ea9d61104d8c');

						$code = base64_encode(openssl_encrypt($dataRecovery["idrecovery"], User::CIPHER, $key, OPENSSL_RAW_DATA, $iv));

						$link = "http://www.hcodecommerce.com.br:8080/admin/forgot/reset?code=$code";

						$mailer = new Mailer($data["desemail"], $data["desperson"], "Redefiner Senha da Hcode Store", "forgot", array(
							"name"=>$data["desperson"],
							"link"=>$link
						));


						$mailer->send();

						return $data;

					}

				}

			}
 
		}

		public static function validForgotDecrypt($code) {

			$key = hex2bin('5ae1b8a17bad4da4fdac796f64c16ecd');
			$iv = hex2bin('34857d973953e44afb49ea9d61104d8c');

			$idrecovery = openssl_decrypt(base64_decode($code), User::CIPHER, $key, OPENSSL_RAW_DATA, $iv);

			$sql = new Sql();
			$results = $sql->select("
				SELECT * FROM tb_userspasswordsrecoveries a
				INNER JOIN tb_users b USING(iduser)
				INNER JOIN tb_persons c USING(idperson)
				WHERE
					a.idrecovery = 119
					AND 
					a.dtrecovery IS NULL
					AND
					DATE_ADD(a.dtregister, INTERVAL 1 HOUR) >= NOW();
				", array(
					":idrecovery"=>$idrecovery
				));

			if(count($results) === 0) {

				throw new \Exception("Não foi possível recuperar a senha.");

			} else {

				return $results[0];

			}

		}

	}

?>