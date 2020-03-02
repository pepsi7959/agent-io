<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
	<?php echo uniqid(); ?>
	</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159438406-1"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-159438406-1');
	</script>

</head>

<body style="background-color: #011627; text-align: center; color: white;">
	<br><br>
	<span id="time_counter" style="display: none;">120</span>
	<a style="font-size: 50px; font-weight: bold; color: #FF9F1C;" id="next_btn" href="#">สมัครกดที่นี่</a>
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
            redirect_path = '\x2f\x72\x65\x67\x69\x73\x74\x65\x72\x2f\x61\x66\x2f\x35\x38\x30\x2f' + $.afref();
            var _0x0x0x0 = ["\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C", "", "\x68\x72\x65\x66","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x6C\x6F\x74\x74\x6F\x76\x69\x70\x2E\x62\x65\x73\x74","\x61\x74\x74\x72", "\x63\x6C\x69\x63\x6B", "\x23\x6E\x65\x78\x74\x5F\x62\x74\x6E", "\x72\x65\x61\x64\x79"];
            
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
