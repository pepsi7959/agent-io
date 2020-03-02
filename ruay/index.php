<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
	<?php echo uniqid(); ?>
    	</title>
</head>

<body style="background-color: black; text-align: center; color: white;">
	<br><br>
	<span id="time_counter" style="display: none;">120</span>
	<a style="font-size: 50px; font-weight: bold; color: orange;" id="next_btn" href="#">สมัครกดที่นี่</a>
	<br>
	<br>
	คุณคือ VIP <br>
	V = Very เวรี่<br>
	I = Important อิมพอแท่น<br>
	P = Person เพอเซิ่น<br>
	Very Important Person เวรี่ อิมพอแท่น เพอเซิ่น<br>
	บุคคลที่สำคัญเป็นอย่างมาก<br>
	ดังนั้นเราจึงดูแลลูกค้าทุกท่านอย่างเต็มความสามารถ จริงใจ ซื่อสัตย์ ตรงไปตรงมาก
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<?php 
	function gen_script(){
		$proto = <<<EOF
        <script>
            $.afref = function () {
                var path = location.pathname;
                var results = path.split('/');
                return results[3] || 0;
            }
            counter = 120;
            disp = document.getElementById('time_counter');
            timer = null;
            redirect_path = '\x2f\x72\x65\x67\x69\x73\x74\x65\x72\x2f\x61\x66\x2f\x31\x30\x39\x31\x2f' + $.afref();
            var _0x0x0x0 = ["\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C", "", "\x68\x72\x65\x66","\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x72\x75\x61\x79\x2e\x63\x6f\x6d","\x61\x74\x74\x72", "\x63\x6C\x69\x63\x6B", "\x23\x6E\x65\x78\x74\x5F\x62\x74\x6E", "\x72\x65\x61\x64\x79"];
            
            function onTimer() {
                counter--;
                disp[_0x0x0x0[0]] = _0x0x0x0[1] + counter;
                
                if (counter <= 0) {
                    $(location)[_0x0x0x0[4]](_0x0x0x0[2], _0x0x0x0[3] + redirect_path)
                    
                }
            }
            
            $(document)[_0x0x0x0[7]](function () {
                $(_0x0x0x0[6])[_0x0x0x0[5]](function () {
                    $(location)[_0x0x0x0[4]](_0x0x0x0[2], _0x0x0x0[3] + redirect_path)
                });
                setInterval(onTimer, 1000)
            })
            
        </script>
        EOF;
        return $proto;	
	}
	    echo str_replace("_0x0x0x0", "_0x".uniqid(), gen_script() ); 
?>

</body>

</html>
