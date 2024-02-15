<?php 
  $quotes = array('This is a contract. I’ll be your heart. In exchange… Show me your dreams.', 'Everyone’s got their own dreams. There’s nothing wrong with that. But if you are gonna get in our way, then fvck off.', 'If there’s a devil that’ll be my friend, then I will take it ’cause I never had any.', 'I’ve decided if I sleep tonight, I’m gonna dream about eating bread with jam smothered all over it with you, Pochita.', 'All devils are born bearing a name. As that name becomes feared, the devil itself increases in power.'); 
  $randoq = $quotes[array_rand($quotes)]; 
?>

<section id="pochita">
  <div class="container-fluid text-center">
  <h6 class="text-center pt-2" id="sect-title"">Pochita's Picks</h6>

    <div class="container text-center mt-4">
      <div class="row row-cols-2 justify-content-around">

      <div class="col mt-5" id="gregg"> 
         <button id="popovitch" class="btn bg-transparent border-0  float-start" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="left" data-bs-content="<?=$randoq?>">
        <img src="{{asset('/images/imgsrc/pochita_img.png')}}" class="rounded float-start mt-3" id="plcdd">
         </button> 
      </div>

        <div class="col" style="margin-left: -150px;">
           <ul class="image-list-small">
    <li> 
      <a id="galimg" style="background-image: url('/images/gallery/pochita/CSMDenji_13x19_Smartpress-20221114_070320932.webp'); 
background-size: 100% 100%;"></a>
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/1-pochita-nguyen-hai.jpg'); background-size: 100% 100%;"></a>
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/67f91b80110b9ee6db4be6edea055dd9.jpg'); background-size: 100% 100%;"></a>
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/d916a6422849df6f6570285a2825be6b_4a733d7374625e68b1788c8f7610584b.jpg'); background-size: 100% 100%;"></a>
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/HD-wallpaper-anime-chainsaw-man-denji-chainsaw-man-pochita-chainsaw.jpg'); background-size: 100% 100%;"></a> 
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/d7657ae03492393c67bf7e4ed7eab46c.jpg'); background-size: 100% 100%;"></a> 
    </li>
  <li>
      <a style="background-image: url('/images/gallery/pochita/valentina-ivanescu-img-1545.jpg'); background-size: 100% 100%;"></a> 
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/pochita-min.jpg'); background-size: 100% 100%;"></a>  
    </li>
    <li>
      <a style="background-image: url('/images/gallery/pochita/artworks-AYW8wJEmrytUsbHi-kcArdQ-t500x500.jpg'); background-size: 100% 100%;"></a> 
    </li>
   </ul>
        </div>

      </div>
    </div> 

  </div>
</section>

<style>
#pochita {
  background-color: #FFD580;
}

#plcdd {
  height: 18.75rem; 
  padding-left: 50px; 
  pointer-events:none;
}

.image-list-small {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0 auto;
  text-align: center;
  max-width: 640px; 
  padding: 0;
}

.image-list-small li {
  display: inline-block;
  width: 131px; 
  margin: 0 12px 30px;
}

.image-list-small li > a {
  display: block;
  text-decoration: none;
  background: lightgray; 
  background-repeat: no-repeat;
  height: 137px;
  margin: 0;
  padding: 0;
  border: 1px solid #ffffff;
  outline: 1px solid #d0d0d0;
  box-shadow: 0 2px 1px #DDD; 
}

.image-list-small .details {
  margin-top: 13px;
}

.image-list-small .details h3 {
  display: block;
  font-size: 12px;
  margin: 0 0 3px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.image-list-small .details h3 a {
  color: #303030;
  text-decoration: none;
}

.image-list-small .details .image-author {
  display: block;
  color: #717171;
  font-size: 11px;
  font-weight: normal;
  margin: 0;
}

.image-list-small:hover a {
  opacity:0.2;
}
.image-list-small a:hover {
  height: 155px; 
  opacity:1;
  transform: scale(1.4);
}
</style>

<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>

<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

document.getElementById("gregg").addEventListener("mouseleave", function() { 
 $('#popovitch').popover('dispose');
 $('#popovitch').popover({ placement : 'left', trigger: 'hover', content : '“Stop that! I am not a corn dog!”' }); 
});
</script>
