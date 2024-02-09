<ul class="global-footer">
    <li class="footer-item-1">
      <h2>About IDEA</h2>
      <p>Capilano University’s Bachelor of Design in Visual Communication is a career-oriented program 
        for the next generation of creative professionals, with concentrations in branding, illustration and interactive design.</p>
        
    </li>
    <li class="footer-item-2">

      <a href="https://www.capilanou.ca/programs--courses/program-profiles/bachelor-of-design-in-visual-communication/" target="_blank">
      <figure class="idealogo">
      
        <img src="assets/branding-images/idea-logo.png" width="70%"/>
    </figure> </a>
      <!-- add padding at the top of the logo in the CSS, center align -->

    </li>
    <li class="footer-item-3">
      <h2>Contact &amp; Social</h2>
      <ul class="socials-list">
        <li class="social-item"><a href="https://www.capilanou.ca/programs--courses/search--select/explore-our-areas-of-study/fine--applied-arts/idea-school-of-design/" target="_blank">IDEA School of Design</a></li>
        <li class="social-item"><a href="https://www.instagram.com/capuidea/" target="blank">CapU IDEA Instagram</a></li>
        <li class="social-item"><a href="https://www.instagram.com/ideatwentysix" target="_blank">IDEA 2026 Instagram</a></li>
      </ul>
    </li>
    <li class="footer-item-4">
      <p class="fineprint">&copy; 2020-2023. Hand crafted with <span class="heart">❤</span> + Flexbox + CSS Grid by
        James Neufeld.</p>
    </li>
  </ul>

  <div id="myID" class="bottomMenu hide"><a href="#">Back to top</a></div>

  <script type="text/javascript">
    myID = document.getElementById("myID");

    var myScrollFunc = function () {
      var y = window.scrollY;
      if (y >= 800) {
        myID.className = "bottomMenu show"
      } else {
        myID.className = "bottomMenu hide"
      }
    };

    window.addEventListener("scroll", myScrollFunc);
  </script>
</body>

</html>