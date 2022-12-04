<!DOCTYPE html>
<html>
    <style>
    .left_header 
    {
    color: #6504b5;
    font-size: large;
   /* float: left;*/
   display: inline;
    }
    /* styling search bar */
    .search input[type=text]{
    width:500px;
    height: 50px;
    border-radius:25px;
    border: 3px solid #6504b5;
    }
         
    .search{
        background-image: url("bg.jpg");
        background-size: 50px 100px;
        margin:7px;
    }
    th {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .a{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        float: right;
    }
    
    </style>
    <body>
        <div style="padding: 20px 20px; width:100% ; height:100%; background-color:#efeef1; 
        display: flex'; flex-direction: row; justify-content: space-between;align-items: space-between ">
            <p class="left_header">Adopt</p>
            <div class="a" style="display: inline-block">
            <img class="right_header" src="heart.png" width="25" height="25">
                <img class="right_header" src="menu-bar.png" width="27" height="23">
            </div>
        </div>

        <div class="search">
            <center>
             <form action="result.php" method="post">
                 <input type="text"
                     placeholder=" Search Dogs, Cats, Turtles.."
                     name="search">
                 <button>
                     <img src="search-icon.jpg" width="5px" height="5px">
                 </button>
             </form>
             </center>
         </div>


    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>