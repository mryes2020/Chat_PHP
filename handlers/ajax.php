<?php

include("../config.php");


if( isset($_REQUEST['action']) ){


	switch( $_REQUEST['action'] ){
		
		//sent messages to chats
		
		case "SendMessagegeneral":
			//level 1 of xss protection 
			$messageboi = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_REQUEST[ 'message' ] );
			//level 2 of xss protection 
			$xss2protection = htmlspecialchars($messageboi, ENT_QUOTES, "UTF-8");
			session_start();




			//user login xss protection 
			$protection1xss = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_SESSION['user']);
			$protection2xss = htmlspecialchars($protection1xss, ENT_QUOTES, "UTF-8");
			$query = $db->prepare("INSERT INTO chat SET Name=?, Text=?");

			$query->execute([$protection2xss, $xss2protection]);

			echo 1;

		break;
		case "SendMessageprogramming":
			//level 1 of xss protection 
			$messageboi = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_REQUEST[ 'message' ] );
			//level 2 of xss protection 
			$xss2protection = htmlspecialchars($messageboi, ENT_QUOTES, "UTF-8");
			session_start();




			//user login xss protection 
			$protection1xss = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_SESSION['user']);
			$protection2xss = htmlspecialchars($protection1xss, ENT_QUOTES, "UTF-8");
			$query = $db->prepare("INSERT INTO chatpro SET Name=?, Text=?");

			$query->execute([$protection2xss, $xss2protection]);

			echo 1;

		break;
		case "SendMessagehacking":
			//level 1 of xss protection 
			$messageboi = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_REQUEST[ 'message' ] );
			//level 2 of xss protection 
			$xss2protection = htmlspecialchars($messageboi, ENT_QUOTES, "UTF-8");
			session_start();




			//user login xss protection 
			$protection1xss = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_SESSION['user']);
			$protection2xss = htmlspecialchars($protection1xss, ENT_QUOTES, "UTF-8");
			$query = $db->prepare("INSERT INTO chathack SET Name=?, Text=?");

			$query->execute([$protection2xss, $xss2protection]);

			echo 1;

		break;
		case "SendMessagenetworking":
			//level 1 of xss protection 
			$messageboi = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_REQUEST[ 'message' ] );
			//level 2 of xss protection 
			$xss2protection = htmlspecialchars($messageboi, ENT_QUOTES, "UTF-8");
			session_start();




			//user login xss protection 
			$protection1xss = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_SESSION['user']);
			$protection2xss = htmlspecialchars($protection1xss, ENT_QUOTES, "UTF-8");
			$query = $db->prepare("INSERT INTO chatnetw SET Name=?, Text=?");

			$query->execute([$protection2xss, $xss2protection]);

			echo 1;

		break;
		case "SendMessagetehcsupp":
			//level 1 of xss protection 
			$messageboi = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_REQUEST[ 'message' ] );
			//level 2 of xss protection
			$xss2protection = htmlspecialchars($messageboi, ENT_QUOTES, "UTF-8");
			session_start();




			//user login xss protection 
			$protection1xss = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_SESSION['user']);
			$protection2xss = htmlspecialchars($protection1xss, ENT_QUOTES, "UTF-8");
			$query = $db->prepare("INSERT INTO chattehc SET Name=?, Text=?");

			$query->execute([$protection2xss, $xss2protection]);

			echo 1;

		break;
		case "SendMessagetalktoadmins":
			//level 1 of xss protection 
			$messageboi = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_REQUEST[ 'message' ] );
			//level 2 of xss protection 
			$xss2protection = htmlspecialchars($messageboi, ENT_QUOTES, "UTF-8");
			session_start();




			//user login xss protection 
			$protection1xss = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_SESSION['user']);
			$protection2xss = htmlspecialchars($protection1xss, ENT_QUOTES, "UTF-8");
			$query = $db->prepare("INSERT INTO chattalkadmins SET Name=?, Text=?");

			$query->execute([$protection2xss, $xss2protection]);

			echo 1;

		break;




















		//get the chats 

		case "getChat":


			$query = $db->prepare("SELECT * from chat");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){
				$nameProtection1 = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $r->Name);
				$nameProtection2 = htmlspecialchars($nameProtection1, ENT_QUOTES, "UTF-8");

				
				$textProtection1 = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $r->Text);
				$textProtection2 = htmlspecialchars($textProtection1, ENT_QUOTES, "UTF-8");
				if ($nameProtection2 == "mr.hakarman" || $nameProtection2 == "mR.hakarman" || $nameProtection2 == "Mr.hakarman" || $nameProtection2 == "MR.hakarman") {
					$chat .=  "<div class='siglemessage'><strong title='Jes this is the admin' style='color: lightblue; text-shadow: 0px 0px 10px white;'>".$nameProtection2 . "</strong> says: ".$textProtection2."</div>";	
				}else {
						$chat .=  "<div class='siglemessage'><strong style='color: #ff6666'>".$nameProtection2 . "</strong> says: ".$textProtection2."</div>";	
					
				}

			}

			echo $chat;


		break;

		case "getChatpro":


			$query = $db->prepare("SELECT * from chatpro");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){

				if ($r->Name == "mr.hakarman" || $r->Name == "mR.hakarman" || $r->Name == "Mr.hakarman" || $r->Name == "MR.hakarman") {
					$chat .=  "<div class='siglemessage'><strong title='Jes this is the admin' style='color: lightblue; text-shadow: 0px 0px 10px white;'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
				}else {
				
						$chat .=  "<div class='siglemessage'><strong style='color: #ff6666'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
					
				}
			}

			echo $chat;


		break;
		
		
		case "getChathac":


			$query = $db->prepare("SELECT * from chathack");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){

				if ($r->Name == "mr.hakarman" || $r->Name == "mR.hakarman" || $r->Name == "Mr.hakarman" || $r->Name == "MR.hakarman") {
					$chat .=  "<div class='siglemessage'><strong title='Jes this is the admin' style='color: lightblue; text-shadow: 0px 0px 10px white;'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
				}else {
						$chat .=  "<div class='siglemessage'><strong style='color: #ff6666'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
					
				}
			}

			echo $chat;


		break;
		
		case "getChatnet":


			$query = $db->prepare("SELECT * from chatnetw");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){

				if ($r->Name == "mr.hakarman" || $r->Name == "mR.hakarman" || $r->Name == "Mr.hakarman" || $r->Name == "MR.hakarman") {
					$chat .=  "<div class='siglemessage'><strong title='Jes this is the admin' style='color: lightblue; text-shadow: 0px 0px 10px white;'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
				}else {
				
						$chat .=  "<div class='siglemessage'><strong style='color: #ff6666'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
					
				}
			}

			echo $chat;


		break;
		
		case "getChattehcs":


			$query = $db->prepare("SELECT * from chattehc");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){
				if ($r->Name == "mr.hakarman" || $r->Name == "mR.hakarman" || $r->Name == "Mr.hakarman" || $r->Name == "MR.hakarman") {
					$chat .=  "<div class='siglemessage'><strong title='Jes this is the admin' style='color: lightblue; text-shadow: 0px 0px 10px white;'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
				}else {
						$chat .=  "<div class='siglemessage'><strong style='color: #ff6666'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
					}
				
				}

			echo $chat;


		break;
		
		case "getChattalktoadmins":


			$query = $db->prepare("SELECT * from chattalkadmins");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){

				if ($r->Name == "mr.hakarman" || $r->Name == "mR.hakarman" || $r->Name == "Mr.hakarman" || $r->Name == "MR.hakarman") {
					$chat .=  "<div class='siglemessage'><strong title='Jes this is the admin' style='color: lightblue; text-shadow: 0px 0px 10px white;'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
				}else {
						$chat .=  "<div class='siglemessage'><strong style='color: #ff6666'>".$r->Name . "</strong> says: ".$r->Text."</div>";	
					
				}
			}

			echo $chat;


		break;

	}


}


?>