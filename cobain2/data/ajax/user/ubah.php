<?php

	$input = json_decode(file_get_contents('php://input'));


	require_once '../../model/ClsConnection.php';
	require_once '../../model/ClsUser.php';
	require_once '../../user/User.php';

	try {

		$user  = new User() ;
		$oUser = new ClsUser() ;

		$user->setPassword($input->password);
		$user->setPasswordBr($input->passwordbaru);
		$user->setUsername($input->username);
		$data = $oUser->ubah_password($user);

		if ($data > 0) {
	        $res = array('msg' => 'Password berhasil diubah.', 'error' => false, 'data' => $data);
	        $jsn = json_encode($res);
	        print_r($jsn);
		}
		else {
		    $res = array('msg' => 'Password gagal diubah.', 'error' => true, 'data' => array());
		    $jsn = json_encode($res);
		    print_r($jsn);
		}
	}
	catch (Exception $e) {
	    $res = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
	    $jsn = json_encode($res);
	    print_r($jsn);
	}

