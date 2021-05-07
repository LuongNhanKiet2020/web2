<style>
    input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.imgcontainer {
  text-align: center;
  margin: 20px 0 8px 0;
  position: relative;
}
img.avatar {
  width: 20%;
  border-radius: 50%;
}
.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 10px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 30%;
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
</style>

<div id="id01" class="modal" style="display:block;position:relative; height:680px">
  
  <form id="formName" class="modal-content animate" action="index.php" method="post" onsubmit="dangnhap($('#uname').val(), $('#pword').val())">
    <div class="imgcontainer">
      <span class="close" title="Close Modal">&times;</span>
      <img src="./modules/images/avatar-373-456325.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

      <label for="pword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="pword" name="pword" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<script>
    function dangnhap(user, pass){
      $.post('modules/xuli/xulidn.php',{
        user: user,
        pass: pass
      }, function(data){
        alert(data)
      })
    }
</script>