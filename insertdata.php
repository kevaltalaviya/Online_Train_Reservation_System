<?php
	try{
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=trainappdb','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
				
			$sql="insert into train_detail (train_name,no_of_seat) values ('gujarat queen','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('garib rath','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('shatabdi','100')";
			$query=$dbhandler->query($sql);			
			$sql="insert into train_detail (train_name,no_of_seat) values ('intercity','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('vande bharat','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('rajdhani','100')";
			$query=$dbhandler->query($sql);			
			$sql="insert into train_detail (train_name,no_of_seat) values ('puri','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('nagarcoil','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('karnavati','100')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_detail (train_name,no_of_seat) values ('rankpur','100')";
			$query=$dbhandler->query($sql);
                        
            $sql="insert into station_detail (station_name,city) values ('surat station','surat')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('vadodara station','vadodara')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('ahmedabad station','ahmedabad')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('nadiad station','nadiad')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('rajkot station','rajkot')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('valsad station','valsad')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('mumbai station','mumbai')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('pune station','pune')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('new delhi station','new delhi')";
			$query=$dbhandler->query($sql);
			$sql="insert into station_detail (station_name,city) values ('anand station','anand')";
			$query=$dbhandler->query($sql);
			
			//$sql="insert into train_distance_detail (train_no,arrival_station_id,departure_station_id,price,distance) values ('1','1','4','122','50')";
			//$query=$dbhandler->query($sql);
			
			
			$sql="insert into train_availability (train_no,seat_availability,date) values ('1','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('2','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('3','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('4','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('5','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('6','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('7','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('8','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('9','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_availability (train_no,seat_availability,date) values ('10','100','2019-04-09')";
			$query=$dbhandler->query($sql);
			
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('6','1','00:30','00:40')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','1','02:00','02:15')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','1','03:10','03:20')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('10','1','05:20','05:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('4','1','06:10','06:15')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','1','08:20','08:40')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('5','1','11:40','12:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('5','5','00:20','00:40')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','5','05:00','05:20')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','5','08:30','08:40')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','5','10:30','10:45')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('7','5','15:50','16:10')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('8','5','17:50','18:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','4','05:00','05:15')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','4','07:30','07:40')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','4','11:40','12:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('5','4','17:20','17:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('9','9','04:30','04:45')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('7','9','06:40','07:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','9','11:45','12:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','9','14:00','14:15')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','9','17:00','17:10')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('5','9','22:40','23:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('5','6','03:20','03:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','6','07:20','07:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('8','6','17:20','17:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('5','3','02:10','02:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','3','07:00','07:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('4','3','09:20','09:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('10','3','10:20','10:35')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','3','13:20','13:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','3','15:00','15:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('6','3','17:10','17:20')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('9','10','05:20','05:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','10','16:10','16:30')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','10','19:00','19:15')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','10','21:25','21:40')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('3','8','06:50','07:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('2','8','08:50','09:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('1','8','10:00','10:20')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('7','8','16:45','17:00')";
			$query=$dbhandler->query($sql);
			$sql="insert into train_time_detail (station_id,train_no,arrival_time,departure_time) values ('8','8','19:30','19:45')";
			$query=$dbhandler->query($sql);
		}
		catch(PDOException $e){
			echo 'SORRY!!!  Could not Connect Due to Some Database issue: '.$e->getMessage();
			die();
		
	}
?>
