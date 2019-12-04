<?php 

$title = 'Index';

require_once 'includes/header.php';
require_once 'db/conn.php';

?>


<br>
<div class="container text-center" >
    
  <img src="uploads/reggaemusic.jpg" style="width:100%; height:450px;object-fit:cover;" 
  class="img-thumbnail" alt="music"  >
  <div class="content">
    <h1>Jamaica Music Registry</h1>
    <p>Get paid for your work</p>
    
  </div><br>
  <div>
  <audio autoplay loop src="music/goodways.mp3">
        <source src="music/goodways.mp3" type="audio/mpeg" preload="auto">
        Your browser does not support the audio!
    </audio>  
  </div>
  <br>
  <div class="container alert alert-light text-dark" style="text-align:center">
      <h3 class="text-primary text-center"><u>Music License</u></h3>
      <p>THE COPYRIGHT ACT OF JAMAICA 1993/1999 assures authors and owners of original musical, 
          dramatic or artistic works certain exclusive rights over the use of their works. 
          These rights means that for any use of the work, permission or a ‘licence’ has to be sought 
          from the copyright owner who is entitled to a royalty payment.</p>
          <hr>
          <p>Anyone who copies, distributes, broadcasts or adapts musical works needs a licence. 
              A licence is required for public performances such as concerts, and in public places where 
              music is played such as restaurants, bars, hotels and business places. Radio and television 
              stations, including satellite and cable operators, must be licensed to broadcast into private 
              homes. Those that use these services to provide entertainment for patrons, the general public 
              or staff must have a licence to do so.</p>
    </div><br>

    <div class="alert alert-light text-dark " role="alert">
        <h4 class="text-primary text-center"><u>What service does JMR provide for members?</u></h4>
        <p>It would be impossible for the individual composer, lyricist, songwriter or publisher to monitor 
            the public performances and broadcasts by thousands of users of their music across Jamaica and 
            the rest of the world, to issue licenses and collect royalties due.

Similarly if the music of a composer, lyricist, songwriter or publisher is being recorded by another person 
it would be difficult for the copyright owner to keep track of such recordings. JMR monitors the use of 
music, issues licenses, collects license fees and distributes such fees to its members and reciprocal 
affiliated societies as royalties.</p>
</div>
  
</div>







<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php require_once 'includes/footer.php'; ?>