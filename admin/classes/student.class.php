<?php

// Class student

class Student{
	
	
	// Properties
	private $list_ui;				// Ä‘á»‘i tÆ°á»£ng xtemplate
	private $add_ui;
	private $edit_ui;
	
	private $connect_student;		// Ä‘á»‘i tÆ°á»£ng mysqli
	private $student_name;
	private $student_age;
	private $student_info;
	private $delete_id;				// id cáº§n nhá»› Ä‘á»ƒ xĂ³a
	private $edit_id;				// id cáº§n nhá»› Ä‘á»ƒ sá»­a
	
	// Auto
	function __construct(){
	}
	
	// Connect to Data
	function connectData($user,$pass,$server,$database){
		
		// Create connection
		$this->connect_student = new mysqli($server, $user, $pass, $database);
		
		// Check connection
		if ($this->connect_student->connect_error) {
			die("Káº¿t ná»‘i tháº¥t báº¡i: " . $this->connect_student->connect_error);
		}else{
			echo 'Ä�Ă£ káº¿t ná»‘i thĂ nh cĂ´ng';
		}
	}
	
	// Ä�Ă³ng CSDL
	function closeData(){
		$this->connect_student->close();
		echo 'Ä�Ă£ Ä‘Ă³ng thĂ nh cĂ´ng';
	}
	
	// Get id form URL
	function getDeleteID(){
		if (isset($_GET['id'])){
			$this->delete_id = $_GET['id'];
		}
	}
	
	// Get id form URL
	function getEditID(){
		if (isset($_GET['id'])){
			$this->edit_id = $_GET['id'];
		}
	}
	
	// Delete student with id from detele_id
	function delFromDB(){
		
		// sql to delete a record
		$sql = sprintf("DELETE FROM `webk16w71`.`student` WHERE `student`.`id` = %d",$this->delete_id);
		
		if ($this->connect_student->query($sql) === TRUE) {
			echo 'Báº¡n Ä‘Ă£ xĂ³a sinh viĂªn cĂ³ ID = ' . $this->delete_id;
		} else {
			echo "KhĂ´ng thá»ƒ xĂ³a Ä‘Æ°á»£c: " . $conn->error;
		}
	}
	
	// Get infor form AddForm
	function getInputForm(){
		
		// Kiá»ƒm tra xem Ä‘Ă£ nháº¥n nĂºt Add chÆ°a
		if (isset($_POST['add'])){
			
			//echo 'Ä�Ă£ nháº­n thĂªm má»›i!<br>';
			$this->student_name = $_POST['sname'];
			$this->student_age = $_POST['sage'];
			$this->student_info = $_POST['sinfo'];
			
		}else{
			//echo 'ChÆ°a cĂ³ thĂ´ng gá»­i tá»›i!';
		}
	}
	
	// Get infor form AddForm
	function getEditForm(){
	
		// Kiá»ƒm tra xem Ä‘Ă£ nháº¥n nĂºt Add chÆ°a
		if (isset($_GET['edit'])){
				
			//echo 'Ä�Ă£ nháº­n thĂªm má»›i!<br>';
			$this->student_name = $_GET['sname'];
			$this->student_age = $_GET['sage'];
			$this->student_info = $_GET['sinfo'];
				
		}else{
			//echo 'ChÆ°a cĂ³ thĂ´ng gá»­i tá»›i!';
		}
	}
	
	// Save values form into Database
	function saveToDB(){
		
		// Kiá»ƒm tra xem Ä‘Ă£ nháº¥n nĂºt Add chÆ°a
		if (isset($_POST['add'])){
		
			$sql = sprintf("INSERT INTO `webk16w71`.`student` (`id`, `name`, `age`, `infor`)
				  VALUES (NULL, '%s', '%d', '%s')",
					$this->student_name,
					$this->student_age,
					$this->student_info
					);
			
			if ($this->connect_student->query($sql) === TRUE) {
				echo "Ä�Ă£ thĂªm xong!";
			} else {
				echo "CĂ³ lá»—i: " . $sql . "<br>" . $this->connect_student->error;
			}
		
		}
		
		//$this->connect_student->close();
		
	}
	
	// Save values form into Database
	function updateToDB(){
	
		
		// Kiá»ƒm tra xem Ä‘Ă£ nháº¥n nĂºt Add chÆ°a
		if (isset($_GET['edit'])){
			
			$sql = sprintf("UPDATE `webk16w71`.`student` 
					SET `name` = '%s', `age` = '%d', `infor` = '%s' 
					WHERE `student`.`id` = %d",
					$this->student_name,
					$this->student_age,
					$this->student_info,
					$_GET['edit']
					);
				
			if ($this->connect_student->query($sql) === TRUE) {
				echo "Ä�Ă£ thĂªm xong!";
			} else {
				echo "CĂ³ lá»—i: " . $sql . "<br>" . $this->connect_student->error;
			}
	
		}
	
		//$this->connect_student->close();
	
	}
	
	
	// Show List
	function showList(){
		$this->list_ui = new XTemplate('list.ui.php','themes');
		
		// láº¥y thĂ´ng tin tá»« database
		$sql = "SELECT * FROM `student`";
		$result = $this->connect_student->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$this->list_ui->assign('ID',$row["id"]);
				$this->list_ui->assign('NAME',$row["name"]);
				$this->list_ui->assign('AGE',$row["age"]);
				$this->list_ui->assign('INFO',$row["infor"]);
				$this->list_ui->parse('main.item');
			}
		} else {
			echo "0 results";
		}
		
		$this->list_ui->parse('main');
		echo $this->list_ui->text('main');
	}
	
	// Show Add
	function showAdd(){
		$this->add_ui = new XTemplate('add.ui.php','themes');
		$this->add_ui->parse('main');
		echo $this->add_ui->text('main');
	}
	
	// Show Edit
	function showEdit(){
		$this->edit_ui = new XTemplate('edit.ui.php','themes');
		
		// Hiá»ƒn thá»‹ thĂ´ng tin
		$this->getEditID();
		$this->edit_ui->assign('ID',$this->edit_id);
		
		// Láº¥y thĂ´ng tin tá»« CSDL vá»›i ID Ä‘Ă£ cĂ³
		$sql = sprintf("SELECT * FROM `student` WHERE `student`.`id` = %d",$this->edit_id);
		$result = $this->connect_student->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$this->edit_ui->assign('NAME',$row["name"]);
				$this->edit_ui->assign('AGE',$row["age"]);
				$this->edit_ui->assign('INFORMATION',$row["infor"]);
			}
		} else {
			echo "0 results";
		}
		
		
		$this->edit_ui->parse('main');		
		echo $this->edit_ui->text('main');
	}
	
	// Try
	function tryInsert(){
		$servername = "localhost";
		$username = "root";
		$password = "mysql";
		$dbname = "webk16w71";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "INSERT INTO `webk16w71`.`student` (`id`, `name`, `age`, `infor`)
			  VALUES (NULL, 'them truc tiep', '45', 'day la noi dung them tu dong')";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}
	
	
	
	
}