<?php
$src=$_FILES['img']['tmp_name'];
$file=$_FILES['img']['name'];
$dot=explode('.', $file);
$ext=array_pop($dot);
$rand=time().mt_rand().'.'.$ext;
$dst="uploads/{$rand}";

 if ($_FILES['img']['error']===0) {
     if(move_uploaded_file($src, $dst)){
        echo "<script>imgid=top.document.getElementById('imgid');imgid.src='{$dst}'</script>";
     }
 }

?>