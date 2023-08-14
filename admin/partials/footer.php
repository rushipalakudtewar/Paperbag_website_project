

    <!--footer section starts-->
    <div class="footer">
        <p>2022 PNP Formonix Bags. All rights reserved.</p>
    </div>
    <!--footer section ends-->
    
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