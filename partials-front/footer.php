
    <div class="section1">
        <div class="head2">
            <h3>PNP Formonix Bag's</h3>
            <p>We manufacture eco-friendly, foodgrade, recycled, odourless paper bags with best quality in various & Customize sizes with affordable cost in huge scale.</p>
        </div>
        <div class="product">
            <h3>Our Products</h3>
            <ul>
                <li><a href="#">Bags with Handle</a></li>
                <li><a href="#">Bags Without Handle</a></li>
                <li><a href="#">Bags without Handle with Logo</a></li>
                <li><a href="#">Bags with Handle with Logo</a></li>
                <li><a href="#">Shopping Bags</a></li>
                <li><a href="#">Medical Bags</a></li>
                <li><a href="#">Cake Bags</a></li>
                <li><a href="#">Shoes Bags</a></li>
                <li><a href="#">Grocery Bags</a></li>
            </ul>
        </div>
        <div class="contact">
            <h3>Contact info</h3>
            <ul>
                <li><p>Shop No.11, Bldg no.13, Atlanda residency, opposite college, anjur phata, kamatghar road, bhiwandi, 421302</p></li>
                <li><a href="#">pnpformonix@gmail.com</a></li>
                <li><a href="#">pnpgroupofcompany@gmail.com</a></li>
                <li><a href="#">mktg@pnpformnix.com</a></li>
                <li><p>8010253329</p></li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <p>2022 PNP Formonix Bags. All rights reserved.</p>
    </div>

    <!--Javascript code-->
    
<script>
    var SlideIndex=1;
    showSlides(SlideIndex);
    
    function plusSlides(n){
        showSlides(SlideIndex+=n);
    }
    
    function showSlides(n) 
    {
        var i;
        var slides=document.getElementsByClassName("myslide");
        if(n>slides.length){SlideIndex=1}
        if(n<1){SlideIndex=slides.length}
        for(i=0;i<slides.length;i++)
        {
            slides[i].style.display="none";
        }
        SlideIndex++;
        if(SlideIndex>slides.length){SlideIndex=1}
        slides[SlideIndex-1].style.display="block";
        setTimeout(showSlides, 2000);
    }
    
    </script>
    <script>

        window.onscroll = function () { scrollFunction() };
        function scrollFunction() {
            document.getElementById("navbar").style.background = "#fff";
        }

        const navToggle = document.querySelector(".nav-toggle");
        const navLinks = document.querySelectorAll(".nav__link");

        navToggle.addEventListener("click", () => {
            document.body.classList.toggle("nav-open");
        });

        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                document.body.classList.remove("nav-open");
            });
        });

    </script>
</body>
</html>
