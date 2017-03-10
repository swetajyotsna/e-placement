<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">News & Events</h2>
        <div id="hpage_quicklinks">
         
         <marquee direction="up" scrollamount="10" onMouseOver="stop()" onMouseOut="start()">
       <?php
		include "db/config.php";
		$q=mysqli_query($connection,"select * from notice_details");
		$slno=0;
		while($arr=mysqli_fetch_array($q))
		{
			$slno++;
			$id=$arr["id"];
			$notice=$arr["notice"];
			$pdate=$arr["publishdate"];
			echo '<p>'.$notice.'</p>';
		}
	?>  </marquee>
    </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Welcome to Synergy College</h2>
        <div id="hpage_latestnews">
          <ul>
            <li>
              <div class="imgl"><img src="image/chairman.jpg" height="100" width="100" alt="" /></div>
              <p class="latestnews">
            <p><b> Chairman's Message</b></p>

<p>My humble message to our students is to always keep in mind the golden rule that there is no substitute of hard work because sincere hard work is the mother of success and luck is only a distant relative.
The creation of a pearl inside any oyster is a miracle in Nature.
I sincerely hope that..</p>
          </li>
               
           <li>
              <div class="imgl"><img src="image/director.jpg" height="100" width="100" alt="" /></div>
              <p class="latestnews">
             <p><b> Director's Message</b></p>

<p>Professor Padmalochan Nayak (born in 5th May, 1938) received M.Sc. Organic Chemistry in 1962, Ph. D. Physical Chemistry in 1968 and D.Sc. in Polymer Chemistry in 1981 all from Utkal University. He is the first Indian to be awarded D.Sc. Degree in Polymer Science. Professor Nayak joined Ravenshaw College in the year 1962 as a Lecturer,...</p>
          </li>
           
             
            <li>
             <div class="imgl"><img src="image/principal.jpg" height="100" width="100" alt="" /></div>
                <p class="latestnews">
              <p><b> Principal's Message</b></p>
              <p>Professor Padmalochan Nayak (born in 5th May, 1938) received M.Sc. Organic Chemistry in 1962, Ph. D. Physical Chemistry in 1968 and D.Sc. in Polymer Chemistry in 1981 all from Utkal University. He is the first Indian to be awarded D.Sc. Degree in Polymer Science. Professor Nayak joined Ravenshaw College in the year 1962 as a Lecturer,...</p>
            
               <p class="readmore"><a href="aboutus.php">Continue Reading &raquo;</a></p>
            </li>
           
          </ul>
        </div>
        
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>