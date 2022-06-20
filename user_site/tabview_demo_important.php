<?php

require_once "connection.php";
require_once "header.php";
// require_once "stickymenu.php";|
?>
<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 80%;
        margin-left: 9%;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        color: #6a3093;
    }
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 40px;
        border: 1px solid #ccc;
        border-top: none;
        width: 80%;
        margin-left: 9%;
        /* margin-top:200px; */
    }
</style>
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'Enabling a giving culture')" id="defaultOpen">Enabling a
    giving culture</button>
<button class="tablinks" onclick="openCity(event, 'What we do')">What we do</button>
<button class="tablinks" onclick="openCity(event, 'Our guiding principles')">Our guiding principles</button>
<button class="tablinks" onclick="openCity(event, 'Our team')">Our team</button>
</div>

<div id="Enabling a giving culture" class="tabcontent">
            <h3 style="font-size:28px;">Enabling A Giving Culture</h3>
            <p>Flyers was born on April 28, 2000 out of the belief that equal opportunity is the cornerstone of
                civilization. All human beings must have the same opportunity to succeed in life, irrespective of the
                circumstances they were born into.</p>
            <p>However, this is far from true.<br />

                Individual wealth in India witnessed a growth rate of 10.91% in the year 2016-17 against 8.50% in
                2015-16 . India also created higher number of high-net-worth-individuals with a growth rate of 9.5%
                against the Asia growth rate of 7.5%*.</p>
            <p>
                And yet, 36% of children under 5 in India are malnourished*, 51 per cent of the women of reproductive
                age suffer from anemia*, 33 million children still do not attend school and employed in various forms of
                child labor,* 350 million Indians still face the burden of open defecation due to lack of access to
                sanitation facilities,* and close to 18,000 villages in India still do not have storage facilities for
                water.

                We at GiveIndia, aspire to change this inequality.
            </p>
            <p>
                We do that by bringing together the people who want to give and the organizations that work to make a
                difference.</p>

            <p>
            <blockquote style="background: #e1c4ff;
    padding: 20px 40px 20px 40px;
    font-size: 19px;">“The idea of GiveIndia was born very simply to bridge the gap between two sets of people - people
                who want to give, who want to try and make a difference along with those who are doing phenomenal work
                but don’t know how to reach out to the people who want to support them.”
            </blockquote>
            </p>

            <p>
                The consequences of poverty are manifold and it impacts families through generations. An intervention at
                the right time, like educating one generation or providing livelihood to increase income can help
                families break the cycle of generational poverty.
            </p>
        </div>

        <div id="What we do" class="tabcontent">
            <h3 style="font-size:28px;">What We Do</h3>
            <p>GiveIndia, an online donation platform, allows you to support a cause of your choice from the NGOs that
                have been evaluated for transparency and credibility.</p>
            <p>GiveIndia is India's largest and most trustworthy giving platform for donors. With contributions of over
                ₹450+ crore from 13 lakh donors and 150+ corporates, supporting 1250+ nonprofits and impacting 45 lakh
                lives across 23 states in India.</p>

            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="text-align:center;"><img src="assets/img/about1.png" height="300"
                            width="400" /></div>
                    <div class="col-md-6">
                        <p>We tell you exactly how your donation helps those in need and also give you a proof of it
                            through fund utilisation reports.

                            We have reviewed hundreds of nonprofit organizations from all over India to identify and
                            list the ones that meet our GiveAssured criteria. They work for a host of causes ranging
                            from child welfare and education to disability, poverty, and women's empowerment and many
                            others.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top:20px;">
                <div class="col-md-12">
                    <h3 style="font-size:28px; text-align:center;">How we work</h3>
                </div>
                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-1.png" height="150" width="150" />
                </div>
                <div class="col-md-6">
                    <p style="padding-top:30px;">1. You select the program that you wish to commit to support</p>
                </div>


                <div class="col-md-6">
                    <p style="padding-top:30px;">2. You receive a tax exemption receipt as soon as your donation
                        transaction is complete</p>
                </div>

                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-2.png" height="150" width="150" />
                </div>

                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-3.png" height="150" width="150" />
                </div>
                <div class="col-md-6">
                    <p style="padding-top:30px;">3. The amount is allocated to the program and nonprofit of your choice
                    </p>
                </div>
                <div class="col-md-6">
                    <p style="padding-top:30px;">4. Donations are disbursed to the nonprofits as per our schedule</p>
                </div>
                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-4.png" height="150" width="150" />
                </div>
                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-5.png" height="150" width="150" />
                </div>
                <div class="col-md-6">
                    <p style="padding-top:30px;">5. The nonprofit utilizes the money for the people as per your chosen
                        program</p>
                </div>
                <div class="col-md-6">
                    <p style="padding-top:30px;">6. We track every donation and ensure that the nonprofit sends us a
                        report on how they utilize donations</p>
                </div>
                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-6.png" height="150" width="150" />
                </div>
                <div class="col-md-6" style="text-align:center;">

                    <img src="assets/img/step-7.png" height="150" width="150" />
                </div>
                <div class="col-md-6">
                    <p style="padding-top:30px;">7. We give you periodic updates about the people and the program you
                        are helping</p>
                </div>
                <div class="col-md-12">
                    <p>
                        When you chose us to be your giving partner, you can rest assured that your contributions do
                        what you want them to do.
                    </p>

                </div>
            </div>
        </div>

        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
        </script>
<?php
$n = "shruti";
$var=substr($n,1,2);
echo $var;


?>

<?php
require_once "script.php";
?>	