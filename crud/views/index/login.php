 <center><div class="formo">
    <h2 style="color:white">Login</h2>
    <p><?php if(isset($_SESSION['flash']['message'])) echo $_SESSION['flash']['message']; ?>
   </p>
    <form action="?controller=security&method=login" method="POST">
      
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required "><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required ><br><br>
             <label for="password">confirm Password</label><br>
            <input type="password" name="password_ver" id="password" required ><br><br>
       
        
            <button>Ingresar</button>
        
    </form>
    </div></center>
</section>