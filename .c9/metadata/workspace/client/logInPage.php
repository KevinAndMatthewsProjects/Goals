{"filter":false,"title":"logInPage.php","tooltip":"/client/logInPage.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":0,"column":0},"end":{"row":26,"column":38},"action":"remove","lines":[" Includes","require_once 'cps_simple.php';","","// Connection hubs","// Note, replace 'api-eu' with appropriate Cloud server you use - 'api-us' or 'api-uk'","$connectionStrings = array(","\t'tcp://cloud-eu-0.clusterpoint.com:9007',","\t'tcp://cloud-eu-1.clusterpoint.com:9007',","\t'tcp://cloud-eu-2.clusterpoint.com:9007',","\t'tcp://cloud-eu-3.clusterpoint.com:9007'",");","","// Creating a CPS_Connection instance","$cpsConn = new CPS_Connection(","\tnew CPS_LoadBalancer($connectionStrings),","\t'DB_NAME',","\t'USERNAME',","\t'PASSWORD',","\t'document',","\t'//document/id',","\tarray('account' => YOUR_ACCOUNT_ID)",");","","// Debug","//$cpsConn->setDebug(true);","// Creating a CPS_Simple instance","$cpsSimple = new CPS_Simple($cpsConn);"],"id":22}],[{"start":{"row":0,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":[" <html>","<body>","","<form action=\"welcome.php\" method=\"post\">","Name: <input type=\"text\" name=\"name\"><br>","E-mail: <input type=\"text\" name=\"email\"><br>","<input type=\"submit\">","</form>","","</body>","</html> "],"id":23}],[{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"remove","lines":["e"],"id":24}],[{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"remove","lines":["m"],"id":25}],[{"start":{"row":3,"column":18},"end":{"row":3,"column":19},"action":"remove","lines":["o"],"id":26}],[{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"remove","lines":["c"],"id":27}],[{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"remove","lines":["l"],"id":28}],[{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"remove","lines":["e"],"id":29}],[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"remove","lines":["w"],"id":30}],[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"insert","lines":["l"],"id":31}],[{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"insert","lines":["o"],"id":32}],[{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"insert","lines":["g"],"id":33}],[{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"insert","lines":["I"],"id":34}],[{"start":{"row":3,"column":18},"end":{"row":3,"column":19},"action":"insert","lines":["n"],"id":35}],[{"start":{"row":4,"column":31},"end":{"row":4,"column":35},"action":"remove","lines":["name"],"id":36},{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"insert","lines":["U"]}],[{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"insert","lines":["s"],"id":37}],[{"start":{"row":4,"column":33},"end":{"row":4,"column":34},"action":"insert","lines":["e"],"id":38}],[{"start":{"row":4,"column":34},"end":{"row":4,"column":35},"action":"insert","lines":["r"],"id":39}],[{"start":{"row":4,"column":35},"end":{"row":4,"column":36},"action":"insert","lines":["N"],"id":40}],[{"start":{"row":4,"column":36},"end":{"row":4,"column":37},"action":"insert","lines":["a"],"id":41}],[{"start":{"row":4,"column":37},"end":{"row":4,"column":38},"action":"insert","lines":["m"],"id":42}],[{"start":{"row":4,"column":38},"end":{"row":4,"column":39},"action":"insert","lines":["e"],"id":43}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":["l"],"id":44}],[{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["i"],"id":45}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["a"],"id":46}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["m"],"id":47}],[{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"remove","lines":["e"],"id":48}],[{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"insert","lines":["p"],"id":49}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["a"],"id":50}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["s"],"id":51}],[{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["s"],"id":52}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["l"],"id":53}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["i"],"id":54}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":["a"],"id":55}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"remove","lines":["m"],"id":56}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["-"],"id":57}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":["E"],"id":58}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["P"],"id":59}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["a"],"id":60}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["s"],"id":61}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["s"],"id":62}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["w"],"id":63}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["o"],"id":64}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["r"],"id":65}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["d"],"id":66}],[{"start":{"row":0,"column":0},"end":{"row":10,"column":8},"action":"remove","lines":[" <html>","<body>","","<form action=\"logIn.php\" method=\"post\">","Name: <input type=\"text\" name=\"UserName\"><br>","Password: <input type=\"text\" name=\"pass\"><br>","<input type=\"submit\">","</form>","","</body>","</html> "],"id":67,"ignore":true},{"start":{"row":0,"column":0},"end":{"row":200,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html >","<head>","  <meta charset=\"UTF-8\">","  <title>Animated login form</title>","  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>","<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">","  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">","","  ","      <style>","      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */","      body {","  font-family: \"Open Sans\", sans-serif;","  height: 100vh;","  background: url(\"http://i.imgur.com/HgflTDf.jpg\") 50% fixed;","  background-size: cover;","}","","@keyframes spinner {","  0% {","    transform: rotateZ(0deg);","  }","  100% {","    transform: rotateZ(359deg);","  }","}","* {","  box-sizing: border-box;","}","",".wrapper {","  display: flex;","  align-items: center;","  flex-direction: column;","  justify-content: center;","  width: 100%;","  min-height: 100%;","  padding: 20px;","  background: rgba(4, 40, 68, 0.85);","}","",".login {","  border-radius: 2px 2px 5px 5px;","  padding: 10px 20px 20px 20px;","  width: 90%;","  max-width: 320px;","  background: #ffffff;","  position: relative;","  padding-bottom: 80px;","  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);","}",".login.loading button {","  max-height: 100%;","  padding-top: 50px;","}",".login.loading button .spinner {","  opacity: 1;","  top: 40%;","}",".login.ok button {","  background-color: #8bc34a;","}",".login.ok button .spinner {","  border-radius: 0;","  border-top-color: transparent;","  border-right-color: transparent;","  height: 20px;","  animation: none;","  transform: rotateZ(-45deg);","}",".login input {","  display: block;","  padding: 15px 10px;","  margin-bottom: 10px;","  width: 100%;","  border: 1px solid #ddd;","  transition: border-width 0.2s ease;","  border-radius: 2px;","  color: #ccc;","}",".login input + i.fa {","  color: #fff;","  font-size: 1em;","  position: absolute;","  margin-top: -47px;","  opacity: 0;","  left: 0;","  transition: all 0.1s ease-in;","}",".login input:focus {","  outline: none;","  color: #444;","  border-color: #2196F3;","  border-left-width: 35px;","}",".login input:focus + i.fa {","  opacity: 1;","  left: 30px;","  transition: all 0.25s ease-out;","}",".login a {","  font-size: 0.8em;","  color: #2196F3;","  text-decoration: none;","}",".login .title {","  color: #444;","  font-size: 1.2em;","  font-weight: bold;","  margin: 10px 0 30px 0;","  border-bottom: 1px solid #eee;","  padding-bottom: 20px;","}",".login button {","  width: 100%;","  height: 100%;","  padding: 10px 10px;","  background: #2196F3;","  color: #fff;","  display: block;","  border: none;","  margin-top: 20px;","  position: absolute;","  left: 0;","  bottom: 0;","  max-height: 60px;","  border: 0px solid rgba(0, 0, 0, 0.1);","  border-radius: 0 0 2px 2px;","  transform: rotateZ(0deg);","  transition: all 0.1s ease-out;","  border-bottom-width: 7px;","}",".login button .spinner {","  display: block;","  width: 40px;","  height: 40px;","  position: absolute;","  border: 4px solid #ffffff;","  border-top-color: rgba(255, 255, 255, 0.3);","  border-radius: 100%;","  left: 50%;","  top: 0;","  opacity: 0;","  margin-left: -20px;","  margin-top: -20px;","  animation: spinner 0.6s infinite linear;","  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;","  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);","}",".login:not(.loading) button:hover {","  box-shadow: 0px 1px 3px #2196F3;","}",".login:not(.loading) button:focus {","  border-bottom-width: 4px;","}","","footer {","  display: block;","  padding-top: 50px;","  text-align: center;","  color: #ddd;","  font-weight: normal;","  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);","  font-size: 0.8em;","}","footer a, footer a:link {","  color: #fff;","  text-decoration: none;","}","","    </style>","","  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js\"></script>","","</head>","","<body>","  <div class=\"wrapper\">","  <form class=\"login\">","    <p class=\"title\">Log in</p>","    <input type=\"text\" placeholder=\"Username\" autofocus/>","    <i class=\"fa fa-user\"></i>","    <input type=\"password\" placeholder=\"Password\" />","    <i class=\"fa fa-key\"></i>","    <a href=\"#\">Forgot your password?</a>","    <button>","      <i class=\"spinner\"></i>","      <span class=\"state\">Log in</span>","    </button>","  </form>","  <footer><a target=\"blank\" href=\"http://boudra.me/\">boudra.me</a></footer>","  </p>","</div>","  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>","","    <script src=\"js/index.js\"></script>","","</body>","</html>",""]}],[{"start":{"row":191,"column":10},"end":{"row":191,"column":53},"action":"remove","lines":["<a target=\"blank\" href=\"http://boudra.me/\">"],"id":68,"ignore":true}],[{"start":{"row":191,"column":22},"end":{"row":191,"column":23},"action":"remove","lines":[">"],"id":69,"ignore":true}],[{"start":{"row":191,"column":17},"end":{"row":191,"column":22},"action":"remove","lines":["me</a"],"id":70,"ignore":true}],[{"start":{"row":191,"column":14},"end":{"row":191,"column":17},"action":"remove","lines":["ra."],"id":71,"ignore":true}],[{"start":{"row":191,"column":11},"end":{"row":191,"column":14},"action":"remove","lines":["oud"],"id":72,"ignore":true}],[{"start":{"row":191,"column":10},"end":{"row":191,"column":11},"action":"remove","lines":["b"],"id":73,"ignore":true},{"start":{"row":191,"column":10},"end":{"row":191,"column":11},"action":"insert","lines":["K"]}],[{"start":{"row":191,"column":11},"end":{"row":191,"column":15},"action":"insert","lines":["evin"],"id":74,"ignore":true}],[{"start":{"row":191,"column":15},"end":{"row":191,"column":17},"action":"insert","lines":[" P"],"id":75,"ignore":true}],[{"start":{"row":191,"column":17},"end":{"row":191,"column":20},"action":"insert","lines":["ala"],"id":76,"ignore":true}],[{"start":{"row":191,"column":20},"end":{"row":191,"column":22},"action":"insert","lines":["ni"],"id":77,"ignore":true}],[{"start":{"row":191,"column":22},"end":{"row":191,"column":24},"action":"insert","lines":[" &"],"id":78,"ignore":true}],[{"start":{"row":191,"column":24},"end":{"row":191,"column":27},"action":"insert","lines":[" Ma"],"id":79,"ignore":true}],[{"start":{"row":191,"column":27},"end":{"row":191,"column":32},"action":"insert","lines":["tthew"],"id":80,"ignore":true}],[{"start":{"row":191,"column":32},"end":{"row":191,"column":35},"action":"insert","lines":[" Ph"],"id":81,"ignore":true}],[{"start":{"row":191,"column":35},"end":{"row":191,"column":37},"action":"insert","lines":["am"],"id":82,"ignore":true}],[{"start":{"row":179,"column":21},"end":{"row":179,"column":22},"action":"insert","lines":[" "],"id":83}],[{"start":{"row":179,"column":22},"end":{"row":179,"column":56},"action":"insert","lines":["action=\"welcome.php\" method=\"post\""],"id":84}],[{"start":{"row":179,"column":30},"end":{"row":179,"column":37},"action":"remove","lines":["welcome"],"id":85,"ignore":true},{"start":{"row":179,"column":30},"end":{"row":179,"column":32},"action":"insert","lines":["lo"]}],[{"start":{"row":179,"column":32},"end":{"row":179,"column":34},"action":"insert","lines":["gI"],"id":86,"ignore":true}],[{"start":{"row":179,"column":34},"end":{"row":179,"column":35},"action":"insert","lines":["n"],"id":87,"ignore":true}],[{"start":{"row":4,"column":9},"end":{"row":4,"column":29},"action":"remove","lines":["Animated login form<"],"id":88,"ignore":true},{"start":{"row":4,"column":9},"end":{"row":4,"column":15},"action":"insert","lines":["Log In"]}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["<"],"id":89,"ignore":true}],[{"start":{"row":179,"column":33},"end":{"row":179,"column":34},"action":"remove","lines":["I"],"id":90}],[{"start":{"row":179,"column":33},"end":{"row":179,"column":34},"action":"insert","lines":["i"],"id":91}],[{"start":{"row":179,"column":30},"end":{"row":179,"column":31},"action":"insert","lines":["/"],"id":92}],[{"start":{"row":179,"column":30},"end":{"row":179,"column":31},"action":"remove","lines":["/"],"id":93}],[{"start":{"row":179,"column":34},"end":{"row":179,"column":35},"action":"remove","lines":["n"],"id":94}],[{"start":{"row":179,"column":33},"end":{"row":179,"column":34},"action":"remove","lines":["i"],"id":95}],[{"start":{"row":179,"column":33},"end":{"row":179,"column":34},"action":"insert","lines":["I"],"id":96}],[{"start":{"row":179,"column":34},"end":{"row":179,"column":35},"action":"insert","lines":["n"],"id":97}],[{"start":{"row":179,"column":35},"end":{"row":179,"column":36},"action":"insert","lines":["S"],"id":98}],[{"start":{"row":179,"column":36},"end":{"row":179,"column":37},"action":"insert","lines":["c"],"id":99}],[{"start":{"row":179,"column":37},"end":{"row":179,"column":38},"action":"insert","lines":["r"],"id":100}],[{"start":{"row":179,"column":38},"end":{"row":179,"column":39},"action":"insert","lines":["i"],"id":101},{"start":{"row":179,"column":39},"end":{"row":179,"column":40},"action":"insert","lines":["p"]}],[{"start":{"row":179,"column":40},"end":{"row":179,"column":41},"action":"insert","lines":["t"],"id":102}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":103}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":104}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":105}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"],"id":106}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"],"id":107}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":108}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"],"id":109}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":110}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":111}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["?"],"id":112}],[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":[">"],"id":113}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":54},"action":"insert","lines":["ini_set('display_errors', 1); error_reporting(E_ALL); "],"id":114}],[{"start":{"row":183,"column":30},"end":{"row":183,"column":31},"action":"insert","lines":["c"],"id":115}],[{"start":{"row":183,"column":31},"end":{"row":183,"column":32},"action":"insert","lines":["l"],"id":116}],[{"start":{"row":183,"column":32},"end":{"row":183,"column":33},"action":"insert","lines":["i"],"id":117}],[{"start":{"row":183,"column":33},"end":{"row":183,"column":34},"action":"insert","lines":["e"],"id":118}],[{"start":{"row":183,"column":34},"end":{"row":183,"column":35},"action":"insert","lines":["n"],"id":119}],[{"start":{"row":183,"column":35},"end":{"row":183,"column":36},"action":"insert","lines":["t"],"id":120}],[{"start":{"row":183,"column":36},"end":{"row":183,"column":37},"action":"insert","lines":["/"],"id":121}],[{"start":{"row":183,"column":30},"end":{"row":183,"column":52},"action":"remove","lines":["client/logInScript.php"],"id":122},{"start":{"row":183,"column":30},"end":{"row":183,"column":53},"action":"insert","lines":["/client/logInScript.php"]}],[{"start":{"row":183,"column":53},"end":{"row":183,"column":76},"action":"insert","lines":["/client/logInScript.php"],"id":123}]]},"ace":{"folds":[],"scrolltop":2400,"scrollleft":0,"selection":{"start":{"row":181,"column":6},"end":{"row":181,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":165,"state":["css-ruleset","css-start"],"mode":"ace/mode/php"}},"timestamp":1486245913531,"hash":"9f6df3fe3ca1cb4915dca4b70d013cbfee34e698"}