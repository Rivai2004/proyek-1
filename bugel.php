<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .top-container {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: center;
        }

        .header {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top: 102px;
        }
    </style>
</head>

<body>
    <div class="header" id="myHeader">
        <h2>SEJARAH</h2>
    </div>
    <center>
        <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title" style="margin-left: -1000px;">Sejarah Desa Leuwigede</h2>
                        <p class="card-text">
                            apalah arti ini
                        </p>
                        <p class="card-text">
                            <small class="text-muted"></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="to-move full centered footer-separator" itemtype="https://schema.org/WPFooter" itemscope="">
            <div class="foot-items">
                <div class="foot-content clearfix">
                    <div class="f-links">
                        <div class="socials icons-only white color_hover">
                            <a target="_blank" title="Facebook" href=""><i class="fa-brands fa-facebook"></i> </a><a target="_blank" title="Instagram" href="https://www.instagram.com/desabulakan" rel="noopener"><i class="fa-brands fa-instagram"></i></a><a target="_blank" title="Twitter" href="https://twitter.com/desabulakan" rel="noopener"><i class="fa-brands fa-twitter"></i></a><a target="_blank" title="YouTube" href="https://www.youtube.com/channel/UCVGvRO01esRfF_s-0Ow8EqA" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="foot-text">
                        © 2023 Pemerintah Desa Leuwigede. All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </center>
    <script>
        window.onscroll = function() {
            myFunction();
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>