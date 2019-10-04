<h1>Publicaciones</h1>
 <?php foreach(parent::all() as $post):  ?>
<div class="post">
    
    <div class="content-post">
   <center>
        <img style=" box-shadow: 0 8px 5px #00000047; margin-top: -55px;  border-radius:110%;" src="<?= $post->foto ?>" width="100"><br>
        <span>Creado por: <strong style="color:red; font-size: 18px"> <?= $post->name ?></strong></span><br>
        <p><?= $post->rol_id ?></p>

        
        <img style=" box-shadow: 0 8px 5px #00000047; border:1px solid; margin-top: 5px; margin-bottom: 8px" src="<?= $post->url_img ?>" width="400"><br>
        </center>
        <h3><?= $post->titulo ?></h3>
        <p><?= $post->description ?></p>
    </div>
    
                
</div>

 <?php endforeach; ?>